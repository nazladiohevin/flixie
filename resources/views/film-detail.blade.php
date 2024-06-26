@extends('layouts.main')
@section('tab-title')
  {{ $film->title }} - Flixie
@endsection
@section('content')
  <main>
    <!-- Header/Jumbotron -->
    <header>
      <div class="h-[500px] md:h-[120vh] md:min-h-[700px] overflow-hidden">
        <div class="relative w-full h-full">
          <img src="https://media.themoviedb.org/t/p/w1920_and_h800_multi_faces/{{ $film->banner }}"
            alt="{{ $film->title }}" class="w-full h-full object-cover object-top" loading="lazy" />
          <div
            class="absolute left-0 top-0 z-10 h-full w-full bg-gradient-to-t from-dark-blue-1000 from-5% to-50% to-dark-blue-1000/0">
          </div>
        </div>
      </div>
    </header>

    <!-- Description Film -->
    <section class="-mt-36 md:-mt-44 lg:-mt-72 overflow-visible relative z-40">
      <div class="container mx-auto px-6 xl:px-24">
        <div class="flex flex-wrap xl:flex-nowrap gap-16">
          <!-- Rating -->
          <div class="mx-auto flex flex-col items-center space-y-10 basis-4/5 sm:basis-3/5 md:basis-1/2 lg:basis-1/4">
            <div class="h-[422px] rounded-xl overflow-hidden w-full"><img src="{{ $film->poster }}"
                alt="{{ $film->title }}" class="h-full w-full object-cover object-top"></div>
            <div class="flex gap-x-7">
              <div class="basis-2/5 flex items-center gap-x-3">
                <svg class="size-12 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <span class="text-3xl font-semibold text-[#EFF40C]">{{ number_format($meanRating, 1) }}</span>
              </div>
              <div class="text-bnormal text-white space-y-2">
                <span class="block">{{ $film->comment->count() }} Rating</span>
                <span class="block">{{ $film->comment->count() }} Review</span>
              </div>
            </div>
          </div>
          <!-- Description -->
          <div class="lg:basis-[55%] text-white ">
            <h2 class="text-4xl sm:text-h2 font-bold text-center leading-tight mb-3.5 lg:text-start">{{ $film->title }}
            </h2>
            <div class="text-lg sm:text-xl space-y-2 my-8">              
              @if ($film->film_category->name == "tv")
                @php
                  $firstSeason = $film->season()->orderBy("created_at")->first()->season;
                  $lastSeason = $film->season()->orderBy("id", "desc")->first()->season;
                @endphp
                <span class="block">Season: {{ $firstSeason }} - {{ $lastSeason }}</span>                
              @endif
              <span class="block">Produksi : {{ $film->production }}</span>
              @php
                use Carbon\Carbon;
                $releaseDate = Carbon::parse($film->release_date);
              @endphp
              <span class="block">Penayangan : {{ $releaseDate->year }}</span>
            </div>
            <div class="flex  gap-x-10 my-11">
              @if ($film->is_free)
                <a href="{{ $film->slug }}/{{ $film->film_category->name == 'tv' ? '1/1' : 'vidio'  }}"
                  class="text-black flex w-min items-center rounded-lg bg-lagoon-500 px-4 py-2 text-bLg font-bold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">
                  <svg class="me-1 w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="black"
                      d="M133 440a35.37 35.37 0 0 1-17.5-4.67c-12-6.8-19.46-20-19.46-34.33V111c0-14.37 7.46-27.53 19.46-34.33a35.13 35.13 0 0 1 35.77.45l247.85 148.36a36 36 0 0 1 0 61l-247.89 148.4A35.5 35.5 0 0 1 133 440" />
                  </svg>
                  <span>Play</span>
                </a>
                <div
                  class="cursor-pointer rounded-full w-12 h-12 p-2 bg-neon-300 text-black shadow-[1px_1px_23px_14px_rgb(253_130_211_/_25%)] transition-all duration-300 hover:scale-105">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-full" viewBox="0 0 24 24">
                    <path fill="black"
                      d="M18 22q-1.25 0-2.125-.875T15 19q0-.175.025-.363t.075-.337l-7.05-4.1q-.425.375-.95.588T6 15q-1.25 0-2.125-.875T3 12t.875-2.125T6 9q.575 0 1.1.213t.95.587l7.05-4.1q-.05-.15-.075-.337T15 5q0-1.25.875-2.125T18 2t2.125.875T21 5t-.875 2.125T18 8q-.575 0-1.1-.212t-.95-.588L8.9 11.3q.05.15.075.338T9 12t-.025.363t-.075.337l7.05 4.1q.425-.375.95-.587T18 16q1.25 0 2.125.875T21 19t-.875 2.125T18 22" />
                  </svg>
                </div>            
            @else
            <div class="space-y-11">
              <p class="text-[#EFF40C] font-bold text-h2 [text-shadow:_1px_2px_12px_rgb(239_244_12_/_55%)]">Rp {{ number_format($film->price / 1000, 3, '.', ',') }}</p>
              <form id="createTransaction" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->check() ? auth()->user()->id : 0 }}">
                <input type="hidden" name="film_id" value="{{ $film->id }}">                
                <button
                  type="submit"
                  class="text-black flex items-center rounded-lg bg-[#EFF40C] px-4 py-2 text-bLg font-bold shadow-[1px_1px_15px_10px_rgb(239_244_12_/_35%)] transition-all duration-300 hover:scale-105">
                  <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path fill="black"
                      d="M4 7a1 1 0 0 0 0 2h2.22l2.624 10.5c.223.89 1.02 1.5 1.937 1.5h12.47c.903 0 1.67-.6 1.907-1.47L27.75 10h-2.094l-2.406 9H10.78L8.157 8.5A1.984 1.984 0 0 0 6.22 7zm18 14c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3m-9 0c-1.645 0-3 1.355-3 3s1.355 3 3 3s3-1.355 3-3s-1.355-3-3-3m3-14v5h-3l4 4l4-4h-3V7zm-3 16c.564 0 1 .436 1 1c0 .564-.436 1-1 1c-.564 0-1-.436-1-1c0-.564.436-1 1-1m9 0c.564 0 1 .436 1 1c0 .564-.436 1-1 1c-.564 0-1-.436-1-1c0-.564.436-1 1-1" />
                  </svg>
                  Beli Sekarang
                </button>
              </form>
            </div>
            @endif
          </div>

            <p class="text-bsm mb-9">{{ $film->description }}</p>
            <div>
              <h6 class="text-bLg font-semibold pb-4">Detail</h6>
              <ul>
                <li class="flex border-b-[1px] border-dark-blue-500 py-4">
                  <div class="basis-1/3 font-semibold">Genre</div>
                  <div class="basis-2/3 flex flex-wrap gap-3 text-llg font-semibold text-white">
                    @foreach ($film->genre as $item )
                      <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                        {{ $item->name }}
                      </div>                      
                    @endforeach            
                  </div>
                </li>
                <li class="flex border-b-[1px] border-dark-blue-500 py-4">
                  <div class="basis-1/3 font-semibold">Region</div>
                  <div class="basis-2/3">{{ $film->region }}</div>
                </li>
                <li class="flex border-b-[1px] border-dark-blue-500 py-4">
                  <div class="basis-1/3 font-semibold">Durasi</div>                  
                  @if ($film->film_category->name == "movie")
                    <div class="basis-2/3">{{ convertSecondsToReadableTime($film->duration) }}</div>                    
                  @else
                  <div class="basis-2/3">24 Menit / Episode</div>                    
                  @endif
                </li>
                <li class="flex border-b-[1px] border-dark-blue-500 py-4">
                  <div class="basis-1/3 font-semibold">Kategori</div>
                  <div class="basis-2/3">{{ $film->film_category->name }}</div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Artist -->
          <div class="lg:basis-1/5 pt-24 text-white">
            <h5 class="text-bLg font-semibold mb-5">Artist</h5>
            <ul class="flex flex-wrap justify-center gap-5 sm:justify-start">
              @foreach ($film->artist as $item)
                <li class="w-40 flex flex-col gap-2.5  text-center xl:w-auto xl:text-start xl:flex-row">
                  <div class="w-[61px] h-[61px] mx-auto rounded-full overflow-hidden">
                    <img src="https://image.tmdb.org/t/p/w100_and_h100_face/{{ $item->image_path }}" alt="artist" loading="lazy">
                  </div>
                  <div class="flex flex-col justify-center items-center xl:items-start gap-y-0.5">
                    <p class="font-semibold line-clamp-2">{{ $item->name }}</p>
                    <p class="font-light line-clamp-2">{{ $item->character }}</p>
                  </div>
                </li>              
              @endforeach           
            </ul>
          </div>
        </div>
      </div>
    </section>
    {{-- <!-- Review -->
    <section>
      <div class="container mx-auto mt-20 px-6 xl:px-24">
        <ul class="flex gap-x-5 justify-center bg-dark-blue-800 py-[22px] text-bLg rounded-md"
          data-tabs-toggle="#default-tab-content" role="tablist" data-tabs-active-classes="font-bold bg-lagoon-700"
          data-tabs-inactive-classes="font-medium hover:bg-lagoon-700/50">
          <li role="presentation">
            <button class="text-white py-1 px-2 rounded-lg " data-tabs-target="#review" type="button"
              role="tab">Review</button>
          </li>
        </ul>
        <div class="mt-12">
          <div class="hidden text-white" id="review" role="tabpanel">
            <h5 class="text-h5 font-bold mb-12">Tulis review anda</h5>
            <small class="text-bLg font-medium mb-2 block">Rating</small>
            <div class="mb-10">
              <div class="flex items-center gap-x-3">
                <svg class="h-8 w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="h-8 w-8 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 22 20">
                  <path
                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
              </div>
            </div>
            <label class="text-bLg font-medium block mb-3">Review Anda</label>
            <textarea id="" rows="8"
              class="w-full border-[2px] border-white rounded-lg bg-transparent text-white font-medium"></textarea>
            <div class="flex justify-end mt-3.5">
              <button
                class="flex w-min items-center rounded-lg bg-lagoon-500 px-8 py-2 text-bLg font-semibold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">
                Kirim
              </button>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <!-- Komentar -->
    <section>
      <div class="container mx-auto px-6 mt-32 xl:px-24">
        <div class="flex items-center justify-between mb-12">
          <p class="text-bLg text-white font-semibold">Komentar</p>
          <button
            class="flex w-max items-center rounded-lg gap-x-2 bg-lagoon-500 px-4 py-2 text-bLg font-semibold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">
            Tulis Komentar
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 " viewBox="-0.5 -0.5 24 24">
              <path fill="black"
                d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.928.928 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z" />
            </svg>
          </button>
        </div>
        <div class="space-y-11">
          <div class="flex gap-x-7">
            <div class="basis-14 w-14 h-14 rounded-full overflow-hidden">
              <img src="../../public/images/artist1.jpeg" alt="artist">
            </div>
            <div class="basis-full text-white">
              <span class="block font-semibold mb-[5px]">Edward Cisneros</span>
              <small class="block mb-5">3 jam yang lalu</small>
              <p>
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien
                gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum
                vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra
                ornare sed id fringilla. Diam rhoncus sed.
              </p>
            </div>
          </div>
          <div class="flex gap-x-7">
            <div class="basis-14 w-14 h-14 rounded-full overflow-hidden">
              <img src="../../public/images/artist1.jpeg" alt="artist">
            </div>
            <div class="basis-full text-white">
              <span class="block font-semibold mb-[5px]">Edward Cisneros</span>
              <small class="block mb-5">3 jam yang lalu</small>
              <p>
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien
                gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum
                vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra
                ornare sed id fringilla. Diam rhoncus sed.
              </p>
            </div>
          </div>
          <div class="flex gap-x-7">
            <div class="basis-14 w-14 h-14 rounded-full overflow-hidden">
              <img src="../../public/images/artist1.jpeg" alt="artist">
            </div>
            <div class="basis-full text-white">
              <span class="block font-semibold mb-[5px]">Edward Cisneros</span>
              <small class="block mb-5">3 jam yang lalu</small>
              <p>
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien
                gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum
                vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra
                ornare sed id fringilla. Diam rhoncus sed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
@section("js-custom")  
  <script src="{{ asset("js/detail-film.js") }}"></script>
@endsection
