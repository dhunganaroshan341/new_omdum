<!-- Modal -->
<div class="modal fade" id="popupNoticeModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 p-0 position-relative overflow-hidden">

            <!-- Close button container -->
            <div class="button-container rounded-circle position-absolute top-2 end-2 m-3" style="z-index: 1051;">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"
                    style="width: 32px; height: 32px; border: none; padding: 0; cursor: pointer;">
                </button>
            </div>

            <!-- Image with overlay title -->
            <a href="{{ $popupNotice->url }}" class="position-relative d-block">
                <img src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}" alt="Popup Image"
                    class="w-100 d-block">
                <div class="overlay-text-container">
                    {{ $popupNotice->title }}
                </div>
            </a>

        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Close button container base style */
        .button-container {
            background: var(--omundum-green);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
            box-shadow: none !important;
        }

        /* Hover and active state for close button container */
        .button-container:hover,
        .button-container:active {
            background: var(--omundum-orange);
        }

        /* Use Bootstrap's white close icon */
        .btn-close-white {
            filter: brightness(0) invert(1);
            /* ensure white cross */
        }

        /* Overlay text container base style */
        .overlay-text-container {
            max-width: 80%;
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(97, 180, 136, 0.68);
            color: white;
            font-weight: 400;
            font-size: 1rem;
            padding: 5px 10px;
            border-radius: 4px;
            z-index: 1050;
            transition: background-color 0.3s ease;
        }

        /* Overlay text container hover effect */
        a.position-relative:hover .overlay-text-container {
            background: var(--omundum-orange);
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#popupNoticeModal').modal('show');
        });
    </script>
@endpush
