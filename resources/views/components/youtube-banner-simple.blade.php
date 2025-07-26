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
        <iframe width="100%" height="70vh" src="https://www.youtube.com/embed/-451q_49OnY?si=t-35xNp0s4lXS1ko"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
