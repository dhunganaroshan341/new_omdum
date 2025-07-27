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

<script>
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const placeholder = document.getElementById('videoPlaceholder');
            if (placeholder) {
                placeholder.style.transition = 'opacity 0.5s ease';
                placeholder.style.opacity = '0';
                setTimeout(() => placeholder.style.display = 'none', 500);
            }
        }, 2000);
    });
</script>
