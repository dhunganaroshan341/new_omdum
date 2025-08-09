<button type="button" class="btn nir-btn mb-2" id="openFormBtn"><i class="fas fa-phone"></i> Query Now</button>
<!-- Modal -->
<div class="modal fade" id="popupNoticeModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="contactFormLabel">{{ $popupNotice->title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card text-white bg-primary">
                {{-- <img class="card-img-top" src="{{ $popupNotice->image_url }}" alt=""> --}}

                <a href="{{ $popupNotice->url }}">
                    <img class="card-img-top" src="{{ asset('/template/yatri_world/main-file/images/india.jpg') }}"
                        alt="">
                </a>
                <div class="card-body">
                    <h4 class="card-title">{{ $popupNotice->title }}</h4>
                    <p class="card-text">{{ $popupNotice->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#openFormBtn').click(function() {
                $('#popupNoticeModal').modal('show');
            });
            $('.btn-close').click(function() {
                $('#popupNoticeModal').modal('hide');
            });

        });
    </script>
@endpush
