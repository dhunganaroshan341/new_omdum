<div style="position: relative; width: 1920px; height: 680px;">
    <iframe id="videoIframe" width="1920px" height="680px"
        src="https://www.youtube.com/embed/-451q_49OnY?autoplay=1&mute=1&loop=1&playlist=-451q_49OnY&controls=0&modestbranding=1&rel=0&disablekb=1&fs=0"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
        style="position: relative; z-index: 1; pointer-events: none;">
    </iframe>

    <div id="videoPlaceholder"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
               background-size: cover; background-position: center;
               position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 2;">
    </div>
</div>

@push('styles')
    <style>
        /* Make iframe unclickable */
        #videoIframe {
            pointer-events: none;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Wait ~2 seconds then hide placeholder div to reveal the iframe
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const placeholder = document.getElementById('videoPlaceholder');
                if (placeholder) {
                    placeholder.style.transition = 'opacity 0.5s ease';
                    placeholder.style.opacity = '0';
                    // Optional: after fade out remove from DOM
                    setTimeout(() => placeholder.style.display = 'none', 500);
                }
            }, 2000);
        });
    </script>
@endpush
