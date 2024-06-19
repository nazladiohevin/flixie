<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('tab-title')</title>

  <link rel="icon" href="{{ asset('flixie-logo.ico') }}" />
  <!-- Inter Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <!-- Slick Carousel -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <style>
    #containerCards .slick-current {
      transform: scale(1.1);
    }

    #containerCards .slick-list {
      padding: 45px 60px !important;
    }

    #containerCards .slick-slide {
      margin: 0 1.7rem !important;
    }

    .slick-slide {
      margin: 0 1rem !important;
    }
  </style>
</head>

<body class="bg-dark-blue-1000 font-inter !overflow-auto">
  @include('partials.navbar')
  @include('partials.modal')

  @yield('content')

  @include('partials.footer')

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

  <!-- Slick.js -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Global Client JS -->
  <script src="{{ asset('js/data.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>

  <!-- Custom js -->
  <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>
