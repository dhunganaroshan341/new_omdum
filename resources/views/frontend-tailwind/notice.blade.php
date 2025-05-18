@if ($notice && $notice != null)
<!-- Modal -->
<div class="fixed inset-0 flex items-center justify-center z-50 bg-gray-800 bg-opacity-50" id="staticBackdrop" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="bg-white rounded-lg max-w-4xl w-full p-6">
    <div class="flex justify-between items-center">
      <h5 class="text-xl font-semibold text-gray-900" id="staticBackdropLabel">Notice</h5>
      <button type="button" class="text-gray-500 hover:text-gray-700" data-bs-dismiss="modal" aria-label="Close">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <div class="mt-4">
      <div class="bg-gray-100 rounded-lg overflow-hidden">
        <img src="{{ asset('storage/' . $notice->image) }}" class="w-full h-auto object-cover" alt="Notice Image">
        <div class="p-4">
          <h5 class="text-2xl font-semibold text-gray-900">{{ $notice->title }}</h5>
          <p class="mt-2 text-gray-700 leading-relaxed">{!! $notice->description !!}</p>
        </div>
      </div>
    </div>

    <div class="mt-4 flex justify-end">
      <button type="button" class="px-6 py-2 text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500" data-bs-dismiss="modal">
        Close
      </button>
    </div>
  </div>
</div>
@endif
