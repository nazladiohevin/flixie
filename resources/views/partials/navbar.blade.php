<!-- Navbar -->
<nav class="fixed start-0 top-0 z-40 w-full bg-dark-blue-1000/40">
  <div class="flex flex-wrap items-center justify-between px-3 md:px-14 py-3">
    <!-- Flixie Logo -->
    <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('images/flixie-logo.png') }}" class="w-16" alt="Flixie Logo" />
    </a>

    <div class="flex items-center gap-x-8 lg:order-2">
      <!-- Search Input -->
      <div class="relative hidden items-center md:flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"
          class="relative left-7">
          <path fill="white"
            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0" />
        </svg>
        <input type="text" id="search-navbar"
          class="block w-full rounded-lg border-2 border-white bg-transparent p-[10px] ps-10 text-sm text-white placeholder:text-white/85 focus:border-lagoon-500 focus:ring-lagoon-500 lg:w-[300px]"
          placeholder="Cari movie & tv show kesukaanmu..." />
      </div>
      <!-- Profil Picture -->
      <div class="relative flex items-center justify-center">
        @auth
        <div data-dropdown-toggle="dropdown">
          <p class=" text-white font-semibold text-lg cursor-pointer p-2">{{ auth()->user()->name }}</p>
        </div>
        @else
        <div class="size-12 cursor-pointer rounded-full transition-all duration-200 ease-in-out hover:scale-110"
          id="btnProfile" data-dropdown-toggle="dropdown">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12">
            <path fill="white" fill-rule="evenodd"
              d="M12 4a8 8 0 0 0-6.96 11.947A4.99 4.99 0 0 1 9 14h6a4.99 4.99 0 0 1 3.96 1.947A8 8 0 0 0 12 4m7.943 14.076A9.959 9.959 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.958 9.958 0 0 0 2.057 6.076l-.005.018l.355.413A9.98 9.98 0 0 0 12 22a9.947 9.947 0 0 0 5.675-1.765a10.055 10.055 0 0 0 1.918-1.728l.355-.413zM12 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6"
              clip-rule="evenodd" />
          </svg>
        </div>              
        @endauth
        <!-- Dropdown -->
        <div id="dropdown" class="z-10 hidden bg-dark-blue-800 rounded-lg shadow overflow-hidden">
          <ul class="p-3 text-sm text-white text-center font-semibold divide-y divide-white/20"
            aria-labelledby="dropdownAuth">
            @auth
              <li>
                <form action="/logout" method="post">
                  @csrf                  
                  <button type="submit" class="block px-8 py-2 w-full rounded-lg hover:bg-dark-blue-700">Keluar</button>
                </form>
              </li>
            @else
              <li>
                <a href="{{ route('login') }}" class="block px-8 py-2 w-full rounded-lg hover:bg-dark-blue-700">Masuk</a>
              </li>
              <li>
                <a href="{{ route('register') }}"
                  class="block px-8 py-2 w-full rounded-lg hover:bg-dark-blue-700">Daftar</a>
              </li>
            @endauth

          </ul>
        </div>
      </div>
      <!-- Hamburger menu -->
      <button data-collapse-toggle="mynavbar" type="button"
        class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-white hover:bg-lagoon-600 hover:text-dark-blue-1000 focus:outline-none lg:hidden"
        aria-controls="mynavbar" aria-expanded="false">
        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
    </div>

    <!-- List Menu -->
    <div id="mynavbar" class="hidden w-full items-center justify-between lg:order-1 lg:w-auto lg:flex">
      <ul
        class="mt-4 flex flex-col rounded-lg p-4 font-bold text-white lg:mt-0 lg:flex-row lg:space-x-8 lg:p-0 rtl:space-x-reverse">
        <li>
          <a href="{{ route('home') }}" class="block rounded px-3 py-2 lg:p-0 lg:hover:text-lagoon-500">Home</a>
        </li>
        <li>
          <a href="{{ route('movies') }}" class="block rounded px-3 py-2 lg:p-0 lg:hover:text-lagoon-500">Movies</a>
        </li>
        <li>
          <a href="{{ route('tv-series') }}" class="block rounded px-3 py-2 lg:p-0 lg:hover:text-lagoon-500">TV
            Show</a>
        </li>
        <li>
          <a href="{{ route('myfilm') }}" class="block rounded px-3 py-2 lg:p-0 lg:hover:text-lagoon-500">FilmKu</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
