<!-- Modal -->
<div class="modal fade" id="popupNoticeModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 p-0 position-relative overflow-hidden">

            <!-- Close button -->
            <button type="button" class="btn-close position-absolute top-2 end-2 m-3" data-bs-dismiss="modal"
                aria-label="Close" style="color: var(--omundumgreen); opacity: 1; z-index: 1051;"></button>

            <!-- Image with overlay title -->
            <a href="{{ $popupNotice->url }}">
                <img src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}" alt="Popup Image"
                    class="w-100 d-block">
                <div
                    style="position: absolute; bottom: 15px; left: 15px; color: white; font-weight: 700; font-size: 1.75rem; text-shadow: 2px 2px 6px rgba(0,0,0,0.7); z-index: 1050;">
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
