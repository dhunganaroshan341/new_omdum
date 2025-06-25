<section class="youtube-banner position-relative overflow-hidden">
    <div class="video-container position-relative">
        <!-- 🖼️ Placeholder Image -->
        <div id="videoPlaceholder"
            style="background-image:url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
            background-size: cover; background-position: center; position: absolute; top: 0; left: 0;
            width: 100%; height: 100%; z-index: 2;">
        </div>

        <!-- 📺 YouTube Video Container -->
        <div id="ytVideo" class="position-absolute top-0 start-0 w-100 h-100"></div>
    </div>

    <!-- 🔳 Overlay -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index: 3;">
    </div>

    <!-- 📝 Text Content -->
    <div class="swiper-content2 container position-absolute top-50 start-50 translate-middle text-center text-white"
        style="z-index: 4;">
        <h1 class="white mb-2 fs-2 fs-md-1 banner-title">Your Gateway to Himalayan Adventure!</h1>
        <p class="white mb-4 banner-subtext">Explore breathtaking landscapes, rich cultures, and unforgettable journeys
            — all in one
            place</p>
        <a href="#" class="per-btn book-now-button">
            <span class="white">Book Now</span>
            <i class="fa fa-arrow-right white"></i>
        </a>
    </div>
</section>
@push('scripts')
    <script>
        let tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        document.body.appendChild(tag);

        let player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('ytVideo', {
                videoId: '79bPSuxTZ9s',
                playerVars: {
                    autoplay: 1,
                    mute: 1,
                    controls: 0,
                    loop: 1,
                    playlist: '79bPSuxTZ9s',
                    modestbranding: 1,
                    rel: 0,
                    showinfo: 0
                },
                events: {
                    onReady: function(event) {
                        event.target.playVideo();
                    },
                    onStateChange: function(event) {
                        if (event.data === YT.PlayerState.PLAYING) {
                            const placeholder = document.getElementById('videoPlaceholder');
                            if (placeholder) {
                                placeholder.style.display = 'none';
                            }
                        }
                    }
                }
            });
        }
    </script>
@endpush
@push('styles')
    <style>
        .youtube-banner {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        /* Make the video container fixed, full screen */
        .youtube-banner .video-container {
            position: fixed !important;
            /* override if needed */
            top: 0;
            left: 0;
            width: 100vw !important;
            height: 100vh !important;
            padding-top: 0 !important;
            /* remove padding-top ratio for fixed */
            z-index: -1;
        }

        /* Ensure the iframe or video inside covers whole container */
        .youtube-banner #ytVideo,
        .youtube-banner #videoPlaceholder {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Overlay fixed above video */
        .youtube-banner .overlay {
            position: fixed !important;
            top: 0;
            left: 0;
            width: 100vw !important;
            height: 100vh !important;
            background: rgba(0, 0, 0, 0.4);
            z-index: 0;
        }

        /* Text content positioned relative, vertically centered inside the banner */
        .youtube-banner .swiper-content2 {
            position: relative !important;
            z-index: 1 !important;
            top: 50vh;
            transform: translateY(-50%);
            text-align: center;
            color: white;
            padding: 0 20px;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .youtube-banner {
                height: 25vh;
            }

            .youtube-banner .video-container {
                position: fixed !important;
                height: 25vh !important;
            }

            .youtube-banner .overlay {
                height: 25vh !important;
            }

            .youtube-banner .swiper-content2 {
                top: 12.5vh;
                transform: translateY(-50%);
                padding: 0 10px;
            }

            .swiper-content2 h1 {
                font-size: 1.5rem;
            }

            .swiper-content2 p {
                font-size: 1rem;
            }

            .banner-title {
                font-size: 1.2rem !important;
                font-weight: 700;
                padding-top: 4%;
            }

            .banner-subtext {
                font-size: 0.7rem !important;
                margin: 0;
                padding: 0;
            }

            .book-now-button span,
            .book-now-button span i,
            .per-btn {
                font-size: 0.7rem !important;
                padding: 9px 11px !important;
                bottom: 20px !important;
                margin: auto !important;
                position: relative !important;
            }
        }
    </style>
@endpush
