@extends('Site.Layout.app')

@section('title')
    تواصل معنا
@stop

@section('content')

    <body>

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>تواصل معنا</h2>
                        <ul>
                            <li>
                                <a href="index.html">الرئيسية</a>
                            </li>
                            <li>
                                <span>تواصل معنا</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-img">
            <img src="" alt="About">
            <img src="assets/site/images/shape16.png" alt="Shape">
            <img src="assets/site/images/shape17.png" alt="Shape">
            <img src="assets/site/images/shape18.png" alt="Shape">
        </div>
    </div>

{{--    <form action="{{ route('admins.store') }}" method="post"   enctype="multipart/form-data">--}}
{{--        {{ csrf_field() }}--}}


    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>تواصل معنا</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-8">
                    <form   action="{{ route('ContactUs') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="الاسم" required data-error="من فضلك ضع اسمك" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="البريد الالكتروني" required data-error="من فضلك ضع ايميلك" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" placeholder="الرقم" required data-error="من فضلك اكتب رقمك" class="form-control" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="الموضوع" required data-error="من فضلك اكتب موضوع الرسالة" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="الرسالة" required data-error="اكتب رسالتك"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            أنا أقبل كل <a href="terms-conditions.html">الشروط والأحكام</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">
                                       ارسل الرسالة
                                        <img src="assets/site/images/shape1.png" alt="Shape">
                                        <img src="assets/site/images/shape2.png" alt="Shape">
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="contact-info">
                        <h3>معلومات التواصل:</h3>
                        <ul class="info">

                            <li>  <a href="{{ $setting->gmail }}">  {{ $setting->gmail }} <i class="fal fa-envelope-open"></i> </a> </li>
                            <li> <a href="tel:{{ $setting->phone }}">{{ $setting->phone }} <i class="fal fa-phone-alt"></i> </a> </li>

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
{{--                                <a href="/cdn-cgi/l/email-protection#6e060b0202012e0b0d011e400d0103"><span class="__cf_email__" data-cfemail="dfb7bab3b3b09fbabcb0aff1bcb0b2">[email&#160;protected]</span></a>--}}
{{--                                <a href="/cdn-cgi/l/email-protection#89e0e7efe6c9eceae6f9a7eae6e4"><span class="__cf_email__" data-cfemail="e58c8b838aa580868a95cb868a88">[email&#160;protected]</span></a>--}}
{{--                            </li>--}}
                        </ul>
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
{{--                                <li>--}}
{{--                                    <a href="#" target="_blank">--}}
{{--                                        <i class='bx bxl-skype'></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#" target="_blank">--}}
{{--                                        <i class='bx bxl-youtube'></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    <div class="map-area pb-100">--}}
{{--        <div class="container">--}}
{{--            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1608484692696!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="modal fade modal-right popup-modal" id="exampleModal" tabindex="-1" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h2>Shopping Cart <span>02 Items</span></h2>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="cart-table">--}}
{{--                        <table class="table">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">--}}
{{--                                    <img src="assets/site/images/cart/cart1.png" alt="Cart">--}}
{{--                                </th>--}}
{{--                                <td>--}}
{{--                                    <h3>White Comfy Stool</h3>--}}
{{--                                    <span class="rate">$200.00 x 1</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <ul class="number">--}}
{{--                                        <li>--}}
{{--                                            <span class="minus">-</span>--}}
{{--                                            <input type="text" value="1" />--}}
{{--                                            <span class="plus">+</span>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="close" href="#">--}}
{{--                                        <i class='bx bx-x'></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">--}}
{{--                                    <img src="assets/site/images/cart/cart2.png" alt="Cart">--}}
{{--                                </th>--}}
{{--                                <td>--}}
{{--                                    <h3>Yellow Armchair</h3>--}}
{{--                                    <span class="rate">$180.00 x 1</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <ul class="number">--}}
{{--                                        <li>--}}
{{--                                            <span class="minus">-</span>--}}
{{--                                            <input type="text" value="1" />--}}
{{--                                            <span class="plus">+</span>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="close" href="#">--}}
{{--                                        <i class='bx bx-x'></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                        <div class="total-amount">--}}
{{--                            <h3>Total: <span>$380.00</span></h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <form>--}}
{{--                        <input type="text" class="form-control" placeholder="Enter Coupon Code">--}}
{{--                        <button type="submit" class="btn common-btn">--}}
{{--                            Proceed To Checkout--}}
{{--                            <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--                            <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="modal fade modal-right popup-modal wishlist-modal" id="exampleModalWishlist" tabindex="-1" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h2>Wishlist <span>02 Items</span></h2>--}}
{{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <div class="cart-table">--}}
{{--                        <table class="table">--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">--}}
{{--                                    <img src="assets/site/images/cart/cart1.png" alt="Cart">--}}
{{--                                </th>--}}
{{--                                <td>--}}
{{--                                    <h3>White Comfy Stool</h3>--}}
{{--                                    <span class="rate">$200.00 x 1</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="common-btn" href="shop.html">--}}
{{--                                        Add To Cart--}}
{{--                                        <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--                                        <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="close" href="#">--}}
{{--                                        <i class='bx bx-x'></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">--}}
{{--                                    <img src="assets/site/images/cart/cart2.png" alt="Cart">--}}
{{--                                </th>--}}
{{--                                <td>--}}
{{--                                    <h3>Yellow Armchair</h3>--}}
{{--                                    <span class="rate">$180.00 x 1</span>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="common-btn" href="shop.html">--}}
{{--                                        Add To Cart--}}
{{--                                        <img src="assets/site/images/shape1.png" alt="Shape">--}}
{{--                                        <img src="assets/site/images/shape2.png" alt="Shape">--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a class="close" href="#">--}}
{{--                                        <i class='bx bx-x'></i>--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="go-top">
        <i class='bx bxs-up-arrow-circle'></i>
        <i class='bx bxs-up-arrow-circle'></i>
    </div>
    @endsection

    @section('site-js')
    @endsection


