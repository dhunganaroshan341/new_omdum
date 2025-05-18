@php
    dd(get_tailwind_data());
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title }} | {{ $content_title ?? 'Home' }}</title>
    <link rel="icon" href="{{ asset('storage/'. $logo) }}" type="image/x-icon" sizes="16x16 32x32 64x64" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- Tailwind CSS (via Vite) -->
    @vite('resources/css/app.css')
    @stack('styles')

    <!-- Optional JS Libs (load only if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
</head>

<body class="font-['Roboto'] text-gray-800 bg-white">
    @include('frontend.layout.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('frontend.layout.footer')

    <!-- Custom Scripts -->
    @vite('resources/js/app.js')
    @stack('scripts')
</body>
</html>
