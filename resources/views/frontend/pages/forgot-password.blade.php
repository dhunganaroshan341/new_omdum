@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Forgot Password</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">Forgot Password</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- Forgot Password -->
<div class="forgot-password pb-10 pt-10">
<div class="container">
<div class="fp-content w-50 mx-auto text-center">
<h4 class="">Please provide your email address. <br/>Click in the provided link to retrieve you account.</h4>
<form>
<div class="form-group mb-0">
<input class="form-control" id="Name" placeholder="Enter your valid email address" required="" type="email"/>
<button class="nir-btn mt-2">Reset Password</button>
</div>
</form>
</div>
</div>
</div>
<!-- Forgot Password Ends -->
@endsection
