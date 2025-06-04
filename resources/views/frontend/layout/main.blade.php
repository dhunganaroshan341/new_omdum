<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | {{ $content_title ?? 'Home' }}</title>
    <link rel="icon" href="{{ asset('storage/' . $logo) }}" type="image/x-icon" sizes="16x16 32x32 64x64">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('mdn/css/mdb.min.css') }}" />
    {{-- @vite('resources/css/app.css') --}}
    <style>
        .btn-primary {
            background-color: var(--realm-blue);
            color: var(--realm-yellow);
            /* border-color: #007bff; */
        }

        .btn-primary:hover {
            background-color: var(--realm-blue-light);
            color: var(--realm-yellow);
            /* border-color: #0056b3; */
        }

        .dropdown-item .active {
            color: var(--realm-blue);
            background-color: var(--realm-yellow);
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: var(--realm-yellow);
            background-color: var(--realm-blue);
            /* background: var(--realm-yellow); */
        }

        /* gallery */
        .card-img-top:hover {
            transform: scale(1.01);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: scale(1.04);
            transition: transform 0.4s ease;
            cursor: pointer;
        }
    </style>
    @stack('styles')


</head>

<body>
    @include('frontend.layout.header')
    {{-- Breadcrumb Section --}}

    <main>
        @yield('content')
    </main>
    @include('frontend.layout.footer')
</body>
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('mdn/js/mdb.umd.min.js') }}"></script>
@stack('scripts')

</html>
