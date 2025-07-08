<section class="position-relative overflow-hidden" style="height: 500px;">
    <!-- Placeholder Image -->
    <div id="videoPlaceholder" class="w-100 h-100 position-absolute top-0 start-0"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
               background-size: cover;
               background-position: center;
               z-index: 2;">
    </div>

    <!-- Responsive YouTube Iframe -->
    <div class="ratio ratio-16x9 h-100">
        <iframe id="videoIframe" src="https://www.youtube.com/embed/8efveLZ3E24?si=DS9SWNbs79Gt2e9r&autoplay=1&mute=1"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy">
        </iframe>
    </div>
</section>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const iframe = document.getElementById("videoIframe");
            const placeholder = document.getElementById("videoPlaceholder");

            iframe.addEventListener("load", function() {
                // Fade out or hide placeholder once iframe is ready
                placeholder.style.opacity = "0";
                setTimeout(() => {
                    placeholder.style.display = "none";
                }, 500); // Allow fade-out transition
            });
        });
    </script>
@endpush
@push('styles')
    <style>
        #videoPlaceholder {
            transition: opacity 0.5s ease;
        }
    </style>
@endpush
