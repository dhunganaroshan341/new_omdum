<section class="position-relative overflow-hidden w-100" style="height: 90vh;">
    <!-- Placeholder Image -->
    <div id="videoPlaceholder" class="position-absolute top-0 start-0 w-100 h-100"
        style="
      background-image: url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
      background-size: cover;
      background-position: center;
      z-index: 2;
      transition: opacity 1s ease;
    ">
    </div>

    <!-- Responsive YouTube Iframe wrapper -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 1;">
        <iframe id="videoIframe"
            src="https://www.youtube.com/embed/8efveLZ3E24?autoplay=1&mute=1&loop=1&playlist=8efveLZ3E24&controls=0&modestbranding=1&rel=0"
            title="YouTube video player" allow="autoplay; encrypted-media; picture-in-picture" allowfullscreen
            loading="lazy" referrerpolicy="strict-origin-when-cross-origin"
            style="
        position: absolute;
        top: 50%;
        left: 50%;
        width: 177.77vh;  /* 100vh * (16/9) to maintain 16:9 ratio */
        height: 100vh;
        transform: translate(-50%, -50%);
        border: none;
      "></iframe>
    </div>
</section>

@push('scripts')
    <script>
        const iframe = document.getElementById('videoIframe');
        const placeholder = document.getElementById('videoPlaceholder');

        iframe.addEventListener('load', () => {
            // Delay a bit to let autoplay kick in smoothly
            setTimeout(() => {
                placeholder.style.opacity = '0';
                // After fade-out transition ends, hide placeholder completely
                setTimeout(() => {
                    placeholder.style.display = 'none';
                }, 1000);
            }, 1000);
        });
    </script>
@endpush
