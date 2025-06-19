@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Shop Detail 1</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Shop Detail 1</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- top places starts -->
<section class="shop-main pb-6">
<div class="container">
<div class="shop-detail">
<div class="row gx-lg-5 d-md-flex align-items-center">
<div class="col-lg-6">
<div class="thumbnail-images">
<div class="slider-store">
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination7.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
</div>
</div>
<div class="slider-thumbs">
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination6.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination7.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination3.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination5.jpg') }}"/>
</div>
<div>
<img alt="1" src="{{ asset('template/yatri_world/main-file/images/destination/destination4.jpg') }}"/>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="blog-content p-0">
<h3 class="mb-1"><a class="" href="#">Empire Prestige Causeway Bay</a></h3>
<div class="rating-comment d-flex align-items-center mb-1">
<div class="rating me-2">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="yellow">5 Reviews</span>
</div>
<div class="listing-price mb-1">$290.00 <span class="regular-price">$390.00</span></div>
<p class="mb-2">Twisted Toppings is a savory dish of Italian origin, consisting of a usually round, Savory dish of Italian origin, consisting of a usually round <br/><br/> Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. </p>
<ul class="productlist mb-2">
<li>Vestibulum neque fermentum</li>
<li>Abitur parturient praesent ipsu</li>
<li>Minceptos pri 187cm/3’1.3″ tall</li>
<li>Diam parturient dictumst nibh mu</li>
</ul>
<form action="_self" class="cart mb-2 d-flex align-items-center pt-2 pb-2" method="post">
<div class="quantity-buttons d-flex align-items-center">
<label class="screen-reader-text me-2 mb-0"><strong>Quantity:</strong></label>
<input class="quantity-input" max="100" min="1" name="quantity" placeholder="No." type="number"/>
</div>
<div class="shop-btn ms-2 me-2"><a class="nir-btn" href="cart.html">Add To Cart</a></div>
<div class="product-stock">
<p class="mb-0"><strong>Availability :</strong> <span class="pink">IN STOCK</span></p>
</div>
</form>
<div class="wishcomp-btn">
<a class="d-block pb-2 mb-2 border-b" href="wishlist.html"><i class="fa fa-heart"></i> Add to wishlist</a>
<a class="d-block pb-2 mb-2 border-b" href="#"><i class="fa fa-exchange-alt"></i> Compare</a>
</div>
<div class="product_meta">
<div class="font-weight-bold mb-1">SKU: 
                                    <span class="font-weight-normal">woo-sunglasses</span>
</div>
<div class="mb-1">
<span class="font-weight-bold">Category:</span> <a href="#" rel="tag">Accessories</a>
</div>
<div>
<span class="font-weight-bold">Tags:</span> <a href="#" rel="tag">bizbergthemes</a>, <a href="#" rel="tag">chair</a>, <a href="#" rel="tag">cninfotech</a>, <a href="#" rel="tag">cyclone</a>, <a href="#" rel="tag">man</a>, <a href="#" rel="tag">shirt</a>, <a href="#" rel="tag">table</a>, <a href="#" rel="tag">woman</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-4" id="store-tab-main">
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#1">Description</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#2">Additional Information</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#3">Review</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane show fade active" id="1">
<p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
<ul class="product-tab-list">
<li>Perfect unique design</li>
<li>Fully responsive</li>
<li>Amazing parallax effects</li>
<li>SEO friendly</li>
<li>Well organized and valid code</li>
<li>Google fonts</li>
<li>WPML ready</li>
</ul>
</div>
<div class="tab-pane fade" id="2">
<table class="woocommerce-product-attributes shop_attributes">
<tbody>
<tr>
<th>Color</th>
<td>Blue, Gray</td>
</tr>
<tr>
<th>Size</th>
<td>Large, Medium, Small</td>
</tr>
</tbody>
</table>
</div>
<div class="tab-pane fade" id="3">
<!-- blog comment list -->
<div class="single-comments single-box mb-4">
<h4 class="mb-4">Showing 16 verified guest comments</h4>
<div class="comment-box">
<div class="comment-image mt-2">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/>
</div>
<div class="comment-content w-100">
<h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">"The worst hotel ever"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV.</p>
<div class="comment-like">
<div class="like-title float-left">
<a class="nir-btn me-2" href="#">Reply</a>
</div>
</div>
</div>
</div>
<div class="comment-box">
<div class="comment-image mt-2">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/>
</div>
<div class="comment-content w-100">
<h4 class="mb-1">Burson Lesson</h4>
<p class="comment-date">April 25, 2019 at 10:46 am</p>
<div class="comment-rate">
<div class="rating mar-right-15">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
<span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
</div>
<p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV</p>
<div class="comment-like">
<div class="like-title float-left">
<a class="nir-btn" href="#">Reply</a>
</div>
</div>
</div>
</div>
</div>
<!-- blog review -->
<div class="single-add-review">
<h4 class="">Write a Review</h4>
<form>
<div class="row gy-4">
<div class="col-md-6">
<div class="form-group">
<input placeholder="Name" type="text"/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input placeholder="Email" type="email"/>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea>Comment</textarea>
</div>
</div>
<div class="col-md-6">
<div class="form-btn">
<a class="nir-btn" href="#">Submit Review</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- top cats ends -->
<!--  Dishes starts -->
<section class="blog trending destination-b pt-0 pb-6">
<div class="container">
<div class="section-title text-center mb-5 pb-2">
<h2 class="m-0">Related <span>Products</span></h2>
</div>
<div class="shop-slider">
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop1.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Trekking Wood Sticks</a></h4>
<p class="price pink mb-1 font-weight-bold">$350.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop2.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Adventure X Bag</a></h4>
<p class="price pink mb-1 font-weight-bold">$250.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop3.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Fashion Trek Shoes</a></h4>
<p class="price pink mb-1 font-weight-bold">$420.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop4.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Nylon Trek Rope</a></h4>
<p class="price pink mb-1 font-weight-bold">$99.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
<div class="trend-item mx-3">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/shop/shop6.jpg') }}"/>
</div>
<div class="trend-content-main">
<div class="trend-content text-center">
<div class="rating-main pb-1">
<div class="rating">
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
</div>
</div>
<h4 class="bordernone p-0 mb-1"><a href="#">Gadget Tools</a></h4>
<p class="price pink mb-1 font-weight-bold">$56.00</p>
<div class="cart-btn">
<a class="nir-btn-black" href="#"><i class="icon-basket-loaded me-2"></i>Add To Cart</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Dishes ends -->
@endsection
