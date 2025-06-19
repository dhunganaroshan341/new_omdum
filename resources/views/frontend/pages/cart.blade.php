@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">My Cart</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">My Cart</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- cart -->
<section class="cart-main pb-6" id="cart-main">
<div class="container">
<div class="cart-inner">
<div class="cart-table-list mb-4">
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table bg-white">
<thead>
<tr>
<th>S.N</th>
<th class="product-name">Product</th>
<th class="product-name">Name</th>
<th class="product-price">Price</th>
<th class="product-quantity">Quantity</th>
<th class="product-total">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>01</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop1.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Men's Black Suit</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>15.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>15.00</span>
</td>
</tr>
<tr>
<td><strong>02</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop3.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Ladies Lather Bag</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>35.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>35.00</span>
</td>
</tr>
<tr>
<td><strong>03</strong></td>
<td>
<img alt="" class="w-25" src="{{ asset('template/yatri_world/main-file/images/shop/shop2.jpg') }}"/>
</td>
<td class="cart_item">
<span class="product-name"><strong>Men's Casio XII Watch</strong></span>
</td>
<td><span class="rt-Price-amount"><span>$</span>20.00</span></td>
<td>
<span class="quantity-buttons">
<input class="quantity-input" max="50" min="1" name="quantity" placeholder="No." type="number"/>
</span>
</td>
<td class="cart-subtotal">
<span class="rt-Price-amount"><span>$</span>20.00</span>
</td>
</tr>
<tr>
<td>
<a class="nir-btn" href="#">Continue</a>
</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
<a class="nir-btn-black" href="#">Update</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="checkout-order">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="coupon">
<h4 class="mb-1">Coupon Code</h4>
<label>Enter your coupon code if you have one:</label>
<input class="input-text mb-2" id="coupon_code" name="coupon_code" placeholder="Coupon code" type="text" value=""/>
<a class="nir-btn-black me-2" href="#">Apply Coupon</a>
<a class="nir-btn" href="#">Update cart</a>
</div>
</div>
<div class="col-lg-8 mb-4">
<h4 class="white">Cart Totals</h4>
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table bg-white">
<thead>
<tr>
<th class="product-total">Net Total</th>
<th class="product-name"></th>
</tr>
</thead>
<tfoot>
<tr class="cart-subtotal">
<th>Subtotal</th>
<td><span class="rt-Price-amount"><span>$</span>35.00</span>
</td>
</tr>
<tr class="rt-shipping-totals shipping">
<th>Shipping</th>
<td data-title="Shipping">
<input class="me-1" type="radio"/><label class="me-2 mb-0">Flat Rate: <span>£</span>12.00</label>
<input class="me-1" type="radio"/><label class="me-2 mb-0">Free Shipping</label>
<input class="me-1" type="radio"/><label class="mb-0">Local Delivery</label>
</td>
</tr>
<tr class="order-total">
<th>Total</th>
<td><strong><span class="rt-Price-amount"><span>$</span>35.00</span></strong> </td>
</tr>
</tfoot>
</table>
<div class="checkout-place-order mt-2">
<p class="">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.
                                    </p>
<a class="nir-btn mt-1" href="checkout.html">Proceed to Checkout</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- End Cart -->
@endsection
