@extends('layouts.main')
@section('tab-title')
  Movies - Flixie
@endsection
@section('content')
  <main>
    <div class="slick-slider">
      <div class="slick-slide">
        <div class="relative h-[550px] w-full">
          <img src="../../public/images/endgame.jpg" class="h-full w-full object-cover" alt="Banner Image" />
          <div class="title-headline absolute left-0 top-1/2 transform -translate-y-1/2 w-[80%] text-left pl-[150px]">
            <p class="mb-[-30px] text-[40px] font-semibold text-white">
              END
            </p>
            <p class="mb-[-30px] text-[80px] font-bold text-white">
              GAME
            </p>
            <p></p>
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
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Action</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-600/10">Superhero</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-yellow-600/20">Sci-Fi</span>
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
          <img src="../../public/images/frozen.jpg" class="h-full w-full object-cover" alt="Banner Image" />
          <div class="title-headline absolute left-0 top-1/2 transform -translate-y-1/2 w-[80%] text-left pl-[150px]">
            <p class="mb-[-30px] text-[40px] font-semibold text-white">
              FROZEN II :
            </p>
            <p class="mb-[-30px] text-[80px] font-bold text-white">
              INTO THE UNKNOWN
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
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Animation</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-600/10">Kids</span>
              <span
                class="inline-flex items-center rounded-md bg-blue-400 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-yellow-600/20">Adventure</span>
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
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Paling Sering Ditonton</h2>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster1.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Iron Man</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Ponyo</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">World War Z</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Jujutsu Kaisen</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">John Wick 1</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">John Wick 2</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster2.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">John Wick 3</h3>


        </div>
      </div>
    </div>
    </div>


    <div class="mt-8 text-center">
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Segera Tayang</h2>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Marvels</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Tiger 3</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Ark of Aaro</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Doraemon : Utopia</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Night Swim</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Deadpool 3</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster3.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Suzume</h3>


        </div>
      </div>
    </div>

    <div class="mt-8 text-center">
      <h2 class="text-[30px] font-bold text-white flex ml-20 justify-between">Genre</h2>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Anime</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Drama</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Romantis</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Sci-fi</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Action</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Horor</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Komedi</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Misteri</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Thriller</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Keluarga</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Dokumenter</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Biografis</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Historis</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Kriminal</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Barat</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Perang</button>
      <button
        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-xs font-medium text-white ring-1 ring-inset ring-blue-500/10">Selengkapnya</button>
      <div class="flex space-x-4 mt-5 overflow-x-auto justify-center">
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 1" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">A Silent Voice</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 2" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">The Wind Rises</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 3" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Violet Evergarden</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 4" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Hotaubi No Mori E</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Stand By Me : Doraemon 2</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">Josee : The Tiger and The Fish</h3>

        </div>
        <div class="w-[200px] h-[300px] bg-dark-blue-800 rounded-lg p-2">
          <img src="../../public/images/poster4.jpg" alt="Poster Film 5" class="h-[200px] w-full rounded-md">
          <h3 class="mt-2 text-white font-semibold">One Piece : Gold</h3>


        </div>
      </div>
    </div>
  </main>
@endsection
