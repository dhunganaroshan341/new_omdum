<div id="team-section" class="container py-5">


    <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1"> {{ $title ?? 'Our Team' }}</h2>

    <div class="row g-4 justify-content-center">
        @foreach ($members as $member)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="team-img-wrapper">
                        <img class="card-img-top" style="height: 256px; object-fit: cover;" src="{{ $member->image ?? 'https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/ft12.svg' }}" alt="{{ $member->full_name }}">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title fw-semibold">{{ $member->full_name }}</h5>
                        <p class="card-text text-muted">{{ $member->position }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Bootstrap Pagination -->
    <div class="d-flex justify-content-center mt-4 ">
        {{ $members->withQueryString()->fragment('team-section')->links('pagination::bootstrap-4') }}
    </div>
</div>


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.location.hash === '#team-section') {
            const el = document.getElementById('team-section');
            if (el) {
                el.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
</script>
@endpush
