@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">My Checkout</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">My Checkout</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- checkout starts -->
<section class="checkout-main" id="checkout-main">
<div class="container">
<div class="checkout-inner">
<div class="coupon mb-4">
<div class="checkout-coupon bg-pink white">Have a coupon? 
                        <a aria-controls="collapseExample" aria-expanded="false" class="white" data-bs-toggle="collapse" href="#collapseExample" role="button">
                            Click here to enter your code
                         </a>
</div>
<div class="collapse" id="collapseExample">
<div class="card card-body rounded-0">
<label class="">Enter your coupon code if you have one:</label>
<input class="input-text mb-2" id="coupon_code" name="coupon_code" placeholder="Coupon code" type="text" value=""/>
<a class="nir-btn-black me-2 w-auto" href="#">Apply Coupon</a>
</div>
</div>
</div>
<div class="row gx-lg-5">
<div class="col-lg-6">
<div class="checkout-inner">
<div class="checkout-info">
<h4 class="">Billing details</h4>
<div class="checkout-billing">
<form method="post" target="_blank">
<div class="form-group mb-3">
<label class="">First Name: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="first" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Last Name: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="first" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Country: <abbr class="required" title="required">*</abbr></label>
<select class="niceSelect">
<option>Argentina</option>
<option>Bulgaria</option>
<option>Canada</option>
<option>Denmark</option>
<option>Egypt</option>
<option>Germany</option>
<option>Hungary</option>
</select>
</div>
<div class="form-group mb-3">
<label class="">City/Town: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="street" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Street Address: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="street" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Postcode / ZIP (optional):</label>
<input class="form-control" name="postcode" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Phone No.: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="phone" type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Email Address: <abbr class="required" title="required">*</abbr></label>
<input class="form-control" name="email" type="text"/>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="col-lg-6 mb-4">
<div class="checkout-order mb-4">
<h4 class="">Order</h4>
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-total">Total</th>
</tr>
</thead>
<tbody>
<tr class="cart_item">
<th class="product-name">
<strong class="product-quantity">There are many variations</strong>
</th>
<td class="product-total">
<span class="rt-Price-amount"><span>$</span>329.00</span>
</td>
</tr>
<tr>
<th>Size</th>
<td>XXL</td>
</tr>
<tr>
<th>Color</th>
<td>Blue</td>
</tr>
<tr>
<th>Delivary Cost</th>
<td>$9.00</td>
</tr>
<tr class="order-total">
<th>Order total</th>
<td><strong><span class="rt-Price-amount"><span>$</span>329.00</span></strong> </td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="checkout-order">
<h4 class="">PAYMENT METHODS</h4>
<div class="order-list">
<p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
<ul class="payment-card mb-2">
<li><a href="#"><i class="fab fa-cc-paypal"></i></a></li>
<li><a href="#"><i class="fab fa-cc-stripe"></i></a></li>
<li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
<li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
<li><a href="#"><i class="fab fa-cc-amex"></i></a></li>
</ul>
<div class="card-info">
<form action="#">
<div class="input-group d-flex align-items-center justify-content-between mb-2">
<label class="">Card Number :</label>
<input class="w-75" type="text"/>
</div>
<div class="input-group d-flex align-items-center justify-content-between mb-2">
<label class="">cvv :</label>
<input class="w-75" type="text"/>
</div>
<div class="month-year">
<div class="input-group d-flex align-items-center justify-content-between mb-2">
<label class="">Month :</label>
<input class="w-75" type="text"/>
</div>
<div class="input-group d-flex align-items-center justify-content-between mb-2">
<label class="">Year :</label>
<input class="w-75" type="text"/>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="checkout-place-order">
<p class="">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a class="" href="#">privacy policy</a>.
                    </p>
<a class="nir-btn mt-1" href="#">Place Order</a>
</div>
</div>
</div>
</section>
<!-- checkout Ends -->
@endsection
