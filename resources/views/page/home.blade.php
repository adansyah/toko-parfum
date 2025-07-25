@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Modern Interior <span class="d-block">Design Studio</span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                            vulputate velit imperdiet dolor tempor tristique.</p>
                        <p>
                            <a href="{{ route('shop') }}" class="btn btn-secondary me-2">Shop Now</a>
                            <a href="{{ route('about') }}" class="btn btn-white-outline">Explore</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('images/parfum.png') }}" class="img-fluid w-75 mt-5">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique.</p>
                    <p><a href="{{ route('shop') }}" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                {{-- @forelse ($furnitures as $furniture) --}}
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="">
                        <img src="{{ asset('images/parfum.png') }}" class="img-fluid product-thumbnail">
                        <h3 class="product-title">Victoria Secret</h3>
                        <strong class="product-price">Rp. 200.000</strong>
                        <span class="icon-cross">
                            <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
                        </span>
                    </a>
                </div>
                {{-- @empty
                    <div class="col-12">
                        <p>No furniture available.</p>
                    </div>
                    @endforelse --}}
                <!-- End Column 2-4 -->
            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit
                        imperdiet dolor tempor tristique.</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/truck.svg') }}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Fast & Free Shipping</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/bag.svg') }}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/support.svg') }}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>24/7 Support</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{ asset('images/return.svg') }}" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{ asset('images/why-choose-us-img.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1"><img src="{{ asset('images/img-grid-1.jpg') }}" alt="Untree.co"></div>
                        <div class="grid grid-2"><img src="{{ asset('images/img-grid-2.jpg') }}" alt="Untree.co"></div>
                        <div class="grid grid-3"><img src="{{ asset('images/img-grid-3.jpg') }}" alt="Untree.co"></div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
                    <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam
                        ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant
                        morbi tristique senectus et netus et malesuada</p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    {{-- <p><a href="{{ route('about') }}" class="btn">Explore</a></p> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    {{-- <div class="popular-product">
        <div class="container">
            <div class="row">
                @forelse ($popularFurnitures as $furniture)
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product-item-sm d-flex">
                            <div class="thumbnail">
                                <img src="{{ $furniture->image ? asset('storage/' . $furniture->image) : asset('images/product-placeholder.png') }}"
                                    alt="{{ $furniture->name }}" class="img-fluid">
                            </div>
                            <div class="pt-3">
                                <h3>{{ $furniture->name }}</h3>
                                <p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio</p>
                                <p><a href="{{ route('shop.show', $furniture->id) }}">Read More</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>No popular furniture available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div> --}}
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">
                            {{-- @forelse ($testimonials as $testimonial) --}}
                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>“Parfumnya Enak Wangi”</p>
                                            </blockquote>
                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{ asset('images/bowl-2.png') }}" alt="Victoria Secret"
                                                        class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Syahdan Mutahariq</h3>
                                                <span class="position d-block mb-3">Pembeli</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- @empty
                                <div class="item">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mx-auto">
                                            <p>No testimonials available.</p>
                                        </div>
                                    </div>
                                </div>
                                @endforelse --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    {{-- <a href="{{ route('blog') }}" class="more">View All Posts</a> --}}
                </div>
            </div>

            <div class="row">
                {{-- @forelse ($recentBlogs as $blog) --}}
                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="" class="post-thumbnail">
                            <img src="{{ asset('images/bowl-2.png') }}" alt="Blog" class="img-fluid">
                        </a>
                        <div class="post-content-entry">
                            <h3><a href="">Blog Parfum</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Halawangi Parfume</a></span> <span>on <a href="#">25 Jun
                                        2025</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @empty
                    <div class="col-12">
                        <p>No recent blogs available.</p>
                    </div>
                @endforelse --}}
            </div>
        </div>
    </div>

@endsection
