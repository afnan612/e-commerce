@extends('Site.Layout.app')

@section('title')
    RYN - متجر
@stop

@section('content')
<body>
@if($sliders->count())
<!-- Start Slider Area -->
<div class="banner-area-two">
    <div class="banner-slider owl-theme owl-carousel">
        @foreach($sliders as $slider)

        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h2>{{$slider->title}}</h2>
                            <p>
                                {{ $slider->description}}
                            </p>

                            <a class="common-btn" href="#">
                                {{($slider->btn_text)}}

                                <img src="assets/site/images/shape1.png" alt="Shape">
                                <img src="assets/site/images/shape2.png" alt="Shape">

{{--                                <img src="{{($slider->image)}}" alt="Shape">--}}
{{--                                <img src="{{($slider->image)}}" alt="Shape">--}}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="banner-img">
                <img src="{{($slider->image)}}" alt="Banner">
                <img src="assets/site/images/banner/banner-shape1.png" alt="Shape">

                {{--                <img src="{{($slider->image)}} alt="Shape">--}}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

<!-- End Slider Area -->

@if($categories->count())
<div class="products-area two pb-100">
    <div class="container">
        <!-- Start Categorie Area  -->
<div class="sorting-slider owl-theme owl-carousel">
    @foreach($categories as $category)

    <div class="products-thumb">
       <a href="#">
{{--           {{asset('assets/site/images/products/shape1.png')}}--}}
           <img src=" {{asset('assets/site/images/products/shape1.png')}}" alt="Shape">
           <img src=" {{asset('assets/site/images/products/shape2.png')}}" alt="Shape">
           <img src="{{($category->image)}}" alt="Banner">

           <i class="flaticon-square"></i>
           <span>{{ $category->category_name }}</span>
       </a>
   </div>
    @endforeach
</div>
{{--    </div>--}}
{{--</div>--}}
@endif
<!-- End Categorie Area -->

<div class="row">
    @foreach ($products as $product)

    <div class="col-sm-6 col-lg-3">
       <div class="products-item">
           <div class="top">
{{--               <a class="wishlist" href="#">--}}
{{--                   <i class='bx bx-heart'></i>--}}
{{--               </a>--}}
               <img src="{{ $product->image }}" alt="Products">
               <div class="inner">
{{--                   <div style="margin-top: 3px">--}}
{{--                       <img src="assets/site/images/stores/s4.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">--}}
{{--                       <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر السدودي</span>--}}
{{--                   </div>--}}
                   <h3> <a href="{{route('singleProduct',$product->id)}}">{{ $product->name }}</a> </h3>

               @if ($product->discount)
                           @php
                               $finalPrice = $product->price - $product->discount;
                           @endphp
                           <span>{{ $finalPrice }} ج.م</span>
                           <span class="old-price">{{ $product->price }} ج.م</span>
                       @else
                           <span>{{ $product->price }} ج.م</span>
                   @endif



{{--                       <a href="{{route('single_product')}}">{{ $product->name }}</a> </h3>--}}
{{--                   <span>{{ $product->final_price }} ج.م</span>--}}
{{--                   <span class="old-price">{{ $product->price }} ج.م</span>--}}

               </div>

           </div>
{{--           <div class="bottom">--}}
{{--               <a class="cart-text" href="#">اضف للسلة</a>--}}
{{--               <i class='bx bx-plus'></i>--}}
{{--           </div>--}}
       </div>
   </div>

    @endforeach

        <div class="text-center">
            <a class="common-btn two" href="{{route('shop')}}">
                تحميل المزيد
                <img src="assets/images/shape1.png" alt="Shape">
                <img src="assets/images/shape2.png" alt="Shape">
            </a>
        </div>

</div>

{{--<div class="text-center">--}}
{{--   <a class="common-btn two" href="shop.html">--}}
{{--       تحميل المزيد--}}
{{--       <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--       <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--   </a>--}}
{{--</div>--}}
</div>
</div>

<div class="buy-area two ptb-100">
<div class="buy-shape">
<img src="assets/site/images/shape6.png" alt="Shape">
<img src="assets/site/images/shape7.png" alt="Shape">
</div>
<div class="container">
<div class="row align-items-center">
   <div class="col-lg-6">
       <div class="buy-content">
           <h3>يتوفر هذا الاسبوع خصم كبير على</h3>
           <p>{{ $offer->description }}</p>
           <ul>
               <li>{{ $offer->price_after }}</li>
               <li>
                   <del> {{ $offer->price_before}}</del>
               </li>
           </ul>
{{--           <a class="common-btn two" href="{{route('singleProduct',$product->id)}}">--}}
{{--               عرض التفاصيل--}}
{{--               <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--               <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--           </a>--}}
       </div>
   </div>
   <div class="col-lg-6">
       <div class="buy-img">
           <img src=" {{ $offer->image}}" alt="Buy">
       </div>
   </div>
</div>
</div>
</div>

<div class="deal-area pt-100 pb-70">
<div class="container">
<div class="row">
   <div class="col-lg-6">
       <div class="section-title">
           <h2>الاكثر مبيعا</h2>
       </div>
       <div class="deal-item">
           <span class="percent">25%</span>
           <a class="deal-btn" href="single-product.html">
               <i class="bx bx-right-arrow-alt"></i>
           </a>
           <div class="inner align-items-center">
               <div class="left">
                   <img src="assets/site/images/deal-main1.png" alt="Deal">
               </div>
               <div class="right">
                   <ul class="reviews">
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star"></i>
                       </li>
                       <li>
                           <span>(5 تقييمات)</span>
                       </li>
                   </ul>
                   <h3>سماعة ثاندر بيونك بلوتوث</h3>
                   <ul class="price">
                       <li>570.00 ج. م</li>
                       <li><del>900 ج. م</del></li>
                   </ul>
                   <ul class="features">
                       <li>
                           <span>مواصفات المنتج:</span>
                       </li>
                       <li>دقة عالية</li>
                       <li>قفل الصوت</li>
                       <li>تدعم اندرويد</li>
                       <li>ضمان 3 سنوات</li>
                   </ul>
                   <h4>احصل علي هذا المنتج في: <span>7 مارس</span></h4>

                   <ul class="cart-wishlist">
                       <li>
                           <a href="#">
                               <i class="bx bxs-cart"></i>
                           </a>
                       </li>
                       <li>
                           <a href="#">
                               <i class="bx bxs-heart"></i>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
   <div class="col-lg-6">
       <div class="section-title">
           <h2>منتج مميز</h2>
       </div>
       <div class="deal-item two">
           <a class="deal-btn" href="single-product.html">
               <i class="bx bx-right-arrow-alt"></i>
           </a>
           <div class="inner align-items-center">
               <div class="left">
                   <img src="assets/site/images/deal-main2.png" alt="Deal">
               </div>
               <div class="right">
                   <ul class="reviews">
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star checked"></i>
                       </li>
                       <li>
                           <i class="bx bxs-star"></i>
                       </li>
                       <li>
                           <span>(4 تقييمات)</span>
                       </li>
                   </ul>
                   <h3>سمارت واتش هاي كوالتي</h3>
                   <ul class="price">
                       <li> 1300.00 ج.م</li>
                   </ul>
                   <h4>احصل علي هذا المنتج في: <span>13 مارس</span></h4>
                   <ul class="cart-wishlist">
                       <li>
                           <a href="#">
                               <i class="bx bxs-cart"></i>
                           </a>
                       </li>
                       <li>
                           <a href="#">
                               <i class="bx bxs-heart"></i>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <div class="deal-black">
           <img src="assets/site/images/deal-shape1.png" alt="Shape">
           <h3>عروض شهر رمضان المبارك</h3>
           <a href="shop.html">عرض المنتجات</a>
       </div>
   </div>
</div>
</div>
</div>

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

<div class="products-area pt-100 pb-70">
<div class="container">
<div class="section-title">
   <h2>رائج الان</h2>
</div>
<div class="row">
    @foreach($latestProducts as $product)

    <div class="col-sm-6 col-lg-3">
       <div class="products-item">
           <div class="top">

               <img src="{{ asset($product->image) }}" alt="Products">
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


<div class="modal fade modal-right popup-modal" id="exampleModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
   <div class="modal-header">
       <h2>سلة الشراء <span>2 من المنتجات</span></h2>
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
                       <h3>كرسي ابيض سفرة</h3>
                       <span class="rate">600.00 ج.م</span>
                   </td>
                   <td>
                       <ul class="number">
                           <li>
                               <span class="minus">-</span>
                               <input type="text" value="1"/>
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
                       <h3>مقعد اصفر</h3>
                       <span class="rate">899.00 ج.م</span>
                   </td>
                   <td>
                       <ul class="number">
                           <li>
                               <span class="minus">-</span>
                               <input type="text" value="1"/>
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
               <h3>الاجمالي : </h3>
               <span>1499 ج.م</span>
           </div>
       </div>
   </div>
{{--            <div class="modal-footer">--}}
{{--                <form>--}}
{{--                    <input type="text" class="form-control" placeholder="ادخل قسمية شراء">--}}
{{--                    <button type="submit" class="btn common-btn">--}}
{{--                        اكمال الطلب--}}
{{--                        <img src="assets/images/shape1.png" alt="Shape">--}}
{{--                        <img src="assets/images/shape2.png" alt="Shape">--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
</div>
</div>
</div>


<div class="modal fade modal-right popup-modal wishlist-modal" id="exampleModalWishlist" tabindex="-1"
aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
   <div class="modal-header">
       <h2>المفضلة <span>2 من المنتجات</span></h2>
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
                       <h3>كرسي ابيض سفرة</h3>
                       <span class="rate">600 ج.م</span>
                   </td>
                   <td>
                       <a class="common-btn" href="shop.html">
                           اضف للسلة
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
                       <h3>كرسي اصفر سفرة</h3>
                       <span class="rate">599 ج.م</span>
                       <span class="old-price">800 ج.م</span>
                   </td>
                   <td>
                       <a class="common-btn" href="shop.html">
                           اضف للسلة
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
