
@extends('Site.Layout.app')

@section('title')
    من نحن
@stop

@section('content')

<body>

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>من نحن</h2>
                    <ul>
                        <li>
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li>
                            <span>من نحن</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img src="assets/site/images/bg-other-01.png" alt="About">

{{--        <img src="assets/site/images/page-title1.jpg" alt="About">--}}
        <img src="assets/site/images/shape16.png" alt="Shape">
        <img src="assets/site/images/shape17.png" alt="Shape">
        <img src="assets/site/images/shape18.png" alt="Shape">
    </div>
</div>


<section class="about-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="top">
                        <h2>عن متجرنا</h2>
                        <p>
                                {{ $about->description }}
                        </p>
                    </div>
                    <div class="middle">
                        <ul>
                            <li>
                                <img src="assets/site/images/about-icon1.png" alt="Icon">
                                <h3>خبرة أكثر من 25 سنة</h3>
                            </li>
                            <li>
                                <img src="assets/site/images/about-icon2.png" alt="Icon">
                                <h3>علامة تجارية موثوقة</h3>
                            </li>
                            <li>
                                <img src="assets/site/images/about-icon3.png" alt="Icon">
                                <h3>جودة فائقة</h3>
                            </li>
                            <li>
                                <img src="assets/site/images/about-icon4.png" alt="Icon">
                                <h3>سعر مناسب</h3>
                            </li>
                        </ul>
                        <a class="common-btn" href="{{route('shop')}}">
                            تسوق الان
                            <img src="assets/site/images/shape1.png" alt="Shape">
                            <img src="assets/site/images/shape2.png" alt="Shape">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
{{--                <div class="about-img">--}}
{{--                    @foreach($about->image as $image)--}}
{{--                        <img src="{{ $image }}" alt="About">--}}
{{--                    @endforeach--}}
{{--                </div>--}}

                <div class="about-img">
                    @foreach(json_decode($about->image) as $image)
                        <img src="{{ $image }}" alt="About">
                    @endforeach
                </div>

{{--                <div class="about-img">--}}
{{--                    <img src="{{ $slider->image}}" alt="About">--}}
{{--                    <img src="{{ $about->image}}" alt="About">--}}
{{--                    <img src="assets/site/images/about-main3.jpg" alt="About">--}}
{{--                    @foreach($data->image_array as $image)--}}
{{--                        <img src="{{ $about->image}}" alt="About">--}}

{{--                    @endforeach--}}
{{--                    <img src="{{ $about->image}}" alt="About">--}}
{{--                    <img src="{{ $about->image}}" alt="About">--}}
{{--                    <img src="{{ $about->image}}" alt="About">--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>


{{--<div class="buy-area">--}}
{{--    <div class="buy-shape">--}}
{{--        <img src="assets/site/images/shape3.png" alt="Shape">--}}
{{--    </div>--}}
{{--    <div class="container-fluid p-0">--}}
{{--        <div class="row m-0 align-items-center">--}}

{{--            <div class="col-lg-6 p-0">--}}
{{--                @foreach ($products as $product)--}}

{{--                <div class="buy-img">--}}
{{--                    <img src="{{ asset($product->image) }}" alt="Buy">--}}

{{--                    <img src="assets/site/images/buy-main1.png" alt="Buy">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 p-0">--}}
{{--                <div class="buy-content ptb-100">--}}
{{--                    <h2>أفضل جودة--}}
{{--                        بأقل سعر</h2>--}}
{{--                    <p>{{ $product->name }}</p>--}}
{{--                    <ul>--}}
{{--                        <li>{{ $product->final_price }}</li>--}}
{{--                        <li>--}}
{{--                            <del>{{ $product->price }}</del>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    @endforeach--}}
{{--                    <a class="common-btn" href="{{route('shop')}}">--}}

{{--                        Shop Now--}}
{{--                        <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--                        <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<section class="brand-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>شركاء النجاح</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($sponsors as $sponsor)
                <div class="col-sm-4 col-lg-3">
                    <div class="brand-item">
                        <a href="#">
                            <img src="{{ $sponsor->image }}" alt="Brand">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<div class="support-area pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-free-delivery"></i>
                    <h3>خدمة توصيل الطبات</h3>
                    <p>نتعاقد مع افضل الشركات للشحن والتوصيل بأقل الاسعار</p>
                    <img src="assets/site/images/support-shape1.png" alt="Shape">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-call-center"></i>
                    <h3>خدمة الدعم الفني</h3>
                    <p>علي مدار اليوم خلال ال 24 ساعة نستقبل شكاوي العملاء</p>
                    <img src="assets/site/images/support-shape1.png" alt="Shape">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="support-item">
                    <i class="flaticon-giftbox"></i>
                    <h3>كوبونات شراء اسبوعية</h3>
                    <p>نقدم لعملائنا كوبونات خصم اسبوعية للمنتجات تصل الي 50%</p>
                    <img src="assets/site/images/support-shape1.png" alt="Shape">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>اراء عملائنا</h2>
        </div>
        <div class="testimonials-slider owl-theme owl-carousel">
            @foreach($reviews as $review)

            <div class="testimonials-item">
                <i class="flaticon-quote"></i>
                <p>{{ $review->review }}</p>
                <h3>{{ $review->name }}</h3>
                <span>{{ $review->sub_title }}</span>
                <img src="{{ asset($review->image ) }}" alt="Testimonial">
            </div>
            @endforeach
        </div>
    </div>
</div>
{{--            <div class="testimonials-item">--}}
{{--                <i class="flaticon-quote"></i>--}}
{{--                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>--}}
{{--                <h3>Jonathon Ronan</h3>--}}
{{--                <span>Director Of Company</span>--}}
{{--                <img src="assets/site/images/testimonial2.jpg" alt="Testimonial">--}}
{{--            </div>--}}
{{--            <div class="testimonials-item">--}}
{{--                <i class="flaticon-quote"></i>--}}
{{--                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>--}}
{{--                <h3>Sarp Cesmeli</h3>--}}
{{--                <span>Engineer Of Company</span>--}}
{{--                <img src="assets/site/images/testimonial3.jpg" alt="Testimonial">--}}
{{--            </div>--}}
{{--            <div class="testimonials-item">--}}
{{--                <i class="flaticon-quote"></i>--}}
{{--                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>--}}
{{--                <h3>Tom Henry</h3>--}}
{{--                <span>Staff Of Company</span>--}}
{{--                <img src="assets/site/images/testimonial4.jpg" alt="Testimonial">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



<div class="modal fade modal-right popup-modal" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Shopping Cart <span>02 Items</span></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cart-table">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">
                                <img src="assets/site/images/cart/cart1.png" alt="Cart">
                            </th>
                            <td>
                                <h3>White Comfy Stool</h3>
                                <span class="rate">$200.00 x 1</span>
                            </td>
                            <td>
                                <ul class="number">
                                    <li>
                                        <span class="minus">-</span>
                                        <input type="text" value="1" />
                                        <span class="plus">+</span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a class="close" href="#">
                                    <i class='bx bx-x'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="assets/site/images/cart/cart2.png" alt="Cart">
                            </th>
                            <td>
                                <h3>Yellow Armchair</h3>
                                <span class="rate">$180.00 x 1</span>
                            </td>
                            <td>
                                <ul class="number">
                                    <li>
                                        <span class="minus">-</span>
                                        <input type="text" value="1" />
                                        <span class="plus">+</span>
                                    </li>
                                </ul>
                            </td>
                            <td>
                                <a class="close" href="#">
                                    <i class='bx bx-x'></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="total-amount">
                        <h3>Total: <span>$380.00</span></h3>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form>
                    <input type="text" class="form-control" placeholder="Enter Coupon Code">
                    <button type="submit" class="btn common-btn">
                        Proceed To Checkout
                        <img src="assets/site/images/shape1.png" alt="Shape">
                        <img src="assets/site/images/shape2.png" alt="Shape">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade modal-right popup-modal wishlist-modal" id="exampleModalWishlist" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Wishlist <span>02 Items</span></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cart-table">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">
                                <img src="assets/site/images/cart/cart1.png" alt="Cart">
                            </th>
                            <td>
                                <h3>White Comfy Stool</h3>
                                <span class="rate">$200.00 x 1</span>
                            </td>
                            <td>
                                <a class="common-btn" href="shop.html">
                                    Add To Cart
                                    <img src="assets/site/images/shape1.png" alt="Shape">
                                    <img src="assets/site/images/shape2.png" alt="Shape">
                                </a>
                            </td>
                            <td>
                                <a class="close" href="#">
                                    <i class='bx bx-x'></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <img src="assets/site/images/cart/cart2.png" alt="Cart">
                            </th>
                            <td>
                                <h3>Yellow Armchair</h3>
                                <span class="rate">$180.00 x 1</span>
                            </td>
                            <td>
                                <a class="common-btn" href="shop.html">
                                    Add To Cart
                                    <img src="assets/site/images/shape1.png" alt="Shape">
                                    <img src="assets/site/images/shape2.png" alt="Shape">
                                </a>
                            </td>
                            <td>
                                <a class="close" href="#">
                                    <i class='bx bx-x'></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="go-top">
    <i class='bx bxs-up-arrow-circle'></i>
    <i class='bx bxs-up-arrow-circle'></i>
</div>


@endsection

@section('site-js')
@endsection
