@extends('frontend.layout.main')

@section('content')
<!-- BreadCrumb Starts -->
<div class="breadcrumb-main pt-9 pb-7" style="background-image: url(images/bg/bg8.jpg);">
<div class="dot-overlay"></div>
</div>
<!-- BreadCrumb Ends -->
<!-- Dashboard -->
<div class="pt-10 pb-10" id="dashboard">
<div class="container">
<div class="dashboard-main">
<div class="row gx-lg-5">
<div class="col-lg-3">
<div class="dashboard-sidebar">
<div class="profile-sec">
<div class="author-news mb-3">
<div class="author-news-content text-center p-3">
<div class="author-thumb mt-0">
<img alt="author" src="{{ asset('template/yatri_world/main-file/images/team/img1.jpg') }}"/>
</div>
<div class="author-content pt-2 p-0">
<h3 class="mb-1 white"><a class="white" href="#">Ketty Nelson</a></h3>
<p class="detail"><i class="fa fa-map-marker"></i> 264, Carson Street USA, KY 40539</p>
<p class="detail"><i class="fa fa-phone"></i> <a class="white" href="tel:+4585479851">+45 8547 9851</a></p>
<div class="header-social mt-2">
<ul>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="dot-overlay"></div>
</div>
</div>
<!-- Responsive Navigation Trigger -->
<a class="dashboard-responsive-nav-trigger" href="#"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
<div class="dashboard-nav">
<div class="dashboard-nav-inner">
<ul>
<li><a href="#"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
<li><a href="#"><i class="sl sl-icon-user"></i> Profile</a></li>
<li><a href="#"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
<li><a href="#"><i class="sl sl-icon-star"></i> Reviews</a></li>
<li><a href="#"><i class="sl sl-icon-plus"></i> Add listing</a></li>
<li><a href="#"><i class="sl sl-icon-layers"></i> Listing</a></li>
<li class="active"><a href="#"><i class="fa fa-list-ul me-2"></i>Booking History</a></li>
<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="dashboard-content">
<div class="dashboard-list-box">
<div class="table-box">
<table class="basic-table history-table">
<thead>
<tr>
<th>#ID</th>
<th>Title</th>
<th>Order Date</th>
<th>Execution Time</th>
<th>Cost</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td><span class="text-success">Pending</span></td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton1" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton4" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton5" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton6" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton7" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>359645</td>
<td>Park Avenue Baker Street London</td>
<td>Jul 7 2019</td>
<td>Jul 7 2019 - Aug 25 2019</td>
<td>$558.00</td>
<td>Pending</td>
<td>
<div class="dropdown">
<button aria-expanded="false" aria-haspopup="true" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton8" type="button">
<span class="fa fa-plus"></span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Send Email</a>
<a class="dropdown-item" href="#">Print PDF</a>
<a class="dropdown-item del" href="#">Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Content / End -->
</div>
</div>
<!-- Dashboard / End -->
@endsection
