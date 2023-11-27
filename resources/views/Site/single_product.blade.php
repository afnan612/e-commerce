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
                    <h2>تفاصيل المنتج</h2>
                    <ul>
                        <li>
                            <a href="index.html">الرئيسية</a>
                        </li>
                        <li>
                            <span>تفاصيل المنتج</span>
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


<div class="product-details-area ptb-100">
    <div class="container">
        <div class="top">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="outer">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="owl-thumbs" data-slider-id="1">
                                    @foreach($product->images as $image_row)
                                        <div class="item owl-thumb-item">
                                            <div class="top-img">
                                                <img src="{{asset($image_row->image)}}" height="165" width="165" alt="Product">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="image-slides owl-carousel owl-theme" data-slider-id="1">
{{--                                    <div class="item">--}}
{{--                                        <div class="top-img">--}}
{{--                                            <img src="assets/images/products/product-details4.png" alt="Product">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    @foreach($product->images as $image_row)
                                    <div class="top-img">
                                        <img src="{{asset($image_row->image)}}" height="455" width="455" alt="Product">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top-content">
                        <h2>{{$product->name}}</h2>
                        <p>{{$product->description}} </p>
                        <ul class="tag">
{{--                            @foreach($categories as $category)--}}
{{--                            <li>Category: <span>{{$product->$category->category_name}}</span></li>--}}
{{--                            @endforeach--}}
                            <li>Status: <span>{{$product->status}}</span></li>
                            <li>price: <span>{{ $product->final_price }}</span></li>
                        </ul>

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


{{--        <div class="bottom">--}}
{{--            <ul class="nav nav-pills" id="pills-tab" role="tablist">--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab"--}}
{{--                       aria-controls="pills-home" aria-selected="true">Description</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab"--}}
{{--                       aria-controls="pills-profile" aria-selected="false">Reviews</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--            </ul>--}}
{{--            <div class="tab-content" id="pills-tabContent">--}}
{{--                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">--}}
{{--                    <div class="bottom-description">--}}
{{--                        <p>{{$product->description}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">--}}
{{--                    <div class="bottom-comment">--}}
{{--                        <ul class="comments">--}}
{{--                            <li>--}}
{{--                                <img src="assets/images/blog/comment1.jpg" alt="Blog">--}}
{{--                                <h4>Tom Henry</h4>--}}
{{--                                <span>01 December, 2020</span>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod--}}
{{--                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero--}}
{{--                                    eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
{{--                                <ul class="reviews">--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star"></i>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <img src="assets/images/blog/comment2.jpg" alt="Blog">--}}
{{--                                <h4>Angele Carter</h4>--}}
{{--                                <span>02 December, 2020</span>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod--}}
{{--                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero--}}
{{--                                    eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>--}}
{{--                                <ul class="reviews">--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star checked"></i>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <i class="bx bxs-star"></i>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="bottom-review">--}}
{{--                        <h3>Leave A Review</h3>--}}
{{--                        <form>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Name">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" class="form-control" placeholder="Email">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea id="your-comments" rows="8" class="form-control"--}}
{{--                                          placeholder="Comments"></textarea>--}}
{{--                            </div>--}}
{{--                            <button type="submit" class="btn common-btn">--}}
{{--                                Post A Review--}}
{{--                                <img src="assets/images/shape1.png" alt="Shape">--}}
{{--                                <img src="assets/images/shape2.png" alt="Shape">--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>


<div class="products-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>منتجات ذات صلة</h2>
        </div>
        <div class="row">
            @foreach($RelatedProducts as $product)

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
            <div class="modal-footer">
                <form>
                    <input type="text" class="form-control" placeholder="ادخل قسمية شراء">
                    <button type="submit" class="btn common-btn">
                        اكمال الطلب
                        <img src="assets/site/images/shape1.png" alt="Shape">
                        <img src="assets/site/images/shape2.png" alt="Shape">
                    </button>
                </form>
            </div>
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

</body>

    @endsection

@section('site-js')
@endsection
