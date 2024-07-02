@extends('admin.layouts.main-admin')
@section('tab-title')
  Edit Film {{ $film->title }}
@endsection
@section('content')  
  <section>  
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
        <h3 class="text-2xl font-semibold text-black">
          Edit Film <span class="font-bold">{{ $film->title }}</span>
        </h3>
      </div>
      <form method="POST" action="/flixie-admin/dashboard/film/{{ $film->slug }}" class="flex flex-col gap-5.5 p-10" enctype="multipart/form-data">
        @csrf
        @method("put")
        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Judul
          </label>
          <input type="text" value="{{ $film->title }}" required name="title" placeholder="Masukan judul film disini..." class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>    

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Kategori
          </label>
          <select name="film_category" id="inpFilmCategory" required class="relative z-20 w-full appearance-none rounded border border-stroke bg-slate-100 py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary">
            <option value="" selected disabled>Pilih kategori film</option>
            @foreach ($film_categories as $film_category)
              <option  @if($film_category->id == $film->film_category_id) selected @endif value={{ $film_category->id }} class="text-body">{{ $film_category->name }}</option>
            @endforeach                        
          </select>          
        </div>    

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Sinopsis
          </label>          
          <textarea name="description" required rows="4" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal text-black outline-none transition focus:border-primary active:border-primary" >
            {{ $film->description }}
          </textarea>          
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Produksi film dari
          </label>
          <input type="text" value="{{ $film->production }}" required name="production" placeholder="cth: Flixie Company" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            URL Trailer 
            <span class="italic font-semibold">(*URL Youtube)</span>
          </label>
          <input type="text" value="{{ "https://youtube.com/watch?v=" . $film->url_trailer }}" required name="url_trailer" placeholder="cth: https://www.youtube.com/watch?v=D0UnqGm_miA" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            URL Vidio 
            <span class="italic font-semibold">(*URL Youtube)</span>
          </label>
          <input type="text" @if ($film->film_category->name == "tv") disabled @endif  value="{{ is_null($film->url_vidio) ? "" : "https://youtube.com/watch?v=" . $film->url_vidio }}" name="url_vidio" placeholder="cth: https://www.youtube.com/watch?v=D0UnqGm_miA" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:bg-slate-200">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Negara Produksi
          </label>
          @php
            $regions = [
              [ "name" => "USA", "value" => "english"],
              [ "name" => "Indonesia", "value" => "indonesian"],
              [ "name" => "Eropa", "value" => "europa"],
              [ "name" => "Jepang", "value" => "japanese"],
              [ "name" => "Korea Selatan", "value" => "south korea"],              
            ];
          @endphp
          <select name="region" class="relative z-20 w-full appearance-none rounded border border-stroke bg-slate-100 py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary" required>
            <option value="0" selected disabled>Pilih negara produksi</option>
            @foreach ($regions as $region)
              <option value="{{ $region["value"] }}" @if($film->region == $region["value"]) selected @endif class="text-body">{{ $region["name"] }}</option>            
            @endforeach                 
          </select>   
        </div>  

        <div>
          @php
            $hours = floor($film->duration / 3600);
            $minutes = floor(($film->duration / 60) % 60);
            // formatkan ke hh:mm
            $duration = sprintf('%02d:%02d', $hours, $minutes);
          @endphp
          <label class="mb-3 block text-sm font-medium text-black">
            Durasi (Jam | Menit)
            <p class="text-sm italic font-normal">Klik ikon jam untuk memilih jam dan menit</p>
          </label>                    
          <input value="{{ $duration }}" type="time" name="duration" class="w-25 rounded-lg bg-slate-100 text-gray-900 leading-none border-none focus:ring-blue-500 focus:border-blue-500 block flex-1 text-sm p-2.5" min="00:00" max="24:00" required>
        </div>

        @php
          $posterPath = "";                    
          $bannerPath = "";                    
          if (str_contains($film->poster, "images") && str_contains($film->banner, "images")) {
            $posterPath = asset("storage/" . $film->poster);                                          
            $bannerPath = asset("storage/" . $film->banner);                                          
          } else {
            $posterPath = "https://media.themoviedb.org/t/p/w300_and_h450_bestv2/" . $film->poster;                      
            $bannerPath = "https://media.themoviedb.org/t/p/w1920_and_h800_multi_faces" . $film->banner;                      
          }
        @endphp

        <div class="space-y-3">
          <label class="mb-3 block text-sm font-medium text-black">
            Poster
          </label>       
          <div><img src="{{ $posterPath }}" class="poster-img-preview w-45 rounded-lg" alt=""></div>
          <div>            
            <input type="file" name="poster" id="poster" onchange="previewImage('#poster', '.poster-img-preview')" accept=".jpg, .jpeg, .png, .svg" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3  active:border-primary disabled:cursor-default disabled:bg-whiter">
          </div>
        </div>
        
        <div class="space-y-3">
          <label class="mb-3 block text-sm font-medium text-black">
            Banner
          </label>
          <div class="w-100"><img src="{{ $bannerPath }}" class="banner-img-preview w-full object-cover rounded-lg" alt=""></div>
          <div>            
            <input type="file" name="banner" id="banner" onchange="previewImage('#banner', '.banner-img-preview')" accept=".jpg, .jpeg, .png, .svg" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3  active:border-primary disabled:cursor-default disabled:bg-whiter">
          </div>
        </div>
        
        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Gratis?
          </label>          
          <div class="flex">
            <div class="flex items-center me-4">
              <input id="inline-radio" type="radio" @if($film->is_free) checked @endif value="1" name="is_free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="inline-radio" class="ms-2 font-medium text-gray-900">Free</label>
            </div>
            <div class="flex items-center me-4">
              <input id="inline-2-radio" type="radio" @if(!$film->is_free) checked @endif value="0" name="is_free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="inline-2-radio" class="ms-2 font-medium text-gray-900">Pay</label>
            </div>            
          </div>
        </div>        

        <div>
          <label class="mb-3 block text-sm font-medium text-black">            
            <span class="font-semibold">Harga</span>
            <p class="text-sm font-normal italic">info: <span id="priceInfo">Input harga dinonaktifkan, sehingga kamu tak bisa menginputkan harga</span></p>
          </label>
          <div class="relative">
            <span class="absolute left-4.5 top-4 border-r pr-3">RP</span>
            <input 
              name="price" 
              @if ($film->is_free) disabled @endif 
              value="{{ !$film->is_free ? number_format($film->price, 0, ',', '') : '' }}" 
              class="w-full rounded border border-stroke bg-gray py-3 pl-14 pr-4.5 text-black focus:border-primary focus-visible:outline-none disabled:bg-slate-200" 
              type="number" 
              placeholder="cth: 12000"
            >
          </div>
        </div> 

        <div>
          <label class="mb-3 block text-sm font-medium text-black">            
            <span class="font-semibold">Pilih Genre</span>
          </label>
          <div class="max-w-44"> 
            @php
              $filmGenres = $film->genre->pluck("id")->toArray();
            @endphp           
            <select multiple id="countries_multiple" name="genres[]" class="bg-slate-100 text-gray-900 text-sm border border-slate-200 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}" @if (in_array($genre->id, $filmGenres)) selected @endif class="checked:bg-blue-400 checked:text-white checked:font-semibold">
                  {{ $genre->name }}
                </option>
              @endforeach              
            </select>
          </div>
        </div>       
             
        <div class="mt-10">
          <button type="submit" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-6 py-3.5 me-2 mb-2">Edit Film</button>
        </div>
      </form>
    </div>
  </section>
@endsection

@section("js-custom")
  <script src="{{ asset("js/film.js") }}"></script>
@endsection