@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<section class="breadcrumb-main" style="background-image: url(images/bg/bg8.jpg);">
<div class="breadcrumb-outer pt-10 pb-4">
<div class="container">
<div class="breadcrumb-content d-md-flex align-items-center pt-10">
<h2 class="mb-0">Login</h2>
<nav aria-label="breadcrumb">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li aria-current="page" class="breadcrumb-item active">My Login</li>
</ul>
</nav>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<!-- login Starts -->
<section class="login">
<div class="container">
<div class="row gx-lg-5">
<div class="col-lg-6 d-flex">
<div class="login-content border p-4">
<h4 class="">Hello! Sign into your account</h4>
<form>
<div class="form-group mb-3">
<label class="">Email Address/Username</label>
<input type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Password</label>
<input type="password"/>
</div>
<div class="form-group form-checkbox text-center mb-1">
<input class="" type="checkbox"/> Remember Me
                                | <a class="yellow" href="#">Forgot password?</a>
</div>
</form>
<div class="login-social mb-2 text-center">
<p class=""><strong>- or -</strong></p>
<a class="btn-facebook" href="#"><i aria-hidden="true" class="fab fa-facebook"></i> Facebook</a>
<a class="btn-twitter" href="#"><i aria-hidden="true" class="fab fa-twitter"></i> Twitter</a>
</div>
<div class="form-btn text-center">
<a class="nir-btn mb-2" href="#">LOGIN</a>
<p class="">Need an Account? Create your Yatriiworld account</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="login-content border p-4">
<h4 class="">Create a Yatriiworld Account</h4>
<form>
<div class="form-group mb-3">
<label class="">Username</label>
<input type="text"/>
</div>
<div class="form-group mb-3">
<label class="">Email Address</label>
<input type="email"/>
</div>
<div class="form-group mb-3">
<label class="">Password</label>
<input type="password"/>
</div>
<div class="form-group mb-3">
<label class="">Confirm Password</label>
<input type="password"/>
</div>
</form>
<div class="login-social text-center mb-2">
<p class=""><strong>- or -</strong></p>
<a class="btn-facebook" href="#"><i aria-hidden="true" class="fab fa-facebook"></i> Facebook</a>
<a class="btn-twitter" href="#"><i aria-hidden="true" class="fab fa-twitter"></i> Twitter</a>
</div>
<div class="form-btn text-center">
<a class="nir-btn" href="#">SIGN UP</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Login Ends -->
@endsection
