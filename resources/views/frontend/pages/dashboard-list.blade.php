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
<li class="active"><a href="#"><i class="sl sl-icon-layers"></i> Listing</a></li>
<li><a href="#"><i class="fa fa-list-ul me-2"></i>Booking History</a></li>
<li><a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="dashboard-list-box with-icons">
<div class="dashboard-title">
<h4 class="mb-0">Listing All</h4>
<p class="mb-0">Airtport Hotels The Right Way To Start A Short Break Holiday</p>
</div>
<div class="table-responsive table-desi">
<table class="basic-table table table-hover">
<thead>
<tr>
<th>User</th>
<th>Listing</th>
<th>Phone</th>
<th>Email</th>
<th>Country</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/></span>
</td>
<td><a href="#"><span>Domestic Help Services</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/></span>
</td>
<td><a href="#"><span>Home Appliances Repair &amp; Services</span></a>
</td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/3.jpg') }}"/></span>
</td>
<td><a href="#"><span>Packers and Movers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/4.jpg') }}"/></span>
</td>
<td><a href="#"><span>Security System Dealers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/5.jpg') }}"/></span>
</td>
<td><a href="#"><span>Skin Care &amp; Treatment</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/></span>
</td>
<td><a href="#"><span>Domestic Help Services</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/></span>
</td>
<td><a href="#"><span>Home Appliances Repair &amp; Services</span></a>
</td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/3.jpg') }}"/></span>
</td>
<td><a href="#"><span>Packers and Movers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/4.jpg') }}"/></span>
</td>
<td><a href="#"><span>Security System Dealers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/5.jpg') }}"/></span>
</td>
<td><a href="#"><span>Skin Care &amp; Treatment</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/1.jpg') }}"/></span>
</td>
<td><a href="#"><span>Domestic Help Services</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/2.jpg') }}"/></span>
</td>
<td><a href="#"><span>Home Appliances Repair &amp; Services</span></a>
</td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/3.jpg') }}"/></span>
</td>
<td><a href="#"><span>Packers and Movers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/4.jpg') }}"/></span>
</td>
<td><a href="#"><span>Security System Dealers</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
<tr>
<td><span class="list-img"><img alt="" class="w-50" src="{{ asset('template/yatri_world/main-file/images/reviewer/5.jpg') }}"/></span>
</td>
<td><a href="#"><span>Skin Care &amp; Treatment</span></a></td>
<td>+01 3214 6522</td>
<td>chadengle@dummy.com</td>
<td>Australia</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-eye text-primary"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-pencil-square-o text-success"></i></a>
</td>
<td>
<a href="#"><i aria-hidden="true" class="fa fa-trash-alt text-danger"></i></a>
</td>
</tr>
</tbody>
</table>
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
