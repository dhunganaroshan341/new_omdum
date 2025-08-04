   <!-- Call to action starts -->
   <section class="call-to-action call-to-action1 pb-6 pt-10"
       style="background-image:url({{ asset('template/yatri_world/main-file/images/everest.jpg') }})">
       <div class="call-main">
           <div class="container">
               <div class="row d-flex align-items-center justify-content-between">
                   <div class="col-lg-6 mb-4">
                       <div class="action-content">
                           <h3 class="white mb-0 text-uppercase">
                               {{ $callToAction->sub_heading ?? 'Find next place to visit' }}</h3>
                           <h2 class="white call-name">{{ $callToAction->title ?? 'EXPLORE THE WORLD' }}</h2>
                           <p class="white mb-4">{!! $callToAction->description ??
                               'There are many variations of passages of. Lorem Ipsum available, but
                                                                                                                                                                                                                                                       the majority have suffered alteration in some form, by injected humour, or randomised
                                                                                                                                                                                                                                                       words which don’t look.' !!}</p>
                           <a href="{{ $callToAction->button_url ?? route('frontend.booking-singe') }}"
                               class="nir-btn">{{ $callToAction->button_text ?? 'Book Now' }} <i
                                   class="fa fa-arrow-right"></i></a>
                       </div>
                   </div>
                   <div class="col-lg-6 mb-4">
                       <div class="video-button">
                           <img src="{{ $callToAction->image_url ?? asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                               alt="">

                           <div class="call-button text-center">
                               <button type="button" class="play-btn js-video-button" data-video-id="Qhgvf1xF3T4"
                                   data-channel="youtube">
                                   <i class="fa fa-play"></i>
                               </button>

                           </div>
                           <div class="video-figure"></div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="dot-overlay" style = " background: #162241 url({{ asset('images/dot-overlay.png') }}) repeat;">
       </div>
   </section>
   <!-- call to action Ends -->
