@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main pt-0" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Flight Booking</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Flight Booking</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- blog starts -->
<section class="blog trending destination-b pb-6">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-8 mb-4">
<div class="payment-book">
<div class="description flight-book mb-4">
<div class="detail-title"><h3>YOUR PERSONAL INFORMATION</h3></div>
<div class="description-content">
<form>
<div class="form-group mb-3">
<label>Name:</label>
<input class="form-control" id="fName" placeholder="Enter full name" type="text"/>
</div>
<div class="form-group mb-3">
<label>Email:</label>
<input class="form-control" id="email1" placeholder="abc@xyz.com" type="text"/>
</div>
<div class="form-group col-left-padding mb-3">
<label>Phone Number:</label>
<input class="form-control" id="phnumber1" placeholder="XXXX-XXXXXX" type="text"/>
</div>
<div class="form-group mb-3">
<label>Arrival Date:</label>
<input class="form-control" id="arrival-date" type="text"/>
</div>
<div class="form-group col-left-padding mb-3">
<label>Departure Date:</label>
<input class="form-control" id="departure-date" type="text"/>
</div>
<div class="form-group mb-3">
<label>Name:</label>
<input class="form-control" id="date1" placeholder="Select Date" type="text"/>
</div>
<div class="form-group col-left-padding mb-3">
<label>No of Tickets:</label>
<input class="form-control" id="ticketno" placeholder="Select a number" type="number"/>
</div>
<div class="form-group mb-3">
<label>Gender:</label>
<select class="niceSelect">
<option value="male">Male</option>
<option value="female">Female</option>
<option value="other">Other</option>
</select>
</div>
<div class="form-group col-left-padding mb-3">
<label>Nationality:</label>
<select class="niceSelect">
<option value="american">American</option>
<option value="opel">Malaysian</option>
<option value="audi">German</option>
</select>
</div>
<div class="form-group textarea mb-3">
<label>Message:</label>
<textarea placeholder="Enter a message"></textarea>
</div>
<div>
<div class="pretty p-default p-thick p-pulse mb-2 me-0 d-flex align-items-center">
<input type="checkbox"/>
<div class="state p-warning-o">
<label> I want to receive <a href="#">Let’s Travel</a> promotional offers in the future terms and conditions.</label>
</div>
</div>
</div>
</form>
</div>
</div>
<div class="description flight-book mb-4">
<div class="detail-title"><h3>YOUR CARD INFORMATION</h3></div>
<div class="description-content">
<form>
<div class="form-group mb-3">
<label>Name:</label>
<input class="form-control" id="Name" placeholder="Enter fname in card" type="text"/>
</div>
<div class="form-group mb-3">
<label>Card Number:</label>
<input class="form-control" id="email" placeholder="Enter Card Number" type="text"/>
</div>
<div class="form-group mb-3">
<label>Booking ID:</label>
<input class="form-control" id="phnumber" placeholder="XXXXX" type="text"/>
</div>
<div class="form-group mb-3">
<label>Expiry Date:</label>
<input class="form-control" id="expiredate" type="text"/>
</div>
<div class="form-group mb-3">
<label>Card Type:</label>
<select>
<option value="male">MasterCard</option>
<option value="female">Paypal</option>
<option value="other">Visa</option>
<option value="other">Discover</option>
</select>
</div>
<div class="pretty p-default p-thick p-pulse mb-3 me-0 d-flex align-items-center">
<input type="checkbox"/>
<div class="state p-warning-o">
<label> I agree to the <a href="#">terms and conditions.</a></label>
</div>
</div>
</form>
</div>
</div>
<div class="comment-btn">
<a class="nir-btn" href="#">Confirm Booking</a>
</div>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="sidebar-sticky">
<div class="sidebar-item mb-4">
<div class="trend-item mb-0">
<div class="trend-image">
<img alt="image" src="{{ asset('template/yatri_world/main-file/images/flights/flight1.jpg') }}"/>
<div class="trend-tags">
<a href="#"><i class="flaticon-like"></i></a>
</div>
</div>
<div class="trend-content-main">
<div class="trend-content">
<h4 class="mb-0 p-0 bordernone"><a class="" href="#" tabindex="0">Singapore Airlines</a></h4>
<span>United Kingdom</span>
</div>
</div>
</div>
</div>
<div class="list-sidebar">
<div class="sidebar-item">
<h3>Booking Detail</h3>
<ul class="list-unstyled font-size-1 mb-0 font-size-16">
<li class="d-flex justify-content-between py-1 border-b">
<span class="font-weight-medium">Date <br/> 22/09/2019, 00:00 AM <br/> 23/09/2019, 00:00 AM</span>
<span class="text-secondary"><a class="text-underline" href="#">Edit</a></span>
</li>
<li class="d-flex justify-content-between py-1 border-b">
<span class="font-weight-medium">Car type</span>
<span class="text-secondary">Hatchbacks</span>
</li>
<li class="d-flex justify-content-between py-1 border-b">
<span class="font-weight-medium">Pick Up From</span>
<span class="text-secondary">Los Angeles</span>
</li>
<li class="d-flex justify-content-between py-1 border-b">
<span class="font-weight-medium">Drop Off To</span>
<span class="text-secondary">California</span>
</li>
<li class="d-flex justify-content-between py-1">
<span class="font-weight-medium">Est. Distance</span>
<span class="text-secondary">50 kilometer</span>
</li>
</ul>
</div>
<div class="sidebar-item">
<h3>Payment</h3>
<table>
<tbody>
<tr>
<td> Price</td>
<td class="pink">$580.00</td>
</tr>
<tr>
<td>Number of Travellers</td>
<td class="pink">1</td>
</tr>
<tr>
<td>Infant Price</td>
<td class="pink">$0.00</td>
</tr>
<tr>
<td>Subtotal</td>
<td class="pink">$580.00</td>
</tr>
<tr>
<td>Total</td>
<td class="pink">$580.00</td>
</tr>
<tr>
<td>Tax &amp; fee</td>
<td class="pink">0</td>
</tr>
</tbody>
<tfoot class="bg-pink">
<tr>
<th class="font-weight-bold white">Amount</th>
<th class="font-weight-bold white">$580.00</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- blog Ends -->
@endsection
