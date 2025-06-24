<section class="banner overflow-hidden position-relative" style="height: 100vh;">
    <div class="video-container position-relative" style="padding-top: 56.25%;">
        <!-- Placeholder before video loads -->
        <div id="videoPlaceholder"
            style="background-image:url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
            background-size: cover; background-position: center; position: absolute; top: 0; left: 0;
            width: 100%; height: 100%; z-index: 2;">
        </div>

        <!-- YouTube API will load video here -->
        <div id="ytVideo" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></div>
    </div>

    <!-- Overlay -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index: 3;">
    </div>

    <!-- Content -->
    <div class="swiper-content2 container position-absolute top-50 start-50 translate-middle text-center text-white"
        style="z-index: 4;">
        <h1 class="white mb-2">Your Gateway to Himalayan Adventure!</h1>
        <p class="white mb-4">Explore breathtaking landscapes, rich cultures, and unforgettable journeys — all in one
            place</p>
        <a href="#" class="per-btn">
            <span class="white">Book Now</span>
            <i class="fa fa-arrow-right white"></i>
        </a>
    </div>
</section>
@push('scripts')
    <script>
        // Load the YouTube IFrame API
        var tag = document.createElement('script');
        console.log('Appending YouTube API...');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

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
