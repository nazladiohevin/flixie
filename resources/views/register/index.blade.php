<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Akun Flixie</title>

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
  <!-- Modal Register -->
  <div id="register-modal" class="h-screen flex justify-center items-center">
    <div class="relative p-4 w-full max-w-md max-h-full box-content">
      <div class="relative rounded-2xl p-4 transition-all duration-1000 ease-in-out shadow bg-dark-blue-900">
        <!-- Modal header -->
        <div class="flex flex-col items-center justify-between gap-y-2 p-4 md:p-5 rounded-t">
          <div><a href="{{ route("home") }}"><img src="{{ asset('images/flixie-logo.png') }}" class="w-[84px]" alt="Flixie Logo "></a></div>
          <h5 class="text-h5 font-bold text-white">Daftar Akun Flixie</h5>
          @error ("password")
            <div id="alert-border-2"
              class="w-full flex items-center rounded-lg p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50"
              role="alert">
              <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <div class="ms-3 text-sm font-medium">
                {{ $message }}
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
          @enderror
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
          <form class="space-y-4" action="/register" method="POST">
            @csrf
            <div class="block inputGroups">
              <label for="email" class="block mb-2 text-bnormal font-medium text-white">Email</label>
              <input type="email" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="example@gmail.com" required autocomplete="email" value="{{ old("email") }}" />
            </div>
            <div class="block inputGroups">
              <label for="username" class="block mb-2 text-bnormal font-medium text-white">Username</label>
              <input type="text" name="username" id="username"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="myusername" required autocomplete="off" value="{{ old("username") }}" />
            </div>
            <div class="block inputGroups">
              <label for="name" class="block mb-2 text-bnormal font-medium text-white">Nama Lengkap</label>
              <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Sun Jinwoo" required autocomplete="off" value="{{ old("name") }}" />
            </div>
            <div class="hidden inputGroups">
              <label for="password" class="block mb-2 text-bnormal font-medium text-white">Password</label>
              <input type="password" name="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 required autocomplete="off" />
            </div>
            <div class="hidden inputGroups">
              <label for="confirmPassword" class="block mb-2 text-bnormal font-medium text-white">Konfirmasi
                Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 required autocomplete="off" />
            </div>


            <div class="flex justify-between">
              <ul id="bullets" class="flex gap-x-1 items-end">
                <li>
                  <div class="size-3 rounded-full bg-white transition-all duration-300 ease-out"></div>
                </li>
                <li>
                  <div class="size-3 rounded-full border border-white transition-all duration-300 ease-out"></div>
                </li>
              </ul>
              <div class="flex gap-x-3">
                <a id="btnNext"
                  class="flex text-black bg-neon-300 hover:bg-neon-400 hover:scale-105 transition-all ease-in font-bold rounded-lg text-bnormal px-4 py-2 text-center cursor-pointer">
                  <span>Next</span>
                  <svg class="size-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m9 5 7 7-7 7" />
                  </svg>
                </a>
                <a id="btnBack"
                  class="hidden text-black bg-neon-300 hover:bg-neon-400 hover:scale-105 transition-all ease-in font-bold rounded-lg text-bnormal px-4 py-2 text-center cursor-pointer">
                  <svg class="inline-block size-6 text-gray-800" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m15 19-7-7 7-7" />
                  </svg>
                  <span>Back</span>
                </a>
                <button id="btnRegister" type="submit"
                  class="hidden text-black font-bold bg-lagoon-500 hover:bg-lagoon-400 hover:scale-105 transition-all ease-in rounded-lg text-bnormal px-4 py-2 text-center">
                  Daftar
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
    integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

  <!-- Global Client JS -->
  <script src="{{ asset('js/data.js') }}"></script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>
