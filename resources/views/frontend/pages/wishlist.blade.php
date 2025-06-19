@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">My Wishlist</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">My Wishlist</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- cart -->
<div class="cart-main pt-10 pb-10" id="cart-main">
<div class="container">
<div class="cart-inner">
<div class="cart-table-list">
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table bg-white">
<thead>
<tr>
<th>S.N</th>
<th class="product-name">Product</th>
<th class="product-name">Item</th>
<th class="product-price">Price</th>
<th class="product-quantity">Quantity</th>
<th class="product-total">Total</th>
<th class="product-price">Edit</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>01</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop2.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Adventure X Bag</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>250.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>250.00</span>
</td>
<td class="wish-edit d-flex">
<a href="#"><i class="fa fa-edit pe-2"></i></a>
<a href="#"><i class="fa fa-trash-alt"></i></a>
</td>
</tr>
<tr>
<td><strong>02</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop1.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Trekking Wood Sticks</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>350.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>350.00</span>
</td>
<td class="wish-edit d-flex">
<a href="#"><i class="fa fa-edit pe-2"></i></a>
<a href="#"><i class="fa fa-trash-alt"></i></a>
</td>
</tr>
<tr>
<td><strong>03</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop3.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Fashion Trek Shoes</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>80.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>80.00</span>
</td>
<td class="wish-edit d-flex">
<a href="#"><i class="fa fa-edit pe-2"></i></a>
<a href="#"><i class="fa fa-trash-alt"></i></a>
</td>
</tr>
<tr>
<td><strong>04</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop4.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Nylon Trek Rope</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>120.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>120.00</span>
</td>
<td class="wish-edit d-flex">
<a href="#"><i class="fa fa-edit pe-2"></i></a>
<a href="#"><i class="fa fa-trash-alt"></i></a>
</td>
</tr>
<tr>
<td><strong>05</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop5.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Kingcamp Tents</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>900.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>900.00</span>
</td>
<td class="wish-edit d-flex">
<a href="#"><i class="fa fa-edit pe-2"></i></a>
<a href="#"><i class="fa fa-trash-alt"></i></a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- End Cart -->
@endsection
