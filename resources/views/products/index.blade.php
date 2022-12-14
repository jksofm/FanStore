<script>
    function showDetails(fanInfo) {
        var productName = fanInfo.getAttribute("data-name");
        var productPrice = fanInfo.getAttribute("data-price");
        var productPhoto = fanInfo.getAttribute("data-photo");
        var productColor = fanInfo.getAttribute("data-color");
        var productBrand = fanInfo.getAttribute("data-brand");
        var productCategory = fanInfo.getAttribute("data-category");
        var productID = fanInfo.getAttribute("data-id");

        $.ajax({
            type: "GET",
            data: {
                productName,
                productPrice,
                productPhoto,
                productColor,
                productBrand,
                productCategory,
                productID
            },
            url: "{{url('/getProductQuickView')}}",
            success: (data) => {
                $('#productQuickViewName').html(data.productName),
                    $('#productQuickViewPrice').html(data.productPrice),
                    $('#productQuickViewPhoto').attr('src', `{{asset('user/images/fans/${data.productPhoto}')}}`),
                    $('#productQuickViewColor').attr('class', data.productColor),
                    $('#productQuickViewBrand').html(data.productBrand),
                    $('#productQuickViewCategory').html(data.productCategory),
                    $('#productQuickViewID').attr('href', `{{url('singleproduct/${data.productID}')}}`)
            }
        })
    }
</script>
@extends('layout.userLayout')


@section('content')



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
                        <span> 1 ?? $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">??</a>
                    </div>
                </li>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Norda Backpack</a></h4>
                        <span> 1 ?? $49.00 </span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">??</a>
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
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="active">Products</li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-120 pb-120">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-topbar-wrapper">
                    <div class="product-sorting-wrapper">
                        <!-- <div class="product-show shorting-style">
                            <label>Sort by :</label>
                            <select>
                                <option value="">Default</option>
                                <option value=""> Name</option>
                                <option value=""> price</option>
                            </select>
                        </div> -->
                    </div>
                </div>
                <div class="shop-bottom-area">
                    <div class="tab-content jump">
                        <div class="tab-pane active">
                            <div id="productcontent" class="row">
                                @foreach($products as $product)

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="single-product-wrap mb-35">
                                        <div class="product-img product-img-zoom mb-15">
                                            <a href="{{url('/singleproduct/'.$product->id)}}">
                                                <img src="{{asset('user/images/fans/'.$product->photo)}}" alt="">
                                            </a>
                                            <div class="product-action-2 tooltip-style-2">
                                                <button title="Wishlist"><i class="icon-heart"></i></button>
                                                <button onclick="showDetails(this)" id="{{$product->id}}" data-id="{{$product->id}}" data-name="{{$product->name}}" data-price="{{$product->price}}" data-photo="{{$product->photo}}" data-color="{{$product->color}}" data-brand="{{$product->brand}}" data-category="{{$category[$product->categoryID -1]->name}}" title="Quick View" data-toggle="modal" data-target="#exampleModal" class="btnQuickView"><i class="icon-size-fullscreen icons"></i></button>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 text-center">

                                            <h3><a href="{{url('/singleproduct/'.$product->id)}}">{{$product->name}}</a></h3>
                                            <div class="product-price-2">
                                                <span>${{$product->price}}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap-2 product-content-position text-center">

                                            <h3><a href="{{url('/singleproduct/'.$product->id)}}">{{$product->name}}</a></h3>
                                            <div class="product-price-2">
                                                <span>${{$product->price}}</span>
                                            </div>
                                            <div class="pro-add-to-cart">
                                                <button title="Add to Cart">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <!-- <div class="pro-pagination-style text-center mt-10">
                        <ul>
                            <li><a class="prev" href="#"><i class="icon-arrow-left"></i></a></li>
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a class="next" href="#"><i class="icon-arrow-right"></i></a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-wrapper-mrg-right">
                    <div class="sidebar-widget mb-40">
                        <h4 class="sidebar-widget-title">Search </h4>
                        <div class="sidebar-search">
                            <div class="sidebar-search-form">
                                <input id="textboxName" type="text" placeholder="Search here...">
                                <button>
                                    <i class="icon-magnifier"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-35 pt-40">
                        <h4 class="sidebar-widget-title">Category</h4>
                        <div class="shop-catigory">
                            <ul>
                                <li class="category-item" data-categoryid="all">all</li>
                                @foreach($category as $categoryitem)

                                <li class="category-item" data-categoryid="{{$categoryitem->id}}">{{$categoryitem->name}}</li>
                                @endforeach


                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <h4 class="sidebar-widget-title">Price Filter </h4>
                        <div class="price-filter">

                            <div class="price-slider-amount">
                                <div class="label-input">
                                    Min :
                                    <input type="number" id="min" name="minprice" placeholder="Add Your Min Price" />
                                </div>
                                <div class="label-input">
                                    Max :
                                    <input type="number" id="max" name="maxprice" placeholder="Add Your Max Price" />
                                </div>
                                <button id="btn-filter-price" type="button">Filter</button>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget shop-sidebar-border mb-40 pt-40">
                        <!-- <h4 class="sidebar-widget-title">Color</h4> -->
                        <div class="sidebar-widget-list">
                            <!-- <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul> -->
                            <button id="btn-clear-filter" type="button">Clear All Filter</button>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    const loadview = (data) => {


        if (data.products.length > 0) {

            var n = data.products.length;
            var s = '';
            for (var i = 0; i < n; i++) {
                s += `
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                   <div class="single-product-wrap mb-35">
                                       <div class="product-img product-img-zoom mb-15">
                                           <a href="{{url('/singleproduct/${data.products[i].id}')}}">
                                               <img src="{{asset('user/images/fans/${data.products[i].photo}')}}" alt="">
                                           </a>
                                           <div class="product-action-2 tooltip-style-2">
                                               <button title="Wishlist"><i class="icon-heart"></i></button>
                                               <button title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                           </div>
                                       </div>
                                       <div class="product-content-wrap-2 text-center">
                                         
                                           <h3><a href="{{url('/singleproduct/${data.products[i].id}')}}">${data.products[i].name}</a></h3>
                                           <div class="product-price-2">
                                               <span>${data.products[i].price}</span>
                                           </div>
                                       </div>
                                       <div class="product-content-wrap-2 product-content-position text-center">
                                        
                                           <h3><a href="{{url('/singleproduct/${data.products[i].id}')}}">${data.products[i].name}</a></h3>
                                           <div class="product-price-2">
                                               <span>${data.products[i].price}</span>
                                           </div>
                                           <div class="pro-add-to-cart">
                                               <button title="Add to Cart">Add To Cart</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           `
            }
            $('#productcontent').html(s);
        }

    }
    $(document).ready(function() {

        $('#textboxName').keyup(function() {
            var query = $(this).val();



            $.ajax({
                type: 'GET',
                url: "{{url('/filter/getsearchajax')}}",
                data: {
                    query
                },
                success: function(data) {
                    loadview(data);
                }
            });

        });

        $('.category-item').click(function() {

            var categoryID = $(this).attr('data-categoryID');
            console.log(categoryID);
            if (categoryID !== "all") {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/filter/getcategoryajax')}}",
                    data: {
                        categoryID
                    },
                    success: function(data) {
                        loadview(data);
                    }

                });
            } else {

                $.ajax({
                    type: 'GET',
                    url: "{{url('/filter/getcategoryajax')}}",
                    data: {
                        categoryID
                    },
                    success: function(data) {
                        loadview(data);
                    }
                });
            }
        })

        $('#btn-filter-price').click(function() {
            console.log("hello")
            var max = $("#max").val();
            var min = $("#min").val();

            $.ajax({
                type: 'GET',
                url: "{{url('/filter/getpriceajax')}}",
                data: {
                    max,
                    min
                },
                success: function(data) {
                    loadview(data);
                }
            });


        })
        $('#btn-clear-filter').click(function() {
            $.ajax({
                type: 'GET',
                url: "{{url('/filter/clearfilterajax')}}",
                data: {

                },
                success: function(data) {
                    $('#textboxName').val(" ");
                    var max = $("#max").val(" ");
                    var min = $("#min").val(" ");
                    loadview(data);
                }
            });
        })



    });
</script>