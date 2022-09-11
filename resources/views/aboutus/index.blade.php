@extends('layout.userLayout')

@section('content')


<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{url('')}}">Home</a>
                </li>
                <li class="active">about us </li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us-area pt-120 pb-120">
    <div class="container">
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
<div class="service-area pb-120">
    <div class="container">
        <div class="service-wrap-border service-wrap-padding-3">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                    <div class="single-service-wrap-2 mb-30">
                        <div class="service-icon-2 icon-red">
                            <i class="icon-cursor"></i>
                        </div>
                        <div class="service-content-2">
                            <h3>Free Shipping</h3>
                            <p>Oders over $99</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1 service-border-1-none-md">
                    <div class="single-service-wrap-2 mb-30">
                        <div class="service-icon-2 icon-red">
                            <i class="icon-refresh "></i>
                        </div>
                        <div class="service-content-2">
                            <h3>90 Days Return</h3>
                            <p>For any problems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 service-border-1">
                    <div class="single-service-wrap-2 mb-30">
                        <div class="service-icon-2 icon-red">
                            <i class="icon-credit-card "></i>
                        </div>
                        <div class="service-content-2">
                            <h3>Secure Payment</h3>
                            <p>100% Guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="single-service-wrap-2 mb-30">
                        <div class="service-icon-2 icon-red">
                            <i class="icon-earphones "></i>
                        </div>
                        <div class="service-content-2">
                            <h3>24h Support</h3>
                            <p>Dedicated support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team-area pb-90">
    <div class="container">
        <div class="section-title mb-45 text-center">
            <h2>Team Members</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="{{asset('user/images/team/team-1.jpg')}}" alt="">

                    </div>
                    <div class="team-content text-center">
                        <h4>Quoc Huy</h4>
                        <span>Manager </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="{{asset('user/images/team/team-2.jpg')}}" alt="">

                    </div>
                    <div class="team-content text-center">
                        <h4>Thien Hao</h4>
                        <span>Developer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <img src="{{asset('user/images/team/team-3.jpg')}}" alt="">
                    </div>
                    <div class="team-content text-center">
                        <h4>Kha Ai</h4>
                        <span>Designer </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="testimonial-area bg-gray-3 pt-115 pb-115">
    <div class="container">
        <div class="section-title mb-45 text-center">
            <h2>Testimonials</h2>
        </div>
        <div class="testimonial-active-2 dot-style-2 dot-style-2-position-static">
            <div class="single-testimonial-2 text-center">
                <div class="testimonial-img">
                    <img alt="" src="assets/images/testimonial/client-1.png">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <div class="client-info">
                    <h5>Anna Miller</h5>
                    <span>Deginer</span>
                </div>
            </div>
            <div class="single-testimonial-2 text-center">
                <div class="testimonial-img">
                    <img alt="" src="assets/images/testimonial/client-1.png">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
                <div class="client-info">
                    <h5>Anna Miller</h5>
                    <span>Deginer</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand-logo-area pt-120 pb-80">
    <div class="container">
        <div class="brand-logo-wrap-2">
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-6.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-7.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-8.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-9.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-10.png')}}" alt="brand-logo">
            </div>
            <div class="single-brand-logo-2 mb-30">
                <img src="{{asset('user/images/brand-logo/brand-logo-11.png')}}" alt="brand-logo">
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