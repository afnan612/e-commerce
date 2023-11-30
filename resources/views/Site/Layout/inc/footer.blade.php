
<footer class="footer-area pt-100 pb-70">
    <div class="footer-shape">

        <img src=" {{asset('assets/site/images/footer-right-shape.png')}}" alt="Shape">
        <img src=" {{asset('assets/site/images/shape5.png')}}" alt="Shape">

{{--        <img src="assets/site/images/footer-right-shape.png" alt="Shape">--}}
{{--        <img src="assets/site/images/shape5.png" alt="Shape">--}}
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="logo" href="index.html">
                            <img src="{{asset('assets/site/images/logo.png')}}" alt="Logo">
                        </a>
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-pin"></i>--}}
{{--                                <a href="#">2750 Quadra Street, Victoria, Canada</a>--}}
{{--                                <a href="#">345-659 Birmingham Street, England</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-phone-call"></i>--}}
{{--                                <a href="tel:+9908314326">+990-831-4326</a>--}}
{{--                                <a href="tel:+5465486325">+546-548-6325</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-email"></i>--}}
{{--                                <a href="/cdn-cgi/l/email-protection#b4dcd1d8d8dbf4d1d7dbc49ad7dbd9"><span class="__cf_email__" data-cfemail="f59d9099999ab590969a85db969a98">[email&#160;protected]</span></a>--}}
{{--                                <a href="/cdn-cgi/l/email-protection#5a33343c351a3f39352a74393537"><span class="__cf_email__" data-cfemail="fe97909891be9b9d918ed09d9193">[email&#160;protected]</span></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-services">
                        <h3>الدعم والتواصل</h3>

                        <ul class="support-list-item">
                            <li>  <a href="{{ $setting->gmail }}">  {{ $setting->gmail }} <i class="fal fa-envelope-open"></i> </a> </li>
                            <li> <a href="tel:{{ $setting->phone }}">{{ $setting->phone }} <i class="fal fa-phone-alt"></i> </a> </li>
                        </ul>

{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-pin"></i>--}}
{{--                                <a href="#">2750 Quadra Street, Victoria, Canada</a>--}}
{{--                                <a href="#">345-659 Birmingham Street, England</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-phone-call"></i>--}}
{{--                                <a href="tel:+9908314326">+990-831-4326</a>--}}
{{--                                <a href="tel:+5465486325">+546-548-6325</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="flaticon-email"></i>--}}
{{--                                <a href="/cdn-cgi/l/email-protection#b4dcd1d8d8dbf4d1d7dbc49ad7dbd9"><span class="__cf_email__" data-cfemail="f59d9099999ab590969a85db969a98">[email&#160;protected]</span></a>--}}
{{--                                <a href="/cdn-cgi/l/email-protection#5a33343c351a3f39352a74393537"><span class="__cf_email__" data-cfemail="fe97909891be9b9d918ed09d9193">[email&#160;protected]</span></a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

                        <ul>
{{--                            <li>--}}
{{--                                <a href="return-policy.html">سياسة الإرجاع</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="faq.html">FAQ</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="{{route('single_product')}}">تفاصيل المنتج</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="order-tracking.html">Order Tracking</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="privacy-policy.html">Privacy Policy</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="contact.html">Contact Us</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>وصول سريع</h3>
                        <div class="row">
                            <div class="col-6 col-sm-8 col-lg-8">
                                <ul>
                                    <li>
                                        <a href="{{route('about')}}">من نحن</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">تواصل معنا</a>
                                    </li>

                                    <li>
                                        <a href="{{route('shop')}}">المنتجات</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-6 col-lg-6">
{{--                <div class="payment-cards">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="#" target="_blank">--}}
{{--                                <img src="{{asset('assets/site/images/payment1.png')}}" alt="Payment">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" target="_blank">--}}
{{--                                <img src="{{asset('assets/site/images/payment2.png')}}" alt="Payment">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" target="_blank">--}}
{{--                                <img src="{{asset('assets/site/images/payment3.png')}}" alt="Payment">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#" target="_blank">--}}
{{--                                <img src="{{asset('assets/site/images/payment4.png')}}" alt="Payment">--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="social-links">
                    <ul>
                        <li>
                            <a href="{{ $setting->facebook }}" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->whatsapp }}" target="_blank">
                                <i class='bx bxl-whatsapp'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->gmail }}" target="_blank">
                                <i class='bx bxl-google'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright-area">
    <div class="container">
        <div class="copyright-item">
            <p>حقوق النشر © 2023  <a href="https://hibootstrap.com/" target="_blank">جميع الحقوق محفوظة RYN.Tech ❤️</a></p>
        </div>
    </div>
</div>
