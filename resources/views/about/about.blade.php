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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet" />


@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">المتجر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ من نحن</span>
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

{{--                                <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة</a>--}}

                                <div class="table-responsive">
                                    <form action="{{ route('about.update', $abouts[0]->id) }}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="name">الوصف</label>
                                            <input type="text" class="form-control"  name="description" value="{{ $abouts[0]->description }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">الصورة</label>
                                            <input type="file" class="dropify" name="image[]"  accept="image/png, image/gif, image/jpeg,image/jpg" multiple />
                                        </div>

                                        <script>
                                            $(document).ready(function() {
                                                $('.dropify').dropify();
                                            });
                                        </script>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">تاكيد</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                                        </div>
                                    </form>

{{--                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"--}}
{{--                                           data-page-length="50"--}}
{{--                                           style="text-align: center">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th scope="col">id</th>--}}
{{--                                            <th scope="col">الوصف</th>--}}
{{--                                            <th scope="col">الصورة</th>--}}
{{--                                            <th class="wd-25p border-bottom-0">العمليات</th>--}}


{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        <?php $i = 0; ?>--}}
{{--                                        @foreach ($abouts as $about)--}}
{{--                                            <tr>--}}
{{--                                                    <?php $i++; ?>--}}

{{--                                                <td>{{ $about->id }}</td>--}}
{{--                                                <td>{{ $about->description }}</td>--}}
{{--                                                <td>--}}
{{--                                                    @foreach($about->image as $image)--}}
{{--                                                        <img src="{{ asset($image) }}" style="width: 80px; height: 80px; border-radius: 50%;">--}}
{{--                                                    @endforeach--}}
{{--                                                    <img src="{{ asset($about->image) }}" style="width: 80px; height: 80px; border-radius: 50%;">--}}
{{--                                                </td>--}}
{{--                                                <td>--}}
{{--                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#show{{ $about->id }}" title="">--}}
{{--                                                        <i class="fa fa-eye"></i>--}}
{{--                                                    </button>--}}
{{--                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit{{ $about->id }}" title="">--}}
{{--                                                        <i class="fa fa-edit"></i>--}}
{{--                                                    </button>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}

{{--                                            <!-- show_modal_contact -->--}}
{{--                                            <div class="modal fade" id="show{{ $about->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--                                                 aria-hidden="true">--}}
{{--                                                <div class="modal-dialog" role="document">--}}
{{--                                                    <div class="modal-content">--}}
{{--                                                        <div class="modal-header">--}}
{{--                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">--}}
{{--                                                            </h5>--}}
{{--                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                                <span aria-hidden="true">&times;</span>--}}
{{--                                                            </button>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="modal-body">--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-lg-12 margin-tb">--}}
{{--                                                                    <div class="pull-left">--}}
{{--                                                                        <h2>Show about</h2>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-12">--}}
{{--                                                                    <div class="form-group">--}}
{{--                                                                        <strong>الوصف:</strong>--}}
{{--                                                                        {{ $about->description }}--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}


{{--                                                                <div class="form-group">--}}
{{--                                                                    <strong>الصورة:</strong>--}}
{{--                                                                    @foreach ($about->image as $image)--}}
{{--                                                                        <img src="{{ asset($image) }}" style="width: 80px; height: 80px; border-radius: 50%;" >--}}
{{--                                                                    @endforeach--}}
{{--                                                                </div>--}}


{{--                                                                <div class="form-group">--}}
{{--                                                                    <strong>الصورة:</strong>--}}
{{--                                                                    <img src="{{ asset($about->image) }}" style="width: 80px" height="80px" border-radius="50%" >--}}
{{--                                                                </div>--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                <!-- edit_modal -->--}}
{{--                <div class="modal fade" id="edit{{ $about->id }}" tabindex="-1" role="dialog"--}}
{{--                     aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"--}}
{{--                                    id="exampleModalLabel">--}}
{{--                                </h5>--}}
{{--                                <button type="button" class="close" data-dismiss="modal"--}}
{{--                                        aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--                                    @method('PUT')--}}
{{--                                    {{ csrf_field() }}--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="name">الوصف</label>--}}
{{--                                        <input type="text" class="form-control"  name="description" value="{{ $about->description }}">--}}
{{--                                    </div>--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="image">الصورة</label>--}}
{{--                                        <input type="file" class="dropify" name="image[]"  accept="image/png, image/gif, image/jpeg,image/jpg" multiple />--}}
{{--                                    </div>--}}

{{--                                    <script>--}}
{{--                                        $(document).ready(function() {--}}
{{--                                            $('.dropify').dropify();--}}
{{--                                        });--}}
{{--                                    </script>--}}

{{--                                    <div class="modal-footer">--}}
{{--                                        <button type="submit" class="btn btn-success">تاكيد</button>--}}
{{--                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                    @endforeach--}}

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
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

                            <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <script src="{{URL::asset('assets/js/modal.js')}}"></script>
                            <script>
                                $(document).ready(function() {
                                    $('.dropify').dropify();
                                });
                            </script>

@endsection


