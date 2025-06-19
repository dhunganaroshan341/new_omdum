 <div class="header_menu" id="header_menu">
     <nav class="navbar navbar-default">
         <div class="container">
             <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                     <a class="navbar-brand" href="{{ url('/') }}">
                         <img alt="image" src="{{ asset('front/images/logo.png') }}" />
                     </a>
                 </div>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav" id="responsive-menu">

                         <li><a href="{{ route('pages.about') }}">About Us</a></li>
                         <li><a href="{{ route('pages.about') }}">Services</a></li>
                         {{-- <li class="submenu dropdown">
                             <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                 data-toggle="dropdown" href="#" role="button">Pages <i aria-hidden="true"
                                     class="icon-arrow-down"></i></a>
                             <ul class="dropdown-menu">
                                 <li><a href="{{ route('pages.booking') }}">Booking</a></li>
                                 <li><a href="{{ route('pages.confirmation') }}">Confirmation</a></li>
                                 <li class="submenu dropdown">
                                     <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                         data-toggle="dropdown" href="{{ route('pages.gallery') }}"
                                         role="button">Gallery<i aria-hidden="true" class="fa fa-angle-right"></i></a>
                                     <ul class="dropdown-menu">
                                         <li><a href="{{ route('pages.gallery') }}">Gallery</a></li>
                                         <li><a href="{{ route('pages.gallery1') }}">Gallery Masonry</a></li>
                                     </ul>
                                 </li>
                                 <li class="submenu dropdown">
                                     <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                         data-toggle="dropdown" href="{{ route('pages.404-1') }}" role="button">Error<i
                                             aria-hidden="true" class="fa fa-angle-right"></i></a>
                                     <ul class="dropdown-menu">
                                         <li><a href="{{ route('pages.404-1') }}">Error Page 1</a></li>
                                         <li><a href="{{ route('pages.404-1') }}">Error Page 2</a></li>
                                     </ul>
                                 </li>


                                 <li><a href="{{ route('pages.faq') }}">Faq</a></li>
                                 <li><a href="{{ route('pages.testimonial') }}">Testimonials</a></li>
                                 <li><a href="{{ route('pages.pricing') }}">Pricing</a></li>
                             </ul>
                         </li> --}}

                         <li class="submenu dropdown">
                             <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                 data-toggle="dropdown" href="{{ route('pages.destination-full') }}"
                                 role="button">Destination <i aria-hidden="true" class="icon-arrow-down"></i></a>
                             <ul class="dropdown-menu">
                                 <li><a href="{{ route('destination.list') }}">Destination List</a></li>
                                 <li><a href="{{ route('destination.grid') }}">Destination Grid</a></li>
                                 <li><a href="{{ route('destination.full') }}">Destination Full</a></li>
                                 {{-- <li><a href="{{ route('pages.destination-left') }}">Destination Left</a></li>
<li><a href="{{ route('pages.destination-list') }}">Destination Right</a></li> --}}
                                 {{-- <li><a href="{{ route('pages.destination-masonry') }}">Destination Masonry</a></li> --}}
                                 <li class="submenu dropdown">
                                     <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle"
                                         data-toggle="dropdown" href="{{ route('pages.destination-single') }}"
                                         role="button">Destination Single<i aria-hidden="true"
                                             class="fa fa-angle-right"></i></a>
                                     <ul class="dropdown-menu">
                                         <li><a href="{{ route('destination.single') }}">Destination Single
                                                 1</a></li>
                                         {{-- <li><a href="{{ route('pages.destination-single1') }}">Destination Single 2</a></li>
<li><a href="{{ route('pages.destination-single-full') }}">Destination Single Full</a> --}}
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     </li>
                     <li class="submenu dropdown">
                         <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown"
                             href="{{ route('blog.grid') }}" role="button">Blogs <i aria-hidden="true"
                                 class="icon-arrow-down"></i></a>
                         <ul class="dropdown-menu">
                             {{-- <li><a href="{{ route('pages.blog-list') }}">Blog List</a></li> --}}
                             <li><a href="{{ route('blog.grid') }}">Blog Grid</a></li>
                             {{-- <li><a href="{{ route('pages.blog-full') }}">Blog Fullwidth</a></li>
<li><a href="{{ route('pages.blog-left') }}">Blog Left</a></li>
<li><a href="{{ route('pages.blog-list') }}">Blog Right</a></li>
<li><a href="{{ route('pages.blog-masonry') }}">Blog Masonry</a></li> --}}
                             <li><a href="{{ route('pages.blog-single') }}">Blog Single</a></li>
                             <li><a href="{{ route('blog.single') }}">Blog Single Full</a></li>
                         </ul>
                     </li>

                     <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                     </ul>
                     <div class="header-sidemenu">
                         {{-- <div class="mhead">
                             <span class="menu-ham">
                                 <a class="cart-icon d-flex align-items-center ms-1" href="#"><i
                                         class="icon-basket-loaded"></i><span class="cart-label">3</span></a>
                             </span>
                         </div> --}}
                     </div>
                 </div><!-- /.navbar-collapse -->

                 <div id="slicknav-mobile"></div>
             </div>
         </div><!-- /.container-fluid -->
     </nav>
 </div>
