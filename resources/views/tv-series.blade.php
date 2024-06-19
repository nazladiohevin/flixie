@extends('layouts.main')
@section('tab-title')
  TV Series - Flixie
@endsection
@section('content')
  <main>
    <div class="slick-slider">
      <div class="slick-slide">
        <div class="relative h-[550px] w-full">
          <img src="../../public/images/big-banner2.jpg" class="h-full w-full object-cover" alt="Banner Image" />
          <div class="title-headline absolute left-0 top-1/2 transform -translate-y-1/2 w-[80%] text-left pl-[150px]">
            <p class="mb-[-30px] text-[40px] font-semibold text-white">
              The Rising of The
            </p>
            <p class="mb-[-30px] text-[80px] font-bold text-white">
              SHIELD HERO
            </p>
            <p class="mb-[20px] text-[30px] font-bold text-white">Season 1</p>
            <div class="flex items-center">
              <label for="star1" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star1" name="rating" value="5" class="hidden" />
              <label for="star2" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star2" name="rating" value="5" class="hidden" />
              <label for="star3" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star3" name="rating" value="5" class="hidden" />
              <label for="star4" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star4" name="rating" value="5" class="hidden" />
              <label for="star5" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star5" name="rating" value="5" class="hidden" />
            </div>
            <div class="flex items-center space-x-2 mt-3">
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Anime</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-600/10">Adventure</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-yellow-600/20">Overpower</span>
            </div>
            <a href="#" class="block mt-6">
              <button
                class="px-8 py-3 bg-blue-500 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-600 hover:text-white">
                Play
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="relative h-[550px] w-full">
          <img src="../../public/images/big-banner2.jpg" class="h-full w-full object-cover" alt="Banner Image" />
          <div class="title-headline absolute left-0 top-1/2 transform -translate-y-1/2 w-[80%] text-left pl-[150px]">

            <p class="mb-[-30px] text-[40px] font-semibold text-white">
              Jujutsu
            </p>
            <p class="mb-[-30px] text-[80px] font-bold text-white">
              KAISEN
            </p>
            <p class="mb-[20px] text-[30px] font-bold text-white">Season 2</p>
            <div class="flex items-center">
              <label for="star1" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star1" name="rating" value="5" class="hidden" />
              <label for="star2" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star2" name="rating" value="5" class="hidden" />
              <label for="star3" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star3" name="rating" value="5" class="hidden" />
              <label for="star4" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star4" name="rating" value="5" class="hidden" />
              <label for="star5" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star5" name="rating" value="5" class="hidden" />
            </div>
            <div class="flex items-center space-x-2 mt-3">
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Anime</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-600/10">Adventure</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-yellow-600/20">Overpower</span>
            </div>
            <a href="#" class="block mt-6">
              <button
                class="px-8 py-3 bg-blue-500 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-600 hover:text-white">
                Play
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="slick-slide">
        <div class="relative h-[550px] w-full">
          <img src="../../public/images/big-banner3.jpg" class="h-full w-full object-cover" alt="Banner Image" />
          <div class="title-headline absolute left-0 top-1/2 transform -translate-y-1/2 w-[80%] text-left pl-[150px]">
            <p class="mb-[-30px] text-[40px] font-semibold text-white">
              PUT YOUR HEAD
            </p>
            <p class="mb-[-30px] text-[80px] font-bold text-white">
              ON MY SHOULDER
            </p>


            <div class="flex items-center">
              <label for="star1" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star1" name="rating" value="5" class="hidden" />
              <label for="star2" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star2" name="rating" value="5" class="hidden" />
              <label for="star3" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star3" name="rating" value="5" class="hidden" />
              <label for="star4" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star4" name="rating" value="5" class="hidden" />
              <label for="star5" class="cursor-pointer text-4xl">&#9733;</label>
              <input type="radio" id="star5" name="rating" value="5" class="hidden" />
            </div>
            <div class="flex items-center space-x-2 mt-3">
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Romance</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-600/10">Drama</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-yellow-600/20">School</span>
            </div>
            <a href="#" class="block mt-6">
              <button
                class="px-8 py-3 bg-blue-500 text-white font-semibold rounded-lg transition duration-300 hover:bg-blue-600 hover:text-white">
                Play
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>


    <div class="mt-8 text-center">
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Populer di FLIXIE</h2>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Jujutsu Kaisen</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The K2</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Start Up</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Black Knight</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Eminence in Shadow 1</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Descendants of The Sun</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster5.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Suzume</h3>


        </div>
      </div>
    </div>
    </div>


    <div class="mt-8 text-center">
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Segera Tayang</h2>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Last Imortal</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Everlasting Longing</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Snow Moon</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">A Time Called You</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Deal</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Some Day or One Day</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster6.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Behind Your Touch</h3>


        </div>
      </div>
    </div>

    <div class="mt-8 text-center">
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Anime</h2>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Eminance in Shadow 1</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Mashle</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Oshi No Ko</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Spy X Family</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Berserk of Gluttony</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Eminance in Shadow 2</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster8.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Jujutsu Kaisen</h3>


        </div>
      </div>
    </div>
  </main>
@endsection
