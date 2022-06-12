@extends('components.navbar')

@section('title','Single Product - Insource Plus')

@section('container')
    <div class="product-details-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="/{{$product->image}}" alt="">
                                <a class="venobox full-preview" data-gall="myGallery" href="{{$product->image}}">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="/{{$product->imagehover}}" alt="">
                                <a class="venobox full-preview" data-gall="myGallery" href="{{$product->imagehover}}">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="/{{$product->image}}" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive m-auto" src="/{{$product->imagehover}}" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{$product->name}}</h2>
                        <div class="pricing-meta">
                            <ul class="d-flex">
                                <li class="new-price">From RM {{$product->price}}</li>
                            </ul>
                        </div>
                        <p>{{$product->description}}</p>
                        <div class="pro-details-color-size d-flex">
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>SKU:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{$product->sku}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{$product->category}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Tags: </span>
                            <ul class="d-flex">
                                @foreach ($product->tags as $product)
                                <li>
                                    <a href="#">{{$product}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Information</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper text-start">
                                    <ul>
                                        <li><span>Dimensions</span>17" H x 12"W x 6"D</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Related Products</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-543LAP-03_red_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-543LAP-07_grey_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-543LAP Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 99.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-577LAP-02_navy blue_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-577LAP-07_grey_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-577LAP Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 119.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-545LAP-07_grey_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-545LAP-07_grey_back.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-545LAP Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 139.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-546LAP-07_grey_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-546LAP-07_grey_back.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-546LAP Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 139.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack_S06-019CON-01_black_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack_S06-019CON-02_navy blue_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S06-019CON Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 120.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-500STD-02_navy blue_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-500STD-09_maroon_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-500STD Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 49.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-569STD-03_red_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-569STD-13_turquoise_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-569STD Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 59.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                            <div class="swiper-slide">
                                <!-- Single Product -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product.html" class="image">
                                                            <img src="assets/images/product-image/Bag_Backpack _S02-677STD-05_orange_front.jpg" alt="Product" />
                                                            <img class="hover-image" src="assets/images/product-image/Bag_Backpack _S02-677STD-13_turquoise_front.jpg" alt="Product" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category"><a href="#">Backpack</a></span>
                                                        <h5 class="title"><a href="single-product.html">S02-677STD Backpack</a></h5>
                                                        <span class="price">
                                                            <span class="new">From RM 59.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="actions">
                                                        <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection