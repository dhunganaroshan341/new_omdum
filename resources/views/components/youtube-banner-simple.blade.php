<iframe id="videoIframe" width="1920px" height="680px"
    src="https://www.youtube.com/embed/-451q_49OnY?autoplay=1&mute=1&loop=1&playlist=-451q_49OnY&controls=0&modestbranding=1&rel=0&disablekb=1&fs=0"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
</iframe>
@push('styles')
    <style>
        /* Make iframe unclickable */
        #videoIframe {
            pointer-events: none;
        }
    </style>
@endpush
