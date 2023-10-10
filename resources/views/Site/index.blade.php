@extends('Site.Layout.app')

@section('title')
    RYN - متجر
@stop

@section('content')
<body>

<div class="banner-area-two">
    <div class="banner-slider owl-theme owl-carousel">
        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h2>تصفح افضل المنتجات واجود الانواع</h2>
                            <p>
                                الموقع الاول في الوطن العربي لبيع المنتجات بأفضل الاسعار, نقدم لعملائنا مزيد من العروض والهدايا,
                                خصم 25% علي جميع المنتجات
                            </p>
                            <a class="common-btn" href="#">
                                عرض المنتجات
                                <img src="assets/site/images/shape1.png" alt="Shape">
                                <img src="assets/site/images/shape2.png" alt="Shape">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-img">
                <img src="assets/site/images/banner/r1.png" alt="Banner">
                <img src="assets/site/images/banner/banner-shape1.png" alt="Shape">
            </div>
        </div>
        <div class="banner-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <h2>بتدور علي منتجات رمضان بأقل الاسعار؟</h2>
                            <p>
                                الموقع الاول في الوطن العربي لبيع المنتجات بأفضل الاسعار, نقدم لعملائنا مزيد من العروض والهدايا,
                                وبمناسبة الشهر الكريم احصل الان علي خصومات تصل الي 50%
                            </p>
                            <a class="common-btn" href="#">
                                عروض الشهر
                                <img src="assets/site/images/shape1.png" alt="Shape">
                                <img src="assets/site/images/shape2.png" alt="Shape">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-img">
                <img src="assets/site/images/banner/r3.png" alt="Banner">
                <img src="assets/site/images/banner/banner-shape1.png" alt="Shape">
            </div>
        </div>
    </div>
</div>


<div class="products-area two pb-100">
    <div class="container">
        <div class="sorting-slider owl-theme owl-carousel">
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-square"></i>
                    <span>الكل</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-headphones"></i>
                    <span>الكترونيات</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-breakfast"></i>
                    <span>خضروات</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-laptop"></i>
                    <span>اجهزة كهربية</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-camera"></i>
                    <span>كاميرات تصوير</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-smartwatch"></i>
                    <span>ساعات واكسسوارات</span>
                </a>
            </div>
            <div class="products-thumb">
                <a href="#">
                    <img src="assets/site/images/products/shape1.png" alt="Shape">
                    <img src="assets/site/images/products/shape2.png" alt="Shape">
                    <i class="flaticon-table"></i>
                    <span>أثاث</span>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products14.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s4.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر السدودي</span>
                            </div>
                            <h3>
                                <a href="single-product.html">سماعة رأس احمر</a>
                            </h3>
                            <span>750 ج.م</span>

                        </div>

                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="product-type two" href="#">الاكثر مبيعا</a>
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products15.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s3.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">تكنو ستور</span>
                            </div>
                            <h3>
                                <a href="single-product.html">كيبورد جيمنج</a>
                            </h3>
                            <span>799 ج.م</span>
                            <span class="old-price">900 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products16.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s2.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر الامل</span>
                            </div>
                            <h3>
                                <a href="single-product.html">أبل ماك بوك اير 13,3 انش</a>
                            </h3>
                            <span>42000 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products31.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s4.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">السعادة ستور</span>
                            </div>
                            <h3>
                                <a href="single-product.html">فروالة بالكيلو</a>
                            </h3>
                            <span>24.5 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products18.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s3.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر السدودي</span>
                            </div>
                            <h3>
                                <a href="single-product.html">عدسة كانون 18.55 مللي</a>
                            </h3>
                            <span>3500 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products8.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s4.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر الامل</span>
                            </div>
                            <h3>
                                <a href="single-product.html">كرسي ترابيزة اسود ستايل ق..</a>
                            </h3>
                            <span> 920.00 ج.م</span>
                            <span class="old-price">1200 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="product-type two" href="#">الاكثر مبيعا</a>
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products20.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s2.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">تكنو ستور</span>
                            </div>
                            <h3>
                                <a href="single-product.html">مايك عالي الجودة</a>
                            </h3>
                            <span>6999 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products44.png" alt="Products">
                        <div class="inner">
                            <div style="margin-top: 3px">
                                <img src="assets/site/images/stores/s4.jpg" style="border-radius:50%;max-width: 30px;max-height: 30px;margin-top: 10px;margin-bottom: 10px">
                                <span style="font-weight: bold;margin-top: 20px;margin-right: 5px;color: #666;font-size: 1.05rem;">متجر السدودي</span>
                            </div>
                            <h3>
                                <a href="single-product.html">فانوس رمضان معدن ملون</a>
                            </h3>
                            <span>45 ج.م</span>
                            <span class="old-price">70 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a class="common-btn two" href="shop.html">
                تحميل المزيد
                <img src="assets/site/images/shape1.png" alt="Shape">
                <img src="assets/site/images/shape2.png" alt="Shape">
            </a>
        </div>
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
                    <h3>يتوفر هذا الاسبوع خصم كبير علي</h3>
                    <p>سماعة AKG اخضر بلوتوث شحن سريع</p>
                    <ul>
                        <li>1600.00 ج.م</li>
                        <li>
                            <del> 2000.00 ج.م</del>
                        </li>
                    </ul>
                    <a class="common-btn two" href="shop.html">
                        عرض التفاصيل
                        <img src="assets/site/images/shape1.png" alt="Shape">
                        <img src="assets/site/images/shape2.png" alt="Shape">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="buy-img">
                    <img src="assets/site/images/buy-main2.png" alt="Buy">
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
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand8.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand2.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand3.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand4.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand5.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand6.png" alt="Brand">
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3">
                <div class="brand-item">
                    <a href="#">
                        <img src="assets/site/images/brand/brand7.png" alt="Brand">
                    </a>
                </div>
            </div>
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
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products10.png" alt="Products">
                        <div class="inner">
                            <h3>
                                <a href="single-product.html">دولاب ملابس ابيض</a>
                            </h3>
                            <span>7500 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products11.png" alt="Products">
                        <div class="inner">
                            <h3>
                                <a href="single-product.html">نيش خشبي</a>
                            </h3>
                            <span>4000 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products44.png" alt="Products">
                        <div class="inner">
                            <h3>
                                <a href="single-product.html">فانوس رمضان معدن ملون</a>
                            </h3>
                            <span>45 ج.م</span>
                            <span class="old-price">70 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="products-item">
                    <div class="top">
                        <a class="wishlist" href="#">
                            <i class='bx bx-heart'></i>
                        </a>
                        <img src="assets/site/images/products/products13.png" alt="Products">
                        <div class="inner">
                            <h3>
                                <a href="single-product.html">ترابيزة كلاسيك خشبية</a>
                            </h3>
                            <span>350 ج.م</span>
                        </div>
                    </div>
                    <div class="bottom">
                        <a class="cart-text" href="#">اضف للسلة</a>
                        <i class='bx bx-plus'></i>
                    </div>
                </div>
            </div>
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


<!--<div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <div class="subscribe-shape">-->
<!--                <img src="assets/site/images/subscribe-shape1.png" alt="Shape">-->
<!--                <img src="assets/site/images/subscribe-shape2.png" alt="Shape">-->
<!--                <img src="assets/site/images/subscribe-shape3.png" alt="Shape">-->
<!--            </div>-->
<!--            <div class="modal-header border-0">-->
<!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="row align-items-center">-->
<!--                    <div class="col-sm-6 col-lg-6">-->
<!--                        <div class="subscribe-img">-->
<!--                            <img src="assets/site/images/subscribe-main1.png" alt="Subscribe">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-sm-6 col-lg-6">-->
<!--                        <div class="subscribe-content">-->
<!--                            <h2>Subscribe Our Newsletter</h2>-->
<!--                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor-->
<!--                                invidun</p>-->
<!--                            <form class="newsletter-form" data-toggle="validator">-->
<!--                                <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"-->
<!--                                       required autocomplete="off">-->
<!--                                <button class="btn common-btn" type="submit">-->
<!--                                    Subscribe-->
<!--                                    <img src="assets/site/images/shape1.png" alt="Shape">-->
<!--                                    <img src="assets/site/images/shape2.png" alt="Shape">-->
<!--                                </button>-->
<!--                                <div id="validator-newsletter" class="form-result"></div>-->
<!--                                <div class="inner-check">-->
<!--                                    <div class="form-check">-->
<!--                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">-->
<!--                                        <label class="form-check-label" for="flexCheckDefault5">-->
<!--                                            I accept all <a href="terms-conditions.html">Terms & Conditions*</a>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                    <div class="form-check">-->
<!--                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">-->
<!--                                        <label class="form-check-label" for="flexCheckDefault6">-->
<!--                                            Don't show this message again-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="go-top">
    <i class='bx bxs-up-arrow-circle'></i>
    <i class='bx bxs-up-arrow-circle'></i>
</div>

@endsection

@section('site-js')
@endsection
