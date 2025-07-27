<div style="position: relative; width: 100%; max-width: 1920px; aspect-ratio: 16 / 9; overflow: hidden;">
    <div style="width: 100%; max-width: 800px; height: 450px; position: relative; overflow: hidden;">
        <iframe
            src="https://www.youtube.com/embed/-451q_49OnY?autoplay=1&mute=1&loop=1&playlist=-451q_49OnY&controls=0&modestbranding=1&rel=0&disablekb=1&fs=0"
            style="width: 100%; height: 100%; border: none; position: absolute; top: 0; left: 0; pointer-events: none;"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen title="YouTube video player" frameborder="0">
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

            /* Responsive container */
            div[style*="position: relative"] {
                max-width: 100vw;
                /* full viewport width */
                height: auto;
            }

            /* Optional: Make sure body and html don't add unwanted margin or overflow */
            html,
            body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
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
