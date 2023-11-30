<?php
$categories = \App\Models\Category::latest()->get();

?>
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="pre-load">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
        </div>
    </div>
</div>

<div class="header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-7">
                <div class="left">
                    <ul>
                        <li>
                            <i class="flaticon-delivery-truck"></i>
                            <span>توصيل مجاني *</span>
                        </li>
                        <li>
                            <i class="flaticon-quality"></i>
                            <span>ضمان أفضل الأسعار</span>
                        </li>
                        <li>
                            <i class="flaticon-call-center"></i>
                            <span>دعم العملاء 24/7 </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-5">
                <div class="right">
{{--                    <div class="inner">--}}
{{--                        <select>--}}
{{--                            <option>$ USD</option>--}}
{{--                            <option>EUR</option>--}}
{{--                            <option>GBP</option>--}}
{{--                            <option>CAD</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="inner">--}}
{{--                        <form>--}}
{{--                            <select>--}}
{{--                                <option>العربية</option>--}}
{{--                                <option>English</option>--}}
{{--                                <option>Deutsch</option>--}}
{{--                                <option>Português</option>--}}
{{--                                <option>简体中文</option>--}}
{{--                            </select>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="inner">
                        <div class="call">
                            <i class="flaticon-phone-call"></i>

                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="nav-top-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="left">
                    <a href="index.html">
                        <img src="{{asset('assets')}}/site/images/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="middle">
                    <form action=" {{url('search')}}" method="GET">
                        <div class="form-group">
                            <div class="inner">
                                <select>
                                    <option> التصنيفات</option>
                                    @foreach($categories as $category)
                                        <option>
                                            <a href="{{route('category',$category->id)}}">
                                                {{$category->category_name}}
                                            </a>
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="search" class="form-control" name="search" value="" placeholder="ابحث عن منتج">                            <button type="submit" class="btn">
                                <i class='bx bx-search'></i>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
{{--            <div class="col-lg-5">--}}
{{--                <div class="right">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <div class="inner">--}}
{{--                                <i class="flaticon-pin"></i>--}}
{{--                                <a href="#">الموقع</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="inner">--}}
{{--                                <i class="flaticon-question"></i>--}}
{{--                                <a href="#">هل تريد مساعدة؟</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <button type="button" class="btn wishlist cart-popup-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">--}}
{{--                                <i class='bx bxs-cart'></i>--}}
{{--                                <span>2</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <button type="button" class="btn wishlist" data-bs-toggle="modal" data-bs-target="#exampleModalWishlist" data-bs-whatever="@mdo">--}}
{{--                                <i class='bx bx-heart'></i>--}}
{{--                                <span>2</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="join" href="login.html">--}}
{{--                                <i class="flaticon-round-account-button-with-user-inside"></i>--}}
{{--                                انضم--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<div class="navbar-area sticky-top">

    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="{{asset('assets')}}/site/images/logo.png" alt="Logo">
        </a>
        <div class="left">
            <select>
                <option> التصنيفات</option>
                @foreach($categories as $category)
                    <option>
                        <a href="{{route('category',$category->id)}}">
                            {{$category->category_name}}
                        </a>
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="left">
                    <select>
                        <option> التصنيفات</option>
                        @foreach($categories as $category)
                            <option>
                                <a href="{{route('category',$category->id)}}">
                                    {{$category->category_name}}
                                </a>
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('index')}}" class="nav-link">الرئيسية </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link">من نحن</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('shop')}}" class="nav-link">المنتجات </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact')}}" class="nav-link">تواصل معنا</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        <h4>احصل <span>على خصم 50%</span> على المنتجات في عرض البلاك فرايداي </h4>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
