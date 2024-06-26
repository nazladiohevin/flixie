<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link rel="icon" href="{{ asset('flixie-logo.ico') }}" />
  <!-- Inter Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />

  <!-- Slick Carousel -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark-blue-1000">
  <!-- Modal Login -->
  <div class="h-screen transition-all duration-1000 flex justify-center px-6 py-20 items-center min-h-screen">
    <div class="relative p-4 w-full max-w-md max-h-full box-content">
      <div class="relative rounded-2xl p-4 shadow bg-dark-blue-900">
        <!-- Modal header -->
        <div class="flex flex-col items-center justify-between gap-y-2 p-4 md:p-5 rounded-t">
          <div><img src="{{ asset('images/flixie-logo.png') }}" class="w-[84px]" alt="Flixie Logo "></div>
          <h5 class="text-h5 font-bold text-white">Halo Flixier</h5>
        </div>

        {{-- Alert --}}
        @if (session()->has('loginError'))
          <div id="alert-border-2"
            class="flex items-center rounded-lg p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div class="ms-3 text-sm font-medium">
              {{ session('loginError') }}
            </div>
            <button type="button"
              class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8"
              data-dismiss-target="#alert-border-2" aria-label="Close">
              <span class="sr-only">Dismiss</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
            </button>
          </div>
        @endif

        <!-- Modal body -->
        <div class="p-4 md:p-5">
          <form class="space-y-4" action="/login" method="POST">
            @csrf
            <div>
              <label for="email-login" class="block mb-2 text-bnormal font-medium text-white">Email</label>
              <input type="email" name="email" id="email-login"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="example@gmail.com" autocomplete="email" value="{{ old('email') }}" />
              @error('email')
                <div class="text-red-400 text-sm">{{ $message }}</div>
              @enderror
            </div>
            <div>
              <label for="password-login" class="block mb-2 text-bnormal font-medium text-white">Password</label>
              <input type="password" name="password" id="password-login"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
            </div>
            <div class="flex justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-lagoon-500 rounded bg-dark-blue-1000 focus:ring-2 focus:ring-lagoon-600 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600" />
                </div>
                <label for="remember" class="ms-2 text-bsm font-medium text-white">Ingat saya</label>
              </div>
              <a href="#" class="text-bsm font-semibold text-white hover:underline underline-offset-3">Lupa
                Password?</a>
            </div>
            <button type="submit"
              class="w-full text-black bg-neon-300 hover:bg-neon-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 hover:scale-105">Masuk
              ke akunmu</button>
            <div class="text-sm font-light text-white">
              Tidak punya akun? <span id="linkedRegister" class="cursor-pointer font-medium hover:underline"><a
                  href="{{ route('register') }}">Daftar sekarang</a></span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
