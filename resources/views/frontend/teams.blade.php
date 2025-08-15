@extends('frontend.layout.main')

@section('content')
    @php
        $maintitle = 'Our Team';
        $page = 'team';
    @endphp
    <x-bread-crumb :main-title="$maintitle" :pageName="$page" />

    <section class="our-team py-6">
        <div class="container">
            <div class="container">
                <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
                    <h2 class="m-0">
                        {{ $teamPageContent->content_heading ?? 'Meet our' }}
                        <span>{{ $teamPageContent->content_subheading ?? 'Team' }}</span>
                    </h2>
                    <p class="mb-0">
                        {{ $teamPageContent->content ??
                            'At Ommundum Travels, our team is passionate about creating unforgettable journeys.
                                                                                                                                                                                                                                                        Every trip is carefully planned with your comfort, adventure, and memories in mind.
                                                                                                                                                                                                                                                        With expertise, dedication, and a love for exploring, we bring the world closer to you,
                                                                                                                                                                                                                                                        one destination at a time.' }}
                    </p>
                </div>

                <div class="row text-center">
                    @foreach ($teamMembers as $member)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="team-member bg-white p-3 shadow-sm rounded">
                                <img src="{{ $member->image_url }}" alt="{{ $member->name }}"
                                    class="img-fluid rounded-circle mb-3">
                                <h5 class="mb-1">{{ $member->name }}</h5>
                                <p class="text-muted mb-2">{{ $member->position }}</p>
                                <div>
                                    @if ($member->facebook)
                                        <a href="{{ $member->facebook }}" class="me-2"><i
                                                class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if ($member->twitter)
                                        <a href="{{ $member->twitter }}" class="me-2"><i class="fab fa-twitter"></i></a>
                                    @endif
                                    @if ($member->instagram)
                                        <a href="{{ $member->linkedin }}"><i class="fab fa-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination links -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $teamMembers->links() }}
                </div>
            </div>
    </section>
@endsection
@push('styles')
    <style>
        .page-link {
            color: var(--omundum-green);
        }

        /* .page-link:hover {
                color: var(--);
            } */
    </style>
@endpush
