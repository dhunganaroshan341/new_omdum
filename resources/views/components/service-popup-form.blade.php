{{-- @push('styles')


  <style>
    body {
      padding: 2rem;
      background-color: #f8f9fa;
    }
    .modal-content {
      border-radius: 1rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .btn-custom {
      background-color: var(--realm-blue);
      color: #fff;
      border-radius: 0.5rem;
    }
    .btn-custom:hover {
      background-color: #0056b3;
      color:var(--realm-yellow);
    }

  </style>
@endpush --}}

  <!-- Trigger Button -->
  <button type="button" class="btn btn-primary" id="openFormBtn"><i class="fas fa-phone"></i> Query Now</button>

  <!-- Modal -->
  <div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="contactFormLabel">Contact Us For {{ $serviceDetail->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="popupForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea id="message" class="form-control" rows="3" required></textarea>
            </div>

            <input type="hidden" name="service_id" value="{{ $serviceDetail->id ?? '' }}">
          </div>
          <div class="modal-footer border-0">
            <button type="submit" class="btn btn-custom">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @push('scripts')



  <script>
    $(document).ready(function () {
      $('#openFormBtn').click(function () {
        $('#contactFormModal').modal('show');
      });

      $('#popupForm').on('submit', function (e) {
        e.preventDefault();
        alert('Form submitted successfully!');
        $('#contactFormModal').modal('hide');
        this.reset();
      });
    });
  </script>
  @endpush
