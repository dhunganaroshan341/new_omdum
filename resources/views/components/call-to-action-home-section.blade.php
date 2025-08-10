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
                        <a href="{{ $callToAction->button_url ?? route('frontend.booking-single') }}"
                            class="nir-btn">{{ $callToAction->button_text ?? 'Book Now' }} <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="video-button">
                        <img src="{{ $callToAction->image_url ?? asset('template/yatri_world/main-file/images/tibet.jpg') }}"
                            alt="">

                        <div class="call-button text-center">
                            <button type="button" class="play-btn custom-js-video-button"
                                data-video-id="{{ $callToAction->iframe ?? 'gCRNEJxDJKM?si=V1p-5lDXyEl1H_25' }}"
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
    <div class="dot-overlay" style="background: #162241 url({{ asset('images/dot-overlay.png') }}) repeat;">
    </div>
</section>
<!-- call to action Ends -->

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.custom-js-video-button').forEach(button => {
                button.addEventListener('click', function() {
                    let videoId = this.getAttribute('data-video-id');
                    // Strip out query params if present, e.g. '?si=V1p-5lDXyEl1H_25'
                    if (videoId.includes('?')) {
                        videoId = videoId.split('?')[0];
                    }
                    const channel = this.getAttribute('data-channel');
                    let videoUrl = '';

                    if (channel === 'youtube') {
                        // Embed URL with parameters to hide controls, branding, related videos, etc.
                        videoUrl =
                            `https://www.youtube.com/embed/${videoId}?autoplay=1&controls=0&modestbranding=1&rel=0&fs=0&iv_load_policy=3`;
                    } else {
                        alert('Video channel not supported');
                        return;
                    }

                    // Create modal container
                    const modal = document.createElement('div');
                    modal.style.position = 'fixed';
                    modal.style.top = '10%';
                    modal.style.left = '30%';
                    modal.style.width = '801px';
                    modal.style.height = '450px';
                    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
                    // modal.style.display = 'flex';
                    // modal.style.justifyContent = 'center';
                    // modal.style.alignItems = 'center';
                    modal.style.zIndex = 10000;

                    // Insert iframe and close button inside modal
                    modal.innerHTML = `
                    <iframe width="80%" height="80%" src="${videoUrl}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <button style="position:absolute;top:20px;right:30px;font-size:30px;color:white;background:none;border:none;cursor:pointer;">&times;</button>
                `;

                    document.body.appendChild(modal);

                    // Close modal on button click
                    modal.querySelector('button').addEventListener('click', () => {
                        document.body.removeChild(modal);
                    });
                });
            });
        });
    </script>
@endpush
