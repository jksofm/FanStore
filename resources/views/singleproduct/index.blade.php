@extends('layout.userLayout')


@section('content')

<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('/products')}}">Products</a>
                </li>
                <li class="active">Product Detail</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area pt-120 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-tab">
                    <div class="pro-dec-big-img-slider">
                        @for( $i = 0 ; $i < count($imagesGallery) ; $i++ ) <div class="easyzoom-style">
                            <div class="easyzoom easyzoom--overlay">
                                <a href="{{asset('user/images/fans/'.$imagesGallery[$i]->image)}}">
                                    <img src="{{asset('user/images/fans/'.$imagesGallery[$i]->image)}}" alt="">
                                </a>
                            </div>
                            <a class="easyzoom-pop-up img-popup" href="{{asset('user/images/fans/'.$imagesGallery[$i]->image)}}"><i class="icon-size-fullscreen"></i></a>
                    </div>
                    @endfor

                </div>
                <div class="product-dec-slider-small product-dec-small-style1">
                    @for( $i = 0 ; $i < count($imagesGallery) ; $i++ ) <div class="product-dec-small active">
                        <img src="{{asset('user/images/fans/'.$imagesGallery[$i]->image)}}" alt="">
                </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="product-details-content pro-details-content-mrg">
            <h2>{{$product->name}}</h2>
            <!-- <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>5.0</span>
                                    </div>
                                </div>
                                <div class="product-review-order">
                                    <span>62 Reviews</span>
                                    <span>242 orders</span>
                                </div>
                            </div> -->
            <p>Description</p>
            <div class="pro-details-price">
                <span class="new-price">${{$product->price}}</span>
            </div>
            <div class="pro-details-color-wrap">
                <span>Color:</span>
                <div class="pro-details-color-content">
                    <ul>

                        <li><a class="{{$product->color}}" href="#">{{$product->color}}</a></li>

                    </ul>
                </div>
            </div>
            <div class="pro-details-color-wrap">
                <span>Brand:</span>
                <div class="pro-details-color-content">
                    <p>{{$product->brand}}</p>
                </div>
            </div>

            <div class="pro-details-quality">
                <span>Quantity:</span>
                <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                </div>
            </div>
            <div class="pro-details-color-wrap mt-4">
                <span>Type:</span>
                <div class="pro-details-color-content">
                    <p>{{$category[$product->categoryID]->name}}</p>
                </div>
            </div>
            <div class="pro-details-action-wrap">
                <div class="pro-details-add-to-cart">
                    <a title="Add to Cart" href="#">Add To Cart </a>
                </div>
                <div class="pro-details-action">
                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                    <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                    <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                    <div class="product-dec-social">
                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                        <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="description-review-wrapper pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dec-review-topbar nav mb-45">
                    <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                    <a data-toggle="tab" href="#des-details2">Specification</a>
                    <a data-toggle="tab" href="#des-details3">Materials </a>
                    <a data-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                </div>
                <div class="tab-content dec-review-bottom">
                    <div id="des-details1" class="tab-pane active">
                        <div class="description-wrap">
                            <p>{{$product->description}}</p>
                        </div>
                    </div>
                    <div id="des-details2" class="tab-pane">
                        <div class="specification-wrap table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="title width1">Name</td>
                                        <td>{{$product->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Categories</td>
                                        <td>{{$category[$product->categoryID]->name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Brand </td>
                                        <td>{{$product->brand}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Color</td>
                                        <td>{{$product->color}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="des-details3" class="tab-pane">
                        <div class="specification-wrap table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="title width1">Diameter</td>
                                        <td>{{$product->diameter}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Wind mode</td>
                                        <td>{{$product->wind_mode}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Dashboard</td>
                                        <td>{{$product->dashboard}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Motor type</td>
                                        <td>{{$product->motor_type}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Utilities</td>
                                        <td>{{$product->utilities}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Dimensions</td>
                                        <td>{{$product->dimensions}}</td>
                                    </tr>
                                    <tr>
                                        <td class="title width1">Weight</td>
                                        <td>{{$product->weight}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="des-details4" class="tab-pane">
                        <div class="review-wrapper">
                            <h2>{{count($reviews)}} Review For {{$product->name}}</h2>
                            @foreach($reviews as $review)
                            <div class="single-review">
                                <div class="review-img">
                                    <!-- <div class="review-img">
                                    <img src="assets/images/product-details/client-1.png" alt="">
                                </div>
                                </div> -->
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h5><span>{{$review->nameuser}} </span> </h5>
                                            </div>
                                            <div class="review-rating">
                                                @if($review->rating == 5)
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                @elseif($review->rating == 4)

                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                @elseif($review->rating == 3)

                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>
                                                @elseif($review->rating == 2)

                                                <i class="yellow icon_star"></i>
                                                <i class="yellow icon_star"></i>

                                                @elseif($review->rating == 1)

                                                <i class="yellow icon_star"></i>
                                                @endif
                                            </div>
                                        </div>
                                        <p>{{$review->reviewContent}}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="ratting-form">

                                    <form action="#">

                                        <form method="POST" action="{{url('/review/create/'.$product->id)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input name="nameuser" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="star-box-wrap">
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                            <a href="#"><i class="icon_star"></i></a>
                                                        </div>
                                                        <label>Rating <span>(1-5)</span></label>
                                                        <input name="rating" max="5" min="1" type="number">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="reviewContent"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Save">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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