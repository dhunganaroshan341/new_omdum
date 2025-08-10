<!-- Modal -->
<div class="modal fade" id="popupNoticeModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 p-0 position-relative overflow-hidden">

            <!-- Close button -->
            <button type="button" class="btn-close position-absolute top-2 end-2 m-3 rounded-circle"
                data-bs-dismiss="modal" aria-label="Close"
                style="background: var(--omundum-green); opacity: 1; z-index: 1051; box-shadow: none; width: 32px; height: 32px;">
            </button>

            <!-- Image with overlay title -->
            <a href="{{ $popupNotice->url }}" class="position-relative d-block">
                <img src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}" alt="Popup Image"
                    class="w-100 d-block">
                <div
                    style=" width:80%; position: absolute; bottom: 15px; right: 15px; background: rgba(97, 180, 136, 0.68); color: white; font-weight: 400; font-size: 1rem; padding: 5px 10px; border-radius: 4px; z-index: 1050;">
                    {{ $popupNotice->title }}
                </div>
            </a>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#popupNoticeModal').modal('show');
        });
    </script>
@endpush
