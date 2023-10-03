@extends('layouts.master')
@section('title')
    المتجر
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المتجر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ admins</span>
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
{{--                                <th class="wd-15p border-bottom-0">id</th>--}}
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                {{--            <th scope="col">password</th>--}}
                                <th scope="col">image</th>
                                <th class="wd-25p border-bottom-0">العمليات</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($admins as $admin)
                                <tr>

                                        <?php $i++; ?>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td > <img src="{{ asset($admin->image) }}"  style="width: 80px" height="80px" border-radius="50%" ></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $admin->id }}"
                                                title=""><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $admin->id }}"
                                                title=""><i
                                                class="fa fa-trash"></i></button>

                                    </td>
                                </tr>

                                <!-- edit_modal_Grade -->
                                <div class="modal fade" id="edit{{ $admin->id }}" tabindex="-1" role="dialog"
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
                                                <form action="{{ route('admin.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    {{ csrf_field() }}

                                                    <input type="hidden" name="id"value="{{  $admin->id}}">


                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الاسم  </label>
                                                        <input type="text" class="form-control" id="slider_title" name="name"  value="{{  $admin->name}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email</label>
                                                        <input type="text" class="form-control" id="slider_description" name="email"  value="{{  $admin->email}}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">password</label>
                                                        <input type="text" class="form-control" id="slider_btn_text" name="password"  value="" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label >image</label>
                                                        <input type="file" class="form-control-file" name="image" value=" {{  $admin->image}}"  >
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

                                {{--                    <!-- delete_modal_Grade -->--}}
                                <div class="modal fade" id="delete{{ $admin->id }}" tabindex="-1" role="dialog"
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
                                                <form action="{{ route('admin.destroy', $admin->id) }}" method="post">
                                                    @method('DELETE')
                                                    {{--                                    <form action="{{route('slider.destroy','test')}}" method="post">--}}
                                                    {{--                                        {{method_field('Delete')}}--}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $admin->id }}">
                                                    <div class="modal-footer">
                                                        <button type="submit"
                                                                class="btn btn-danger">حذف</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{--                    </div>--}}
                            @endforeach

                            <!-- Basic modal -->
                            <div class="modal" id="modaldemo8">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content modal-content-demo">
                                        <div class="modal-header">
                                            <h6 class="modal-title">اضافة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.store') }}" method="post"   enctype="multipart/form-data">
                                                {{ csrf_field() }}

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">الاسم  </label>
                                                    <input type="text" class="form-control" id="slider_title" name="name" >
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="text" class="form-control" id="slider_description" name="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">password</label>
                                                    <input type="text" class="form-control" id="slider_btn_text" name="password">
                                                </div>

                                                <div class="form-group">
                                                    <label >image</label>
                                                    <input type="file" class="form-control-file" name="image" >
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">تاكيد</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                                </div>
                                            </form>
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


                @endsection
                @section('js')
                    <!-- Internal Data tables -->
                    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
                    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
                    <!--Internal  Datatable js -->
                    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
                    <script src="{{URL::asset('assets/js/modal.js')}}"></script>

@endsection


