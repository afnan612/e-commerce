@extends('Site.Layout.app')

@section('title')
    RYN - متجر
@stop

@section('content')
    <body>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>المنتجات</h2>
                    <ul>
                        <li>
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li>
                            <span>المنتجات</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img src="" alt="About">
        <img src="{{asset('assets/site/images/shape16.png')}}" alt="Shape">
        <img src="{{asset('assets/site/images/shape17.png')}}" alt="Shape">
        <img src="{{asset('assets/site/images/shape18.png')}}" alt="Shape">
    </div>
</div>

@if($categories->count())

<div class="products-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sorting-menu">
                    <ul>
                        <li class="filter active">
                            <div class="products-thumb">
                                <img src="{{asset('assets/site/images/products/shape1.png')}}" alt="Shape">
                                <img src="{{asset('assets/site/images/products/shape2.png')}}" alt="Shape">
                                <i class="flaticon-square"></i>
                                <span>الكل</span>
                            </div>
                        </li>

                    @foreach($categories as $category)

                            <li class="filter">
                                <div class="products-thumb">
                                    <img src="{{asset('assets/site/images/products/shape1.png')}}" alt="Shape">
                                    <img src="{{asset('assets/site/images/products/shape2.png')}}" alt="Shape">
                                    <i class="flaticon-square"></i>
{{--                                    <span>  <a href="{{route('shop')}}">{{ $category->category_name }}</a></span>--}}

                                    <span><a href="{{route('category',$category->id)}}" class="text-dark nameCategory">{{ $category->category_name }}</a> </span>
                                </div>
                                <style>
                                    .nameCategory:hover{
                                        color: white!important;
                                    }
                                </style>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endif

            <div class="col-lg-9">
                <div id="Container" class="row">
                    @foreach ($products as $product)

                    <div class="col-sm-6 col-lg-4 mix armchair center-table">
                        <div class="products-item">
                            <div class="top">
{{--                                <a class="product-type" href="#"></a>--}}
{{--                                <a class="wishlist" href="#">--}}
{{--                                    <i class='bx bx-heart'></i>--}}
{{--                                </a>--}}
                                <img src="{{ asset($product->image) }}" alt="Products">
                                <div class="inner">
                                    <h3>

                                        <h3> <a href="{{route('singleProduct',$product->id)}}">{{ $product->name }}</a> </h3>
                                    </h3>

                                    @if ($product->discount)
                                        @php
                                            $finalPrice = $product->price - $product->discount;
                                        @endphp
                                        <span>{{ $finalPrice }} ج.م</span>
                                        <span class="old-price">{{ $product->price }} ج.م</span>
                                    @else
                                        <span>{{ $product->price }} ج.م</span>
                                    @endif
{{--                                    <span>$200.00</span>--}}
                                </div>
                            </div>
{{--                            <div class="bottom">--}}
{{--                                <a class="cart-text" href="#">Add To Cart</a>--}}
{{--                                <i class='bx bx-plus'></i>--}}
{{--                            </div>--}}
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>

    </div>

</div>


<div class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>المنتجات الأفضل مبيعا</h2>
        </div>
        <div class="row">
            @foreach($BestSeller as $product)

            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">

                        <img src=" {{ asset($product->image) }}" alt="Products">
                        <div class="inner">
                            <h3>
                                <a href="{{route('singleProduct',$product->id)}}">{{ $product->name }}</a>
                            </h3>
                            <span>{{$product->final_price}}</span>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>





<div class="go-top">
    <i class='bx bxs-up-arrow-circle'></i>
    <i class='bx bxs-up-arrow-circle'></i>
</div>

@endsection

@section('site-js')
    <script>
        $('.category_li').click(function () {
            $(this).parent().toggleClass('current-cat');
        });
    </script>
@endsection
</body>

