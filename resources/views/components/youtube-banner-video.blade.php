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
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow: hidden;
            position: relative;
        }

        @media (max-width: 768px) {
            .youtube-banner {
                height: 25vh;
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



            .book-now-button span {
                font-size: 0.7rem;
            }

            .book-now-button span i {
                font-size: 0.7rem;
            }

            /* book-now button/ per-btn  same*/
            .per-btn {
                position: relative;
                margin: auto;
                padding: 9px 11px;
                transition: all 0.2s ease;
                bottom: 20px;
            }
        }

        .video-container {
            padding-top: 56.25%;
            /* 16:9 ratio */
        }
    </style>
@endpush
