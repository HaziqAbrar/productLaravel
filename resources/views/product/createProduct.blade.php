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

                            <!-- Form Start -->
                            <form class="contact-form-style" action="/store" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Image</label>
                                        <input name="image"  type="file" />
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Image Hover</label>
                                        <input name="imagehover" type="file" />
                                    </div>

                                    <div class="col-lg-12">
                                        <input name="name" placeholder="Name*" type="text" />
                                    </div>

                                    <div class="col-lg-6">
                                        <input name="price" placeholder="Price*" type="number" />
                                    </div>

                                    <div class="col-lg-6 pro-details-color-size d-flex" style="margin-top: 0;">
                                        <!-- Right Side Start -->
                                        <div class="select-shoing-wrap d-flex align-items-center">
                                            <div class="shot-product">
                                                <p>Category:</p>
                                            </div>
                                            <div class="shop-select">
                                                <select class="shop-sort" name="category">
                                                    <option value="Bag">Bag</option>
                                                    <option value="Gadget">Gadget</option>
                                                    <option value="Trophy">Trophy</option>
                                                    <option value="Towel">Towel</option>
                                                    <option value="Packaging">Packaging</option>
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
                                        <label for="best_buy" style="float: left;"> Best Buy <input type="checkbox" class="checkbox-default"name="tags[]" value="best_buy"></label>
                                        <label for="interim" style="float: left;"> Interim <input type="checkbox" class="checkbox-default"name="tags[]" value="interim"></label>
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