<!-- Modal -->
<div class="modal fade" id="popupNoticeModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 p-0 position-relative overflow-hidden">

            <!-- Close button -->
            <div class="popup-button-container">
                <button type="button" class="btn-close position-absolute top-2 end-2 m-3" data-bs-dismiss="modal"
                    aria-label="Close"
                    style="></button>
           </div>

            <!-- Image with overlay title -->
            <a href="{{ $popupNotice->url }}">
                    <img src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}" alt="Popup Image"
                        class="w-100 d-block">
                    <div class="popup-text-container" style="">
                        {{ $popupNotice->title }}
                    </div>
                    </a>

            </div>
        </div>
    </div>
    @push('styles')
        <style>
            .popup-text-container {
                position: absolute;
                bottom: 0px;
                /* left: 30px; */
                color: white;
                /* font-weight: 700; */
                font-size: 1.20rem;
                /* text-shadow: 2px 2px 6px rgba(0,0,0,0.7); */
                z-index: 1050;
                center: 0;
                background: rgba(97, 180, 136, 0.63);
                padding: 7px;
            }

            .popup-button-container button {
                color: var(--omundumgreen);
                opacity: 1;
                z-index: 1051;

            }

            .popup-button-container {
                color: var(--omundumgreen);
                opacity: 1;
                z-index: 1051;
                border-radius: 50%;
                background: rgba(97, 180, 136, 0.34);
                color: white;
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
