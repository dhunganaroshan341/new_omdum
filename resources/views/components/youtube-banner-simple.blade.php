<section class="position-relative overflow-hidden w-100" style="height: 90vh;">
    <!-- Placeholder Image -->
    <div id="videoPlaceholder" class="position-absolute top-0 start-0 w-100 h-100"
        style="background-image: url('{{ asset('template/yatri_world/main-file/images/everest.jpg') }}');
                background-size: cover;
                background-position: center;
                z-index: 2;">
    </div>

    <!-- Responsive YouTube Iframe -->
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <iframe id="videoIframe" class="w-100 h-100 border-0"
            src="https://www.youtube.com/embed/8efveLZ3E24?si=DS9SWNbs79Gt2e9r&autoplay=1&mute=1"
            title="YouTube video player"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
        </iframe>
    </div>
</section>
