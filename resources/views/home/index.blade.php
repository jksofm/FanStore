@extends('layout.userLayout')

@section('content')



<div class="slider-area bg-gray">
    <div class="hero-slider-active-1 hero-slider-pt-1 nav-style-1 dot-style-1">
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1">
                            <h4 class="animated">Our Promise</h4>
                            <h1 class="animated">Confidence you can feel.
                                <p class="animated">We help make transforming the spaces you love a better experience through high quality products, solutions, and dedicated support.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="{{url('/products')}}">Explore Now</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero-slider-img-1 slider-animated-1">
                            <img class="animated" src="{{asset('user/images/slider/slider1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero-slider single-animation-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero-slider-content-1 hero-slider-content-1-pt-1 slider-animated-1">
                            <h4 class="animated">New Arrivals</h4>
                            <h1 class="animated">Calvertion collection
                                <p class="animated">Mordern, Simple, Beautiful Products from Norda.</p>
                                <div class="btn-style-1">
                                    <a class="animated btn-1-padding-1" href="{{url('/products')}}">Explore Now</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero-slider-img-1 slider-animated-1">
                            <img class="animated" src="{{asset('user/images/slider/slider2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service-area">
    <div class="container">
        <div class="service-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap mb-30">
                        <div class="service-icon">
                            <i class="icon-cursor"></i>
                        </div>
                        <div class="service-content">
                            <h3>Free Shipping</h3>
                            <span>Orders over $100</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap mb-30">
                        <div class="service-icon">
                            <i class="icon-reload"></i>
                        </div>
                        <div class="service-content">
                            <h3>Free Returns</h3>
                            <span>Within 30 days</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap mb-30">
                        <div class="service-icon">
                            <i class="icon-lock"></i>
                        </div>
                        <div class="service-content">
                            <h3>100% Secure</h3>
                            <span>Payment Online</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap mb-30">
                        <div class="service-icon">
                            <i class="icon-tag"></i>
                        </div>
                        <div class="service-content">
                            <h3>Best Price</h3>
                            <span>Guaranteed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-us-area pt-85">
    <div class="container">
        <div class="border-bottom-1 about-content-pb">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="about-us-logo">
                        <img src="{{asset('user/images/about/logo.png')}}" alt="logo">
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="about-us-content">
                        <h3>Introduce</h3>
                        <p>Norda store is a business concept is to offer fan products at the best price. It has since it was founded in 2018 grown into one of the best WooCommerce Store Theme. The content of this site is copyright-protected and is the property of David Moye Creative.</p>
                        <div class="signature">
                            <h2>David Moye</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area section-padding-1 pt-115 pb-75">
    <div class="container">
        <div class="section-title-tab-wrap mb-45">
            <div class="section-title">
                <h2>Featured Products</h2>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="single-product-wrap mb-35">
                            <div class="product-img product-img-zoom mb-20">
                                <a href="product-details.html">
                                    <img src="{{asset('user/images/fans/'.$product->photo)}}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <div class="product-action-left">
                                        <button><i class="icon-basket-loaded"></i>Add to Cart</button>
                                    </div>
                                    <div class="product-action-right tooltip-style">
                                        <button data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i><span>Quick View</span></button>

                                    </div>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-content-left">
                                    <h4><a href="product-details.html">{{$product->name}}</a></h4>
                                    <div class="product-price">
                                        <span>${{$product->price}}</span>
                                    </div>
                                </div>
                                <div class="product-content-right tooltip-style">
                                    <button class="font-inc"><i class="icon-heart"></i><span>Wishlist</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>

<div class="instagram-area">
    <div class="container">
        <div class="section-title-tag-wrap mb-45">
            <div class="section-title">
                <h2>Our Instagram</h2>
            </div>
            <div class="instagram-tag">
                <span>#monkeylover</span>
            </div>
        </div>
        <div class="instagram-wrap">
            <div id="instafeed" data-limit="5" class="instagram-wrap-1"></div>
        </div>
    </div>
</div>
<div class="brand-logo-area pt-100 pb-100">
    <div class="container">
        <div class="brand-logo-wrap brand-logo-mrg">
            <div class="single-brand-logo mb-10">
                <img src="{{asset('user/images/brand-logo/brand-logo-1.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('user/images/brand-logo/brand-logo-2.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('user/images/brand-logo/brand-logo-3.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('user/images/brand-logo/brand-logo-4.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo mb-10">
                <img src="{{asset('user/images/brand-logo/brand-logo-5.png')}}" alt="brand-logo">
            </div>
        </div>
    </div>
</div>
<div class="subscribe-area bg-gray pt-115 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="section-title">
                    <h2>keep connected</h2>
                    <p>Get updates by subscribe our weekly newsletter</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div id="mc_embed_signup" class="subscribe-form">
                    <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                        <div id="mc_embed_signup_scroll" class="mc-form">
                            <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                            <div class="mc-news" aria-hidden="true">
                                <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                            </div>
                            <div class="clear">
                                <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection