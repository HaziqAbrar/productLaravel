@extends('components.navbar')

@section('title','Product Page - Insource Plus')

@section('container')
    <div class="shop-category-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>12</span> product(s) found of <span>209</span></p>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Newest</a></li>
                                    <li><a class="dropdown-item" href="#">Oldest</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach ($myproduct as $product)
                                                <div class="col-md-4 col-lg-4 col-xl-3 col-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                                    <!-- Single Product -->
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="/showProduct/{{$product->id}}" class="image">
                                                                <img src="{{ $product->image }}" alt="Product" />
                                                                <img class="hover-image" src="{{ $product->imagehover }}" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="/showProduc">{{ $product->category }}</a></span>
                                                            <h5 class="title"><a href="/showProduct">{{ $product->name }}</a></h5>
                                                            <span class="price">
                                                                <span class="new">From RM {{ $product->price }}</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                            
                                                            <form class="action quickview" method="post" action="/edit/{{$product->id}}">
                                                                {{csrf_field()}}
                                                                <input type="hidden" value="{{ $product->sku }}" name="sku"></input>
                                                                <button type="submit" class="action"><i class="fa fa-edit"></i></button>
                                                            </form>
                                                            <!-- <button class="action quickview" ><i class="fa fa-edit"></i></button> -->

                                                            <form class="action quickview" method="post" action="/delete">
                                                                {{csrf_field()}}
                                                                <input type="hidden" value="{{ $product->sku }}" name="sku"></input>
                                                                <button type="submit" class="action"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                            <!-- <button class="action quickview" ><i class="fa fa-trash"></i></button> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                    </li>
                                    <li class="li"><a class="page-link active" href="#">1</a></li>
                                    <li class="li"><a class="page-link" href="#">2</a></li>
                                    <li class="li"><a class="page-link" href="#">3</a></li>
                                    <li class="li"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Categories</h4>
                            <div class="sidebar-widget-category">
                                <ul id="offcanvas-menu" class="shop-ctry-menu list-unstyled ">
                                    <li class="active">
                                        <a href="#"> All Products <span>(209)</span></a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="javascript:void(0)"> Bag <span>(21)</span></a>
                                        <ul class="list-unstyled category-sub-menu">
                                            <li><a href="#">Backpack <span>(18)</span></a></li>
                                            <li><a href="#">Waist Pouch <span>(1)</span></a></li>
                                            <li><a href="#">Sling Bag <span>(1)</span></a></li>
                                            <li><a href="#">Travel Bag <span>(1)</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"> Gadget <span>(59)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Trophy <span>(71)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Towel <span>(15)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Packaging <span>(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> Umbrella <span>(19)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"> T-Shirt & Caps <span>(17)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h4 class="sidebar-title">Tags</h4>
                            <div class="sidebar-widget-brand">
                                <ul>
                                    <li><a href="#" class="selected m-0"> Best Buy <span>(10)</span> </a></li>
                                    <li><a href="#" class=""> Interim <span>(11)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection