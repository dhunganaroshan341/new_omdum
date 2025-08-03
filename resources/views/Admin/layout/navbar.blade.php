   <!-- partial:partials/_navbar.html -->
   <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
       <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
           <div class="me-3">
               <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                   <span class="icon-menu"></span>
               </button>
           </div>
           <div>
               <a class="navbar-brand brand-logo" href="{{ url('/') }}">
                   <img src="{{ $logo ?? asset('assets/images/logo.jpeg') }}" alt="logo" />
               </a>
               <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
                   <img src="{{ asset('admin/images/logo.png') }}" alt="logo" />
               </a>
           </div>
       </div>
   </nav>
   <!-- partial -->
