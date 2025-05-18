@extends('frontend-tailwind.layout.main')

@push('styles')
  {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <style>
    ::-webkit-scrollbar { display: none; }
    @media (max-width: 767px) {
      aside { position: static !important; height: auto !important; }
    }
  </style>
@endpush
@section('content')
<div class="flex flex-col md:flex-row-reverse">
  <!-- Sidebar: Clients -->
  <aside class="md:w-1/4 w-full text-white border-l border-blue-600 px-6 py-8 sticky top-[4rem] h-screen md:h-[calc(100vh-4rem)] overflow-y-auto hidden md:block rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6  bg-realm-blue-dark border-2 rounded-lg px-3">Clients</h2>
    <ul class="space-y-4">
      @foreach ($clientsWithAlbums as $clientId => $clientAlbums)
        <li>
          <button
            class="w-full text-left flex items-center py-3 px-5 bg-realm-blue-light hover:border-2 hover:border-solid hover:bg-white rounded-lg text-realm-yellow-dark hover:text-dark font-semibold transition duration-300 ease-in-out transform hover:scale-105"
            onclick="showClientAlbums({{ $clientId }})">
            <span class="mr-3">
              <!-- Optional: You can use Font Awesome or any other icon library -->
              <i class="fas fa-user"></i>
            </span>
            {{ optional($clientAlbums->first()->client)->name ?? 'Unknown Client' }}
          </button>
        </li>
      @endforeach
    </ul>
  </aside>

 <!-- Main Content -->
<main class="md:w-3/4 px-4 py-6" id="mainContent">
    <h2 class="text-2xl font-bold text-realm-blue mb-4">Realm Albums</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
      @foreach ($albumsWithNoClients as $album)
        <div
          class="group bg-white rounded-2xl p-4 border border-transparent transition-all duration-300 cursor-pointer hover:shadow-2xl hover:ring-4 hover:ring-realm-blue hover:border-realm-blue"
          onclick="loadAlbumDetails({{ $album->id }}, '{{ $album->title }}')"
        >
          @if ($album->galleryMedia->first())
            <div class="overflow-hidden rounded-xl">
              <img
                src="/{{ $album->galleryMedia->first()->media_path }}"
                class="w-full h-40 object-cover transform transition-transform duration-300 ease-in-out group-hover:scale-105"
              />
            </div>
          @else
            <div class="w-full h-40 bg-gray-200 flex items-center justify-center text-gray-500 rounded-xl">
              No Image
            </div>
          @endif
          <h3 class="text-lg font-semibold text-blue-800 mt-3 transition-colors duration-300 group-hover:text-realm-blue">
            {{ $album->title }}
          </h3>
        </div>
      @endforeach
    </div>
  </main>

</div>
@endsection



@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
function showClientAlbums(id) {
  const mainContent = $('#mainContent');
  mainContent.empty();  // Clear existing content

  $.ajax({
    url: `/gallery-album/client/${id}`,  // Fetch albums by client ID
    method: "GET",
    success: function(response) {
      if (!response.success) return alert('No albums found for this client.');

      const clientAlbums = response.message;
      let content = `
        <h2 class="text-2xl font-bold text-realm-blue mb-4">${response.message[0]?.client?.name || 'Unknown Client'} Albums</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      `;

      clientAlbums.forEach(album => {
        // Check if gallery_media is defined and has content
        const galleryMedia = album.gallery_media || [];

        content += `
  <div class="bg-white rounded-2xl p-4 hover:shadow-xl transition cursor-pointer" onclick="loadAlbumDetails(${album.id}, '${album.title}')">
    ${galleryMedia.length > 0 ? `
      <img src="/${galleryMedia[0].media_path}" class="rounded-xl w-full h-48 object-cover mb-4" />
    ` : `
      <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Media Available</div>
    `}
    <h3 class="text-lg font-semibold text-blue-800">${album.title}</h3>
  </div>
`;
        });

      content += '</div>';

      mainContent.html(content);
    },
    error: function() {
      alert('Failed to load client albums.');
    }
  });
}

function loadAlbumDetails(albumId, albumTitle) {
  $.ajax({
    url: `/gallery-album/${albumId}`,
    method: "GET",
    success: function(response) {
      if (!response.success) return alert('Album not found.');

      const album = response.message;
      let content = `
        <h2 class="text-2xl font-bold text-blue-700 mb-4">${album.title}</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      `;

      const galleryMedia = album.gallery_media || [];
      if (galleryMedia.length > 0) {
        galleryMedia.forEach(media => {
          content += `
            <a href="/${media.media_path}" data-fancybox="${album.title}">
              <img src="/${media.media_path}" class="rounded-xl w-full h-48 object-cover" />
            </a>
          `;
        });
      } else {
        content += `
          <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">No Media Available</div>
        `;
      }

      content += '</div>';
      $('#mainContent').html(content);

      Fancybox.bind("[data-fancybox]", { Carousel: { infinite: true } });
    },
    error: function() {
      alert('Failed to load album images.');
    }
  });
}

</script>
@endpush
