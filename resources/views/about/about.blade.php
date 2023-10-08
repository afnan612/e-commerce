@extends('layouts.master')
@section('title')
المتجر
@stop
@section('css')
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

                                <div class="table-responsive">
                                    <form action="{{ route('about.edit') }}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="name">الوصف</label>
                                            <input type="text" class="form-control"  name="description" value="{{ $about->description }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="image">الصورة</label>
                                            <input type="file" class="dropify" name="image[]" data-default-file="{{asset($about->image)}}"  accept="image/png, image/gif, image/jpeg,image/jpg" multiple />
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

                        </div>

                        <!-- row closed -->
                </div>
                <!-- Container closed -->
                </div>
                <!-- main-content closed -->


@endsection
@section('js')<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

                            <script>
                                $(document).ready(function() {
                                    $('.dropify').dropify();
                                });
                            </script>

@endsection
