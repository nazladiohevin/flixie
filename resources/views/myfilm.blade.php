@extends('layouts.main')
@section('tab-title')
  Filmku - Flixie
@endsection
@section('content')
  <main>
    <!-- Description -->
    <section>
      <div class="container mt-28 mx-auto px-6 xl:px-24">
        <h3 class="text-h3 text-white font-semibold">Cek Film dan Transaksimu disini!</h3>
        <p class="text-bLg text-white mt-4">
          Di sini, kamu bisa melihat daftar film yang sudah kamu beli sebelumnya, jika kamu ingin menonton film, klik saja
          filmnya. Disini juga untuk menyelesaikan pembelian untuk film yang ingin kamu beli selanjutnya.
          Jangan lupa klik tombol <b class="font-bold">Checkout</b> yaa Flixier. Senyum manis untukmu..
        </p>
      </div>
    </section>

    <section>
      <div class="container mx-auto px-6 mt-24 xl:px-24">
        <div class="mb-4 border-b-4 border-dark-blue-800">
          <ul class="flex flex-wrap -mb-px text-base md:text-3xl font-medium text-center" data-tabs-toggle="#film-container"
            data-tabs-active-classes="text-lagoon-500 border-lagoon-500 border-b-4"
            data-tabs-inactive-classes="text-white/90 hover:text-white/80" role="tablist">
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 rounded-t-lg" data-tabs-target="#cart" type="button" role="tab"
                aria-controls="profile" aria-selected="false">Keranjang Belanja</button>
            </li>
            <li class="me-2" role="presentation">
              <button class="inline-block p-4 rounded-t-lg" data-tabs-target="#myfilm" type="button"
                role="tab">FilmKu</button>
            </li>
          </ul>
        </div>
        <div id="film-container">
          <!-- My Cart / Transaksi -->
          <div class="hidden p-4 mt-16 space-y-16 md:space-y-9" id="cart" role="tabpanel">
            <h4 class="text-h4 text-white font-semibold">Keranjang Saya</h4>

            <div class="flex flex-col gap-y-32 md:gap-y-6">
              @php
                $totalPrice = 0.0;
                $totalFilm = 0;
              @endphp
              @foreach ($transactions as $transaction)
                @php
                  $totalPrice += $transaction->price; 
                  $totalFilm += 1; 
                @endphp
                <div class="flex w-full gap-x-3 md:gap-x-10 items-center h-48" id="container">
                  <div
                    class="flex justify-between w-full px-6 py-5 flex-col gap-x-4 sm:flex-row bg-dark-blue-800/50 rounded-xl box-border">
                    <div class="flex flex-col md:flex-row gap-5">
                      <div class="rounded-lg overflow-hidden w-36 h-36 sm:h-48 md:h-full md:w-28">
                        <img src="{{ $transaction->poster }}" alt="" class="size-full object-cover object-top">
                      </div>
                      <div class="flex flex-col gap-y-1 justify-center">
                        <h6 class="text-white font-semibold md:text-2xl">{{ $transaction->title }}</h6>
                        @if ($transaction->name == "movie")
                          <p class="text-white text-sm md:text-base"><b class="font-semibold">Durasi</b>: {{ convertSecondsToReadableTime($transaction->duration) }}</p>                          
                        @else
                          <p class="text-white text-sm md:text-base"><b class="font-semibold">Durasi</b>: 24 Menit / Episode</p>                                                    
                        @endif
                      </div>
                    </div>
                    <div class="flex items-center">
                      <p
                        class="text-center mt-2 sm:mt-0 text-xl sm:text-start sm:text-2xl lg:text-4xl font-bold text-[#EFF40C] [text-shadow:_1px_2px_10px_rgb(239_244_12_/_35%)]">
                        Rp {{ number_format($transaction->price / 1000, 3, '.', ',') }}
                      </p>
                    </div>
                  </div>
                  <input type="hidden" name="film_id" value="{{ $transaction->id }}">                  
                  <input type="hidden" name="id" value="{{ $transaction->transaction_id }}">                  
                  <div>
                    <button id="closeBtn"
                      class="flex justify-center items-center size-9 rounded-full bg-red-600 cursor-pointer transition-transform hover:scale-110">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-white size-5" viewBox="0 0 32 32">
                        <path fill="currentColor"
                          d="M24.879 2.879A3 3 0 1 1 29.12 7.12l-8.79 8.79a.125.125 0 0 0 0 .177l8.79 8.79a3 3 0 1 1-4.242 4.243l-8.79-8.79a.125.125 0 0 0-.177 0l-8.79 8.79a3 3 0 1 1-4.243-4.242l8.79-8.79a.125.125 0 0 0 0-.177l-8.79-8.79A3 3 0 0 1 7.12 2.878l8.79 8.79a.125.125 0 0 0 .177 0z" />
                      </svg>
                    </button>
                  </div>
                </div>                
              @endforeach        
            </div>

            <div class="flex justify-between pt-8 md:justify-end md:gap-x-28">
              <div class="text-white">
                <div class="font-bold md:text-h4">Sub Total</div>
                <span class="block"><b class="font-semibold">Total item</b>: {{ $totalFilm }}</span>
              </div>
              <div
                class="flex items-center font-bold text-2xl underline underline-offset-8 text-[#EFF40C] [text-shadow:_1px_2px_10px_rgb(239_244_12_/_35%)] md:text-5xl">                              
                Rp {{ number_format($totalPrice / 1000, 3, '.', ',') }}
              </div>
            </div>

            <div class="flex justify-end">
              <button
                class="py-4 px-14 rounded-xl font-semibold text-2xl bg-neon-400 text-black shadow-[1px_1px_23px_14px_rgb(252_80_194_/_25%)] transition-all duration-300 hover:scale-105">
                Checkout
              </button>
            </div>
          </div>

          <!-- Purchased Films -->
          <div class="hidden p-4 mt-16 space-y-10" id="myfilm" role="tabpanel">
            <h4 class="text-h4 text-white font-semibold ">FilmKu</h4>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-y-10 gap-x-4 sm:gap-x-11"
              id="myfilmContainer">

            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
@endsection
@section("js-custom")
  <script src="{{ asset("js/myfilm.js") }}"></script>
@endsection