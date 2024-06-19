@extends('layouts.main')
@section('tab-title')
  Home - Flixie
@endsection
@section('content')
  <main>
    <header>
      <div class="h-[500px] md:h-screen md:min-h-[700px] -mt-6 overflow-hidden">
        <div class="relative h-full">
          <img src="{{ asset('images/big-banner.jpg') }}" alt="Big Banner" class="w-full h-full object-cover object-top" />
          <div
            class="absolute left-0 top-0 z-10 h-full w-full bg-gradient-to-r from-dark-blue-1000 from-30% to-dark-blue-1000/0">
            <div class="h-full px-6 pt-24 shadow-white drop-shadow sm:px-[104px] sm:pt-28 md:pt-[130px]">
              <h2
                class="xl:pe-[633px] text-3xl uppercase sm:text-4xl lg:text-h2 font-bold !leading-tight text-white [text-shadow:_1px_2px_10px_rgb(255_255_255_/_35%)]">
                GUARDIAN OF THE GALAXY Vol. 2
              </h2>
              <div class="mt-7">
                <p class="text-white pr-7 md:pr-[55%] mb-5 line-clamp-2 sm:line-clamp-3">
                  Skuad Guardian disewa oleh Sovereign, ras alien, untuk mendapatkan kembali baterai mereka - tapi Rocket
                  mencurinya. Kini, mereka harus segera beraksi untuk menyelamatkan galaxy sebelum terlambat.
                </p>
                <!-- Star -->
                <div class="mb-4">
                  <div class="flex items-center gap-x-6">
                    <div class="flex items-end gap-x-3">
                      <svg
                        class="h-5 w-5 sm:h-8 sm:w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg
                        class="h-5 w-5 sm:h-8 sm:w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg
                        class="h-5 w-5 sm:h-8 sm:w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg
                        class="h-5 w-5 sm:h-8 sm:w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                      <svg class="h-5 w-5 sm:h-8 sm:w-8 text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path
                          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                      </svg>
                    </div>
                    <div class="text-[#EFF40C] font-semibold text-xl sm:text-3xl">4.0</div>
                  </div>
                </div>
                <!-- Category Badge -->
                <div class="flex flex-wrap gap-3 text-llg font-semibold text-white">
                  <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                    Adventure
                  </div>
                  <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                    Action
                  </div>
                  <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                    Comedy
                  </div>
                  <div class="rounded-[9px] bg-lagoon-700 px-2.5 py-1.5">
                    Science
                  </div>
                </div>
                <!-- Button -->
                <div class="mt-5">
                  <a href="src/views/movies-description.html"
                    class="flex w-fit items-center rounded-lg bg-lagoon-500 px-4 py-2 text-bsm md:text-bLg font-bold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">
                    <svg class="me-1 w-7 md:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="black"
                        d="M133 440a35.37 35.37 0 0 1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0 1 35.77.45l247.85 148.36a36 36 0 0 1 0 61l-247.89 148.4A35.5 35.5 0 0 1 133 440" />
                    </svg>
                    <span>Tonton Sekarang</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Film Recomendation -->
    <section>
      <div class="relative -top-16 xl:-top-36 z-10 flex w-full justify-center gap-x-8" id="containerCards"></div>
    </section>

    <!-- News Release -->
    <section>
      <div class="mx-auto container px-6 xl:px-20 pt-32">
        <div>
          <h5 class="text-h5 text-end text-white font-bold mb-6">New Release</h5>
        </div>
        <div class="flex gap-x-6 justify-center relative" id="newReleaseCont"></div>
      </div>
    </section>

    <!-- Gratis Populer -->
    <section>
      <div class="mx-auto container px-6 xl:px-20 pt-32">
        <div>
          <h5 class="text-h5 text-end text-white font-bold mb-6">Gratis Populer</h5>
        </div>
        <div class="flex gap-x-6 justify-center" id="freeCont"></div>
      </div>
    </section>

    <!-- Mini Banner -->
    <section>
      <div class="mx-auto container px-6 xl:px-20 mt-48">
        <div class="relative lg:mx-16 h-[400px] md:h-[353px]">
          <div class="absolute top-0 left-0 w-full h-full overflow-hidden rounded-[20px]">
            <img src="{{ asset('images/mini-banner.jpg') }}" alt="mini banner"
              class="h-full w-full object-cover object-center">
          </div>
          <div class="flex justify-end gap-x-[42px] text-white absolute bg-dark-blue-1000/50 w-full h-full py-12 px-5">
            <div class="text-end flex flex-col items-end gap-y-2">
              <h5 class="font-bold text-2xl md:text-h5">Boboiboy The Movie 2</h5>
              <div class="flex justify-end flex-wrap gap-3 text-llg font-semibold">
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  Adventure
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  Action
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  Comedy
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-2.5 py-1.5">
                  Science
                </div>
              </div>
              <p class="text-llg w-full py-1 line-clamp-3 md:line-clamp-4 md:w-4/6 xl:w-1/2">
                BoBoiBoy dan teman-temannya diserang oleh penjahat bernama Retak'ka yang merupakan pengguna asli kekuatan
                BoBoiBoy. Dia berusaha untuk mengambil kembali kekuatannya untuk menjadi orang yang paling kuat dan
                mendominasi galaksi
              </p>
              <p class="text-bsm font-bold pt-3">Tayang pada 10 Desember 2023</p>
              <div>
                <a href="#"
                  class="flex items-center rounded-lg font-bold text-bsm px-5 py-2 bg-neon-400 text-black shadow-[1px_1px_23px_14px_rgb(252_80_194_/_25%)] transition-all duration-300 hover:scale-105">
                  <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="black"
                      d="M133 440a35.37 35.37 0 0 1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0 1 35.77.45l247.85 148.36a36 36 0 0 1 0 61l-247.89 148.4A35.5 35.5 0 0 1 133 440" />
                  </svg>
                  Trailer
                </a>
              </div>
            </div>
            <div
              class="hidden md:block rounded-[15px] overflow-hidden w-[calc(420px+20vw)] lg:w-[calc(350px+5vw)] 2xl:w-[calc(300px+.5vw)]">
              <img src="{{ asset('images/poster5.jpg') }}" alt=""
                class="w-full h-full object-cover object-center">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Segera datang di Flixie -->
    <section>
      <div class="mx-auto container px-6 xl:px-20 pt-32">
        <div>
          <h5 class="text-h5 text-end text-white font-bold mb-6">Segera Datang di Flixie</h5>
        </div>
        <div class="flex gap-x-6 justify-center" id="comingsoonCont"></div>
      </div>
    </section>

    <!-- Rekomendasi TV Series -->
    <section>
      <div class="mx-auto container px-6 xl:px-20 pt-32">
        <div>
          <h5 class="text-h5 text-end text-white font-bold mb-6">Rekomendasi TV Series</h5>
        </div>
        <div class="flex gap-x-6 justify-center" id="tvseriesCont"></div>
      </div>
    </section>

  </main>
@endsection
