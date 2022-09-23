<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Norda - Fan Store</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/images/favicon.png')}}">

    <!-- All CSS is here ============================================ -->

    <link rel="stylesheet" href="{{asset('user/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/vendor/signericafat.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/vendor/cerebrisans.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/vendor/elegant.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/vendor/linear-icon.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/easyzoom.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    <!-- Use the minified version files listed below for better performance and remove the files listed above 
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    
</head>

<body>

    <div class="main-wrapper">
        <header class="header-area transparent-bar section-padding-1">
            <div class="container-fluid">
                <div class="header-large-device">
                    <div class="header-bottom">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{url('')}}"><img src="{{asset('user/images/logo/logo.png')}}" alt="logo"></a>
                                </div>
                                <div>
                                <div class="website-counter"></div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">
                                <div class="main-menu main-menu-padding-1 main-menu-lh-1">
                                    <nav>
                                        <ul>
                                            <li><a href="{{url('')}}">HOME </a></li>
                                            <li><a href="{{url('/products')}}">PRODUCTS </a></li>
                                            <li><a href="{{url('/aboutus')}}">ABOUT US </a></li>
                                            <li><a href="{{url('/contact')}}">CONTACT </a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3">
                                <div class="header-action header-action-flex header-action-mrg-right">
                                    <div class="same-style-2 header-search-1">
                                        <a class="search-toggle" href="#">
                                            <i class="icon-magnifier s-open"></i>
                                            <i class="icon_close s-close"></i>
                                        </a>
                                        <div class="search-wrap-1">
                                            <form action="#">
                                                <input placeholder="Search products…" type="text">
                                                <button class="button-search"><i class="icon-magnifier"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="same-style-2">
                                        <a href=""><i class="icon-user"></i></a>
                                    </div>
                                    <div class="same-style-2">
                                        <a href="wishlist.html"><i class="icon-heart"></i>
                                        <!-- <span class="pro-count red">03</span> -->
                                    </a>
                                    </div>
                                    <div class="same-style-2 header-cart">
                                        <a class="cart-active" href="#">
                                            <i class="icon-basket-loaded"></i>
                                            <!-- <span class="pro-count red">02</span> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-small-device small-device-ptb-1">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mobile-logo">
                                <a href="{{url('')}}"><img src="{{asset('user/images/logo/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="header-action header-action-flex">
                                <div class="same-style-2">
                                    <a href="login-register.html"><i class="icon-user"></i></a>
                                </div>
                                <div class="same-style-2">
                                    <a href="wishlist.html"><i class="icon-heart"></i><span class="pro-count red">03</span></a>
                                </div>
                                <div class="same-style-2 header-cart">
                                    <a class="cart-active" href="#">
                                        <i class="icon-basket-loaded"></i><span class="pro-count red">02</span>
                                    </a>
                                </div>
                                <div class="same-style-2 main-menu-icon">
                                    <a class="mobile-header-button-active" href="#"><i class="icon-menu"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- mini cart start -->
        <div class="sidebar-cart-active">
            <div class="sidebar-cart-all">
                <a class="cart-close" href="#"><i class="icon_close"></i></a>
                <div class="cart-content">
                    <h3>Shopping Cart</h3>
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Simple Black T-Shirt</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                            </div>
                            <div class="cart-title">
                                <h4><a href="#">Norda Backpack</a></h4>
                                <span> 1 × $49.00 </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#">×</a>
                            </div>
                        </li>
                    </ul>
                    <div class="cart-total">
                        <h4>Subtotal: <span>$170.00</span></h4>
                    </div>
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                        <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile menu start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">

                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li><a href="{{url('')}}">Home </a></li>
                                <li><a href="{{url('/products')}}">Products </a></li>
                                <li><a href="{{url('/aboutus')}}">About Us </a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-contact-info mobile-header-padding-border-4">
                        <ul>
                            <li><i class="icon-phone "></i> (+028) 2910 2022</li>
                            <li><i class="icon-envelope-open "></i> norda@fanstore.com</li>
                            <li><i class="icon-home"></i> 123 Dien Bien Phu, Ho Chi Minh, Viet Nam</li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
        <footer class="footer-area bg-gray pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="footer-logo">
                                <a href="#"><img src="{{asset('user/images/logo/logo.png')}}" alt="logo"></a>
                            </div>
                            <div class="single-contact-info">
                                <span>Our Location</span>
                                <p>123 Dien Bien Phu, Ho Chi Minh, Viet Nam</p>
                            </div>
                            <div class="single-contact-info">
                                <span>24/7 hotline:</span>
                                <p>(+028) 2910 2022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('')}}">Home</a></li>
                                        <li><a href="{{url('/products')}}">Products</a></li>
                                        <li><a href="{{url('/aboutus')}}">About Us </a></li>
                                        <li><a href="{{url('/contact')}}">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <div class="social-style-2 social-style-2-mrg">
                                <a href="#"><i class="social_twitter"></i></a>
                                <a href="#"><i class="social_facebook"></i></a>
                                <a href="#"><i class="social_googleplus"></i></a>
                                <a href="#"><i class="social_instagram"></i></a>
                                <a href="#"><i class="social_youtube"></i></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2022 Norda Fan Store
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="{{asset('user/images/product/product-1.jpg')}}" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="{{asset('user/images/product/product-3.jpg')}}" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="{{asset('user/images/product/product-6.jpg')}}" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="{{asset('user/images/product/product-3.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav-style-6">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="{{asset('user/images/product/quickview-s1.jpg')}}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="{{asset('user/images/product/quickview-s2.jpg')}}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="{{asset('user/images/product/quickview-s3.jpg')}}" alt=""></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="{{asset('user/images/product/quickview-s2.jpg')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Tên quạt</h2>
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
                                    <p>Mô tả ngắn</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$75.72</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="white" href="#">white</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Type: </span><span>Loại quạt</span> </li>
                                            <li><span><a href="#">Detail</a></span> </li>
                                        </ul>
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
            </div>
        </div>
        <!-- Modal end -->
        <div class="ticker">
         <div class="ticker__list">
            <div class="ticker__item">
               
                <h2 id="displayDateTime"></h2>
            </div>
         </div>
        </div>
    </div>
<!-- Scrolling -->
    <script type="text/javascript">
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes()
  var dateTime = date+' '+time;
   
  document.getElementById("displayDateTime").innerHTML =  dateTime + " " + daylist[day]  ;
 
  </script>

  <!-- Visitor count -->
  <script type="text/javascript">
 var counterContainer = document.querySelector(".website-counter");
var resetButton = document.querySelector("#reset");
var visitCount = localStorage.getItem("page_view");

// Check if page_view entry is present
if (visitCount) {
  visitCount = Number(visitCount) + 1;
  localStorage.setItem("page_view", visitCount);
} else {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
}
counterContainer.innerHTML =  "Visitor count : " + visitCount;

// Adding onClick event listener
resetButton.addEventListener("click", () => {
  visitCount = 1;
  localStorage.setItem("page_view", 1);
  counterContainer.innerHTML = "Visitor count : " + visitCount;
});
  </script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- All JS is here ======================================================== -->

    <script src="{{asset('user/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/jquery-v3.6.0.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user/js/plugins/slick.js')}}"></script>
    <script src="{{asset('user/js/plugins/jquery.syotimer.min.js')}}"></script>
    <script src="{{asset('user/js/plugins/jquery.instagramfeed.min.js')}}"></script>
    <script src="{{asset('user/js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('user/js/plugins/wow.js')}}"></script>
    <script src="{{asset('user/js/plugins/jquery-ui-touch-punch.js')}}"></script>
    <script src="{{asset('user/js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('user/js/plugins/magnific-popup.js')}}"></script>
    <script src="{{asset('user/js/plugins/sticky-sidebar.js')}}"></script>
    <script src="{{asset('user/js/plugins/easyzoom.js')}}"></script>
    <script src="{{asset('user/js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('user/js/plugins/ajax-mail.js')}}"></script>

  

    <!-- Use the minified version files listed below for better performance and remove the files listed above  
        <script src="{{asset('user/js/vendor/vendor.min.js')}}"></script>
        <script src="{{asset('user/js/plugins/plugins.min.js')}}"></script>  -->

    <!-- Main JS -->
    <script src="{{asset('user/js/main.js')}}"></script>



</body>

</html>