@extends("layouts.main")
@section("tab-title")
  Tonton {{ $film->title }} - Flixie
@endsection
@section("content")
  @php
    use Carbon\Carbon;
    Carbon::setLocale("id");
  @endphp
  <main class="mt-36"> 
    <!-- VIDEO BAR -->
    <section>
      <div class="container mx-auto px-6 xl:px-24">        
        <div class="w-full">
          <iframe class="w-full h-52 md:h-[500px]" src="https://www.youtube.com/embed/{{ $film->url_vidio }}" allowfullscreen></iframe>     
        </div>                       
      </div>        
    </section>          

    <!-- Description -->
    <section>
      <div class="container mx-auto px-6 mt-10 xl:px-24">
        <!-- TITLE -->
        <div class="flex gap-x-8 gap-y-32 flex-wrap xl:flex-nowrap xl:gap-x-28">
          <div class="basis-full xl:basis-[60%]">
            <h4 class="text-xl font-bold text-white sm:text-h4">{{ $film->title }}</h4>
            <div class="flex items-center  mt-6">
              <svg class="size-9 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
              </svg>
              <span class="inline-block text-lg font-bold text-[#EFF40C] ml-3 sm:mt-2 sm:text-h5">{{ number_format($meanRating, 1) }}</span>
              <span class="mx-3 text-white mt-2">|</span>
              <span class="inline-block text-base text-white sm:mt-2 sm:text-bLg">{{ $film->comment->count() }} Ratings</span>
              {{-- <span class="mx-3 text-white mt-2">|</span> --}}
              {{-- <span class="inline-block text-base text-white sm:mt-2 sm:text-bLg">1.000.000 Views</span> --}}
            </div>   
            
            <div class="mt-14 space-y-3">
              <h5 class="text-lg text-white font-medium sm:text-h5">Genre</h5>
              <div class="flex flex-wrap gap-3 text-llg font-semibold text-white">
                @foreach ($film->genre as $item)
                  <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                    {{ $item->name }}
                  </div>                  
                @endforeach                
              </div>
            </div>

            {{-- <div class="mt-14 space-y-3">
              <h5 class="text-lg text-white font-medium sm:text-h5">Subtitle</h5>
              <div class="flex flex-wrap gap-3 text-llg font-semibold text-white">
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  Indonesia
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  English
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-3 py-1.5">
                  Jepang
                </div>
                <div class="rounded-[9px] bg-lagoon-700 px-2.5 py-1.5">
                  Cina
                </div>
              </div>
            </div> --}}

            <div class="mt-80 text-white">
              <h5 class="text-h5 font-bold mb-12">Tulis review anda</h5>
              <small class="text-bLg font-medium mb-2 block">Rating</small>
              <div class="mb-10">
                <div class="flex items-center gap-x-3">
                  <svg
                    class="h-8 w-8 text-[#EFF40C] [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <svg
                    class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <svg
                    class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <svg
                    class="h-8 w-8 text-[#EFF40C] shadow-sm [filter:drop-shadow(0_1px_10px_rgb(239_244_12_/_50%))]"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                  <svg
                    class="h-8 w-8 text-gray-300"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 22 20"
                  >
                    <path
                      d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
                    />
                  </svg>
                </div>
              </div>
              <label class="text-bLg font-medium block mb-3">Review Anda</label>
              <textarea id="" rows="8" class="w-full border-[2px] border-white rounded-lg bg-transparent text-white font-medium"></textarea>
              <div class="flex justify-end mt-3.5">
                <button class="flex w-min items-center rounded-lg bg-lagoon-500 px-8 py-2 text-bLg font-semibold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">              
                  Kirim
                </button>
              </div>
            </div>   
          </div>

          <div class="basis-full xl:basis-[40%]">
            <h5 class="text-white font-medium text-h5">Rekomendasi Vidio</h5>
            <ul class="mt-5 grid gap-5 grid-cols-1 md:grid-cols-2 xl:grid-cols-1">
             
              @foreach ($latest_films as $item)
                <li class="overflow-hidden">
                  <div class="flex gap-x-5">
                    <div class="basis-2/5">
                      <img src="{{ $item->poster }}" alt="Poster Film" class="h-28 w-full rounded-md object-cover object-center">
                    </div>
                    <div class="basis-3/5 text-white">
                      <h3 class="font-medium line-clamp-1 sm:text-bLg">{{ $item->title }}</h3>                                              
                      @if ($item->film_category->name == "tv")                        
                        <p class="mt-2 text-sm sm:text-base">Season {{ $item->season->sortByDesc('created_at')->first()->season }}</p>
                        <p class="mb-2 text-sm sm:text-base">Episode {{ $item->episode->sortByDesc('created_at')->first()->episode }}</p>                                                                    
                      @endif
                      <p class="mt-4 text-xs sm:text-sm">Rilis {{ Carbon::parse($item->created_at)->diffForHumans() }}</p>
                    </div>
                  </div>
                </li>                                                             
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Komentar -->
    <section>
      <div class="container mx-auto px-6 mt-32 xl:px-24">
        <div class="flex items-center justify-between mb-12">
          <p class="text-bLg text-white font-semibold">Komentar</p>
          <button class="flex w-max items-center rounded-lg gap-x-2 bg-lagoon-500 px-4 py-2 text-bLg font-semibold shadow-[1px_1px_23px_14px_rgb(26_225_255_/_25%)] transition-all duration-300 hover:scale-105">              
            Tulis Komentar
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 " viewBox="-0.5 -0.5 24 24"><path fill="black" d="m21.289.98l.59.59c.813.814.69 2.257-.277 3.223L9.435 16.96l-3.942 1.442c-.495.182-.977-.054-1.075-.525a.928.928 0 0 1 .045-.51l1.47-3.976L18.066 1.257c.967-.966 2.41-1.09 3.223-.276zM8.904 2.19a1 1 0 1 1 0 2h-4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-4a1 1 0 0 1 2 0v4a4 4 0 0 1-4 4h-12a4 4 0 0 1-4-4v-12a4 4 0 0 1 4-4z"/></svg>
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
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra ornare sed id fringilla. Diam rhoncus sed.
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
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra ornare sed id fringilla. Diam rhoncus sed.
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
                Lorem ipsum dolor sit amet consectetur. Morbi mollis congue aliquet sagittis ut non eu. Mattis sapien gravida morbi sed dolor in. Suscipit felis tincidunt nam turpis et morbi nisl. Eu metus non arcu elementum vel condimentum.
                Lectus nec id odio nunc. Scelerisque suspendisse volutpat id dolor semper sit. Netus sit vulputate viverra ornare sed id fringilla. Diam rhoncus sed.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
