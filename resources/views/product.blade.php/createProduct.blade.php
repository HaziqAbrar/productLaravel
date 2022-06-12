@extends('components.navbar')

@section('title','Create Product Page - Insource Plus')

@section('container')
<div class="shop-category-area pb-100px">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-12 my-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-form">
                            <div class="contact-title mb-30">
                                <h2 class="title">Add Product</h2>
                            </div>
                            <form class="contact-form-style" id="contact-form" action="/api/product" method="post">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Image</label>
                                        <input name="image"  type="file" />
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Image Hover</label>
                                        <input name="image_hover" type="file" />
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Image Gallery</label>
                                        <input name="image_gallery" type="file" multiple/>
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="name" placeholder="Name*" type="text" />
                                    </div>
                                    <div class="col-lg-6">
                                        <input name="price" placeholder="Price*" type="text" />
                                    </div>
                                    <div class="col-lg-6 pro-details-color-size d-flex" style="margin-top: 0;">
                                        <!-- Right Side Start -->
                                        <div class="select-shoing-wrap d-flex align-items-center">
                                            <div class="shot-product">
                                                <p>Category:</p>
                                            </div>
                                            <div class="shop-select">
                                                <select class="shop-sort">
                                                    <option value="0">Bag</option>
                                                    <option value="1">Gadget</option>
                                                    <option value="2">Trophy</option>
                                                    <option value="3">Towel</option>
                                                    <option value="4">Packaging</option>
                                                    <option value="5">Umbrella</option>
                                                    <option value="6">T-Shirt & Caps</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Right Side End -->
                                    </div>
                                    <div class="col-lg-12">
                                        <input name="sku" placeholder="SKU*" type="text" />
                                    </div>

                                    <div class="col-lg-12 d-flex mb-4 gap-2">
                                        <label>Tags:</label>
                                        <label for="best_buy" style="float: left;"> Best Buy <input type="checkbox" class="checkbox-default"name="best_buy" value="best_buy"></label>
                                        <label for="interim" style="float: left;"> Interim <input type="checkbox" class="checkbox-default"name="interim" value="interim"></label>
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="description" placeholder="Description*"></textarea>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button class="btn btn-primary" type="submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection