@extends('frontend.layout.main')

@section('content')
<!-- error section starts -->
<section class="error overflow-hidden h-100">
<div class="container">
<div class="error-content text-center">
<h3>Oops! Page not found</h3>
<img alt="" class="mb-4" src="images/404.svg"/>
<h2 class="mb-0 navy">we are sorry, but the page you requested was not found</h2>
<div class="newsletter-form w-75 mx-auto mt-3">
<form>
<input placeholder="Search" type="text"/>
<input class="nir-btn bordernone" type="submit" value="Search"/>
</form>
</div>
<div class="error-btn mt-4">
<a class="nir-btn me-2" href="#">GO TO HOMEPAGE</a>
</div>
</div>
</div>
</section>
<!-- error section Ends -->
@endsection
