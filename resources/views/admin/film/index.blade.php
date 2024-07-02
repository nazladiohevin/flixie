@extends('admin.layouts.main-admin')
@section('tab-title')
  Kelola Film
@endsection
@section('content')  
    @php
      use Carbon\Carbon;      
    @endphp

    <section>
      @if (session()->has("success"))
        <div id="alert-3" class="flex items-center p-4 mb-4 rounded-lg bg-green-200/80 text-green-500" role="alert">
          <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
          </svg>
          <span class="sr-only">Info</span>
          <div class="ms-3 text-sm font-medium">
            {{ session("success") }}
          </div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
          </button>
        </div>
      @endif

      <div class="mb-3">
        <a href="{{ route("film.create") }}" class="w-max flex items-center gap-x-3 justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90">
          <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24"><path fill="currentColor" d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2"/></svg>
          Buat Film Baru
        </a>
      </div>
      <div class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="max-w-full overflow-x-auto">
          <table class="w-full table-auto border-white/">
            <thead>
              <tr class="bg-blue-200/70 text-left dark:bg-meta-4">
                <th class="text-center px-4 py-4 font-medium text-black xl:pl-11">
                  No
                </th>
                <th class="w-[300px] px-4 py-4 font-medium text-black">
                  Nama
                </th>
                <th class="text-center px-4 py-4 font-medium text-black">
                  Kategori
                </th>                
                <th class="w-36 text-center px-4 py-4 font-medium text-black">
                  Rilis
                </th>
                <th class="text-center px-4 py-4 font-medium text-black">
                  Jml Season & Episode
                </th>
                <th class="text-center px-4 py-4 font-medium text-black">
                  Gratis
                </th>
                <th class="w-29 text-center px-4 py-4 font-medium text-black">
                  Harga
                </th>
                <th class="text-center px-4 py-4 font-medium text-black">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($films as $film)
                <tr>
                  <td class="border-b border-[#eee] px-4 py-5 pl-9 xl:pl-11">                  
                    <p class="text-black">{{ $loop->iteration }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5 ">                  
                    <p class="text-black">{{ $film->title }}</p>
                  </td>
                  @php                                        
                    $release_date = $film->release_date;
                    Carbon::setLocale('id');
                    $formattedDate = Carbon::parse($release_date)->translatedFormat('d F Y');
                  @endphp
                  <td class="border-b border-[#eee] px-4 py-5">                  
                    <p class="text-black">{{ $film->film_category->name }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5">                  
                    <p class="text-black">{{ $formattedDate }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5">
                    <p class="text-black">{{ "S" . $film->season->count() . " - E" . $film->episode->count() }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5">
                    @if ($film->is_free)
                      <p class="inline-flex rounded-full bg-success bg-opacity-20 px-3 py-1 text-sm font-medium text-success">
                        Gratis
                      </p>                      
                    @else
                      <p class="inline-flex rounded-full bg-red-600 bg-opacity-20 px-3 py-1 text-sm font-medium text-red-600">
                        Pay
                      </p>                      
                    @endif
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5">
                    <p class="text-black">Rp {{ number_format($film->price, 0, ',', '.') }}</p>
                  </td>
                  <td class="border-b border-[#eee] px-4 py-5">
                    <div class="flex items-center space-x-3.5">                    
                      <form action="/flixie-admin/dashboard/film/{{ $film->slug }}" method="POST" class="deleteForm">
                        @method("delete")
                        @csrf
                        <button type="submit" class="text-red-500 hover:scale-125 transition-all">
                          <svg class="fill-current size-5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.7535 2.47502H11.5879V1.9969C11.5879 1.15315 10.9129 0.478149 10.0691 0.478149H7.90352C7.05977 0.478149 6.38477 1.15315 6.38477 1.9969V2.47502H4.21914C3.40352 2.47502 2.72852 3.15002 2.72852 3.96565V4.8094C2.72852 5.42815 3.09414 5.9344 3.62852 6.1594L4.07852 15.4688C4.13477 16.6219 5.09102 17.5219 6.24414 17.5219H11.7004C12.8535 17.5219 13.8098 16.6219 13.866 15.4688L14.3441 6.13127C14.8785 5.90627 15.2441 5.3719 15.2441 4.78127V3.93752C15.2441 3.15002 14.5691 2.47502 13.7535 2.47502ZM7.67852 1.9969C7.67852 1.85627 7.79102 1.74377 7.93164 1.74377H10.0973C10.2379 1.74377 10.3504 1.85627 10.3504 1.9969V2.47502H7.70664V1.9969H7.67852ZM4.02227 3.96565C4.02227 3.85315 4.10664 3.74065 4.24727 3.74065H13.7535C13.866 3.74065 13.9785 3.82502 13.9785 3.96565V4.8094C13.9785 4.9219 13.8941 5.0344 13.7535 5.0344H4.24727C4.13477 5.0344 4.02227 4.95002 4.02227 4.8094V3.96565ZM11.7285 16.2563H6.27227C5.79414 16.2563 5.40039 15.8906 5.37227 15.3844L4.95039 6.2719H13.0785L12.6566 15.3844C12.6004 15.8625 12.2066 16.2563 11.7285 16.2563Z" fill=""></path>
                            <path d="M9.00039 9.11255C8.66289 9.11255 8.35352 9.3938 8.35352 9.75942V13.3313C8.35352 13.6688 8.63477 13.9782 9.00039 13.9782C9.33789 13.9782 9.64727 13.6969 9.64727 13.3313V9.75942C9.64727 9.3938 9.33789 9.11255 9.00039 9.11255Z" fill=""></path>
                            <path d="M11.2502 9.67504C10.8846 9.64692 10.6033 9.90004 10.5752 10.2657L10.4064 12.7407C10.3783 13.0782 10.6314 13.3875 10.9971 13.4157C11.0252 13.4157 11.0252 13.4157 11.0533 13.4157C11.3908 13.4157 11.6721 13.1625 11.6721 12.825L11.8408 10.35C11.8408 9.98442 11.5877 9.70317 11.2502 9.67504Z" fill=""></path>
                            <path d="M6.72245 9.67504C6.38495 9.70317 6.1037 10.0125 6.13182 10.35L6.3287 12.825C6.35683 13.1625 6.63808 13.4157 6.94745 13.4157C6.97558 13.4157 6.97558 13.4157 7.0037 13.4157C7.3412 13.3875 7.62245 13.0782 7.59433 12.7407L7.39745 10.2657C7.39745 9.90004 7.08808 9.64692 6.72245 9.67504Z" fill=""></path>
                          </svg>
                        </button>
                      </form>
                      <a href="/flixie-admin/dashboard/film/{{ $film->slug }}/edit" class="text-green-500 hover:scale-125 transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg>
                      </a>
                    </div>
                  </td>
                </tr>                          
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>  
@endsection
@section("js-custom")
  <script src="{{ asset("js/film.js") }}"></script>
@endsection