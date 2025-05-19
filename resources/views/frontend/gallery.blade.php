@extends('frontend.layout.main')

@push('styles')
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Fancybox CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@section('content')
    <section class="hero-small">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url({{ $pageBanner?asset('storage/'.$pageBanner->image):asset('assets/images/banner1.jpg') }}) ;">
                    <div class="hero-small-background-overlay"></div>
                    <div class="container  h-100">
                        <div class="row align-items-center d-flex h-100">
                            <div class="col-md-12">
                                <div class="block">
                                    <span class="text-uppercase text-sm letter-spacing"></span>
                                    <h1 class="mb-3 mt-3 text-center">{{ $pageBanner?$pageBanner->title:'Gallery' }}</h1>
                                      <p class="text-center"> {!! $pageBanner->description??'' !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container-fluid py-4">
    <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-3 d-none d-md-block border-end pe-3" style="height: calc(100vh - 4rem); overflow-y: auto;">
            <h4  class="text-realm-blue mb-3">Albums</h4>
            <div class="list-group">
 <a class=" text-realm-yellow list-group-item list-group-item-action"
                            href="{{ route('gallery') }}"> Realm Albums


            </a>
            <hr>
                @foreach ($clientsWithAlbums as $clientId => $clientAlbums)

                    <button class="list-group-item list-group-item-action"
                            onclick="showClientAlbums({{ $clientId }})">
                        <i class="fas fa-user me-2"></i>
                        {{ optional($clientAlbums->first()->client)->name ?? 'Unknown Client' }}
                    </button>
                @endforeach
            </div>
        </aside>

        <!-- Main Content -->
        <main class="col-md-9" id="mainContent">
            <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1"> Realm Albums</h2>
            <div class="row g-4">
                @foreach ($albumsWithNoClients as $album)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 shadow-sm" onclick="loadAlbumDetails({{ $album->id }}, '{{ $album->title }}')">
                            @if ($album->galleryMedia->first())
                                <img src="/{{ $album->galleryMedia->first()->media_path }}" class="card-img-top" alt="...">
                            @else
                                <div class="card-img-top bg-secondary text-white d-flex align-items-center justify-content-center" style="height: 160px;">
                                    No Image
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $album->title }}</h5>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</div>
@endsection

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <script>
        function showClientAlbums(id) {
            const mainContent = $('#mainContent');
            mainContent.empty();

            $.ajax({
                url: `/gallery-album/client/${id}`,
                method: "GET",
                success: function (response) {
                    if (!response.success) return alert('No albums found for this client.');
                    const clientAlbums = response.message;

                    let content = `
                       <div class="divider mb-3"></div>
        <h2 class="title-color mb-4 h1"> ${clientAlbums[0]?.client?.name || 'Unknown Client'} Albums</h2>
                        <div class="row g-4">
                    `;

                    clientAlbums.forEach(album => {
                        const galleryMedia = album.gallery_media || [];
                        content += `
                            <div class="col-sm-6 col-md-4">
                                <div class="card h-100 shadow-sm" onclick="loadAlbumDetails(${album.id}, '${album.title}')">
                                    ${galleryMedia.length > 0 ? `
                                        <img src="/${galleryMedia[0].media_path}" class="card-img-top" />
                                    ` : `
                                        <div class="card-img-top bg-light text-muted d-flex align-items-center justify-content-center" style="height: 180px;">
                                            No Media Available
                                        </div>
                                    `}
                                    <div class="card-body">
                                        <h5 class="card-title">${album.title}</h5>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    content += '</div>';
                    mainContent.html(content);
                },
                error: function () {
                    alert('Failed to load client albums.');
                }
            });
        }

        function loadAlbumDetails(albumId, albumTitle) {
            $.ajax({
                url: `/gallery-album/${albumId}`,
                method: "GET",
                success: function (response) {
                    if (!response.success) return alert('Album not found.');
                    const album = response.message;
                    let content = `
                    <div class="divider mb-3"></div>

                        <h2 class="title-color mb-4 h1">${album.title}</h2>
                        <div class="row g-4">
                    `;

                    const galleryMedia = album.gallery_media || [];
                    if (galleryMedia.length > 0) {
                        galleryMedia.forEach(media => {
                            content += `
                                <div class="col-sm-6 col-md-4">
                                    <a href="/${media.media_path}" data-fancybox="${album.title}">
                                        <img src="/${media.media_path}" class="img-fluid rounded" />
                                    </a>
                                </div>
                            `;
                        });
                    } else {
                        content += `
                            <div class="col-12 text-muted text-center">No Media Available</div>
                        `;
                    }

                    content += '</div>';
                    $('#mainContent').html(content);

                    Fancybox.bind("[data-fancybox]", {
                        Carousel: {
                            infinite: true
                        }
                    });
                },
                error: function () {
                    alert('Failed to load album images.');
                }
            });
        }
    </script>
@endpush
