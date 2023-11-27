@extends('layouts.master')
@section('title')
    المتجر
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المتجر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المنتجات</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection

@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة</a>

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                               data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">الوصف</th>
                                <th scope="col">السعر</th>
                                <th scope="col">الخصم</th>
                                <th scope="col">السعر بعد الخصم</th>
                                <th scope="col">الصورة</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">القسم</th>
                                <th class="wd-25p border-bottom-0">العمليات</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($products as $product)
                                <tr>

                                        <?php $i++; ?>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount }}</td>
                                    <td>{{ $product->final_price }}</td>
                                    <td > <img src="{{ asset($product->image) }}"  style="width: 80px" height="80px" border-radius="50%" ></td>

                                    <td>
                                        @if ($product->status == "in_stock")
                                            <span class="badge badge-pill badge-success">{{ $product->status }}</span>
                                        @else ($product->status == "unavailable")
                                            <span class="badge badge-pill badge-danger">{{ $product->status }}</span>
                                        @endif
                                    </td>

{{--                                    <td>{{ $product->status }}</td>--}}
                                    <td>{{ optional($product->category)->category_name }}</td>

                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $product->id }}"
                                                title=""><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $product->id }}"
                                                title=""><i
                                                class="fa fa-trash"></i></button>

                                    </td>
                                </tr>

                                <!-- edit_modal -->
                                <div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="id"value="{{ $product->id}}">

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الاسم  </label>
                                                        <input type="text" class="form-control" id="slider_title" name="name"  value="{{ $product->name}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الوصف  </label>
                                                        <input type="text" class="form-control" id="slider_title" name="description"  value="{{ $product->description}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">السعر  </label>
                                                        <input type="text" class="form-control" id="slider_title" name="price"  value="{{ $product->price}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الخصم  </label>
                                                        <input type="text" class="form-control" id="slider_title" name="discount"  value="{{ $product->discount}}" >
                                                    </div>


                                                    <div class="form-group">
                                                        <label >image</label>
                                                        <input type="file" class="form-control-file" name="image" value=" {{ $product->image}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">صور المنتج</label>
                                                        <input type="file" name="images[]" data-default-file=""  accept="image/png, image/gif, image/jpeg,image/jpg" multiple />
                                                    </div>

                                                 <label for="category_id">الحالة</label>
                                                    <select name="status" id="status" class="form-control" required>
                                                        <option value="" disabled> --حدد الحالة--</option>
                                                        <option value="in_stock" {{ $product->status == 'in_stock' ? 'selected' : '' }}>in_stock</option>
                                                        <option value="unavailable" {{ $product->status == 'unavailable' ? 'selected' : '' }}>unavailable</option>
                                                    </select>

                                                    <div class="form-group">
                                                        <label for="category_id">القسم</label>
                                                        <select name="category_id" id="category_id" class="form-control" required>
                                                            <option value="{{ $product->category->id }}" selected>{{ optional($product->category)->category_name }}</option>
                                                            <option value="">-- حدد القسم --</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">تاكيد</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--                    <!-- delete_modal -->--}}
                                <div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    هل انت متاكد من عملية الحذف؟</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                    @method('DELETE')

                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $product->id }}">
                                                    <div class="modal-footer">
                                                        <button type="submit"
                                                                class="btn btn-danger">حذف</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach

                            <!-- add modal -->
                            <div class="modal" id="modaldemo8">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">اضافة</h6>
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="name">الاسم</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="description">الوصف</label>
                                                    <input type="text" class="form-control" id="description" name="description">
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">السعر</label>
                                                    <input type="text" class="form-control" id="price" name="price">
                                                </div>

                                                <div class="form-group">
                                                    <label for="discount">الخصم</label>
                                                    <input type="text" class="form-control" id="discount" name="discount">
                                                </div>

                                                <div class="form-group">
                                                    <label for="image"> الصورة الاساسية للمنتج</label>
                                                    <input type="file" class="form-control-file" id="image" name="image">
                                                </div>

                                                <div class="form-group">
                                                    <label for="image">صور المنتج</label>
                                                    <input type="file" name="images[]" data-default-file=""  accept="image/png, image/gif, image/jpeg,image/jpg" multiple />
                                                </div>


                                                <div class="form-group">
                                                    <label for="status">الحالة</label>
                                                    <select name="status" id="status" class="form-control" required>
                                                        <option value="" selected disabled>-- حدد الحالة --</option>
                                                        <option value="in_stock">in_stock</option>
                                                        <option value="unavailable">unavailable</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="category_id">القسم</label>
                                                    <select name="category_id" id="category_id" class="form-control" required>
                                                        <option value="" selected disabled>-- حدد القسم --</option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ optional($category)->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">تأكيد</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Basic modal -->
                            </div>
                            <!-- row closed -->
                    </div>
                    <!-- Container closed -->
                </div>
                <!-- main-content closed -->

    {{ $products->links() }}

@endsection

