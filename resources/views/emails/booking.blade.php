<h2>New Package Booking</h2>

<p><strong>Name:</strong> {{ $booking['name'] ?? 'N/A' }}</p>
<p><strong>Email:</strong> {{ $booking['email'] ?? 'N/A' }}</p>
<p><strong>Phone:</strong> {{ $booking['phone'] ?? 'N/A' }}</p>
<p><strong>Country:</strong> {{ $booking['country'] ?? 'N/A' }}</p>

<p><strong>Adults:</strong> {{ $booking['adult'] ?? 0 }}</p>
<p><strong>Children:</strong> {{ $booking['children'] ?? 0 }}</p>
<p><strong>Total People:</strong> {{ $booking['total_people'] ?? 0 }}</p>

<p><strong>Booking Type:</strong> {{ ucfirst($booking['booking_type']) ?? 'N/A' }}</p>
@if ($booking['booking_type'] == 'custom')
    <p><strong>Custom Date:</strong> {{ $booking['custom_date'] ?? 'N/A' }}</p>
@endif

<p><strong>Price:</strong> {{ $booking['price'] ?? 0 }}</p>
<p><strong>Message:</strong> {{ $booking['message'] ?? 'N/A' }}</p>
