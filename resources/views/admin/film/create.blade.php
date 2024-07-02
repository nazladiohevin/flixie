@extends('admin.layouts.main-admin')
@section('tab-title')
  Kelola Film
@endsection
@section('content')  
  <section>  
    <div class="rounded-sm border border-stroke bg-white shadow-default">
      <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
        <h3 class="text-2xl font-semibold text-black">
          Buat Film Baru
        </h3>
      </div>
      <form method="POST" action="/flixie-admin/dashboard/film" class="flex flex-col gap-5.5 p-10" enctype="multipart/form-data">
        @csrf
        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Judul
          </label>
          <input type="text" value="{{ old("title") }}" required name="title" placeholder="Masukan judul film disini..." class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>    

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Kategori
          </label>
          <select name="film_category" id="inpFilmCategory" required class="relative z-20 w-full appearance-none rounded border border-stroke bg-slate-100 py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary">
            <option value="" selected disabled>Pilih kategori film</option>
            <option value="2" class="text-body">TV</option>
            <option value="1" class="text-body">Movie</option>            
          </select>          
        </div>    

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Sinopsis
          </label>          
          <textarea name="description" required rows="4" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal text-black outline-none transition focus:border-primary active:border-primary" >
            {{ old("description") }}
          </textarea>          
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Produksi film dari
          </label>
          <input type="text" value="{{ old("production") }}" required name="production" placeholder="cth: Flixie Company" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            URL Trailer 
            <span class="italic font-semibold">(*URL Youtube)</span>
          </label>
          <input type="text" value="{{ old("url_trailer") }}" required name="url_trailer" placeholder="cth: https://www.youtube.com/watch?v=D0UnqGm_miA" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            URL Vidio 
            <span class="italic font-semibold">(*URL Youtube)</span>
          </label>
          <input type="text" value="{{ old("url_vidio") }}" name="url_vidio" placeholder="cth: https://www.youtube.com/watch?v=D0UnqGm_miA" class="w-full rounded-lg border-[1.5px] border-stroke bg-slate-100 px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:bg-slate-200">
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Negara Produksi
          </label>
          <select name="region" class="relative z-20 w-full appearance-none rounded border border-stroke bg-slate-100 py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary" required>
            <option value="0" selected disabled>Pilih negara produksi</option>
            <option value="english" class="text-body">USA</option>
            <option value="indonesian" class="text-body">Indonesia</option>                        
            <option value="europa" class="text-body">Eropa</option>            
            <option value="japanese" class="text-body">Jepang</option>            
            <option value="south korea" class="text-body">Korea Selatan</option>                        
          </select>   
        </div>  

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Durasi (Jam | Menit)
            <p class="text-sm italic font-normal">Klik ikon jam untuk memilih jam dan menit</p>
          </label>                    
          <input type="time" name="duration" class="w-25 rounded-lg bg-slate-100 text-gray-900 leading-none border-none focus:ring-blue-500 focus:border-blue-500 block flex-1 text-sm p-2.5" min="00:00" max="24:00" value="00:00" required>                                
        </div>

        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Poster
          </label>
          <div>            
            <input type="file" name="poster" accept=".jpg, .jpeg, .png, .svg" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3  active:border-primary disabled:cursor-default disabled:bg-whiter">
          </div>
        </div>
        
        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Banner
          </label>
          <div>            
            <input type="file" name="banner" accept=".jpg, .jpeg, .png, .svg" class="w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-slate-100 font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-stroke file:bg-whiter file:px-5 file:py-3  active:border-primary disabled:cursor-default disabled:bg-whiter">
          </div>
        </div>
        
        <div>
          <label class="mb-3 block text-sm font-medium text-black">
            Gratis?
          </label>          
          <div class="flex">
            <div class="flex items-center me-4">
              <input id="inline-radio" type="radio" value="1" checked name="is_free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="inline-radio" class="ms-2 font-medium text-gray-900">Free</label>
            </div>
            <div class="flex items-center me-4">
              <input id="inline-2-radio" type="radio" value="0" name="is_free" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
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
            <input name="price" class="w-full rounded border border-stroke bg-gray py-3 pl-14 pr-4.5 text-black focus:border-primary focus-visible:outline-none disabled:bg-slate-200" type="number" placeholder="cth: 12000" disabled>
          </div>
        </div> 

        <div>
          <label class="mb-3 block text-sm font-medium text-black">            
            <span class="font-semibold">Pilih Genre</span>
          </label>
          <div class="max-w-44">            
            <select multiple id="countries_multiple" name="genres[]" class="bg-slate-100 text-gray-900 text-sm border border-slate-200 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>                
              @endforeach              
            </select>
          </div>
        </div>       
             
        <div class="mt-10">
          <button type="submit" class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg  px-6 py-3.5 me-2 mb-2">Buat Film Baru</button>
        </div>
      </form>
    </div>
  </section>
@endsection

@section("js-custom")
  <script src="{{ asset("js/film.js") }}"></script>
@endsection