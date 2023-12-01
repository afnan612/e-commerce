@extends('layouts.master')
@section('title')
    المتجر
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المتجر</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الاعدادات</span>
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

                                            <div class="modal-body">

                                                <form action="{{ route('setting.update') }}" method="POST" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    {{ csrf_field() }}

{{--                                                    <input type="hidden" name="id"value="{{ $offer->id}}">--}}

                                                    <div class="form-group">
                                                        <label >اللوجو</label>
                                                        <input type="file" class="form-control-file" name="logo" value=" {{$setting->logo}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label >رقم الهاتف</label>
                                                        <input type="text" class="form-control-file" name="phone" value=" {{ $setting->phone}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الواتساب </label>
                                                        <input type="text" class="form-control" id="slider_title" name="whatsapp"  value="{{ $setting->whatsapp}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الجيميل</label>
                                                        <input type="text" class="form-control" id="slider_title" name="gmail"  value="{{ $setting->gmail}}" >
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">الفيسبوك</label>
                                                        <input type="text" class="form-control" id="slider_title" name="facebook"  value="{{ $setting->facebook}}" >
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


                            </div>
                            <!-- row closed -->
                    </div>
                    <!-- Container closed -->
                </div>
                <!-- main-content closed -->

{{--    {{ $offers->links() }}--}}

@endsection

