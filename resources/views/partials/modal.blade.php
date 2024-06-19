 <section>
   <!-- Modal Login -->
   <div id="login-modal" class="hidden size-full fixed justify-center z-50 top-0 items-center">
     <div class="relative p-4 w-full max-w-md max-h-full box-content">
       <div class="relative rounded-2xl p-4 shadow bg-dark-blue-1000">
         <!-- Modal header -->
         <div class="flex flex-col items-center justify-between gap-y-2 p-4 md:p-5 rounded-t">
           <div><img src="./public/images/flixie-logo.png" class="w-[84px]" alt="Flixie Logo "></div>
           <h5 class="text-h5 font-bold text-white">Halo Flixier</h5>
           <button type="button"
             class="absolute top-4 right-3 text-white bg-transparent hover:bg-pink-500 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
             data-modal-hide="login-modal">
             <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
             </svg>
           </button>
         </div>
         <!-- Modal body -->
         <div class="p-4 md:p-5">
           <form class="space-y-4" action="#">
             <div>
               <label for="email-login" class="block mb-2 text-bnormal font-medium text-white">Email</label>
               <input type="email" name="email-login" id="email-login"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="example@gmail.com" required autocomplete="off" />
             </div>
             <div>
               <label for="password-login" class="block mb-2 text-bnormal font-medium text-white">Password</label>
               <input type="password" name="password-login" id="password-login" placeholder="••••••••"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 required />
             </div>
             <div class="flex justify-between">
               <div class="flex items-start">
                 <div class="flex items-center h-5">
                   <input id="remember" type="checkbox" value=""
                     class="w-4 h-4 border border-lagoon-500 rounded bg-dark-blue-1000 focus:ring-2 focus:ring-lagoon-600 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600"
                     required />
                 </div>
                 <label for="remember" class="ms-2 text-bsm font-medium text-white">Ingat saya</label>
               </div>
               <a href="#" class="text-bsm font-semibold text-white hover:underline underline-offset-3">Lupa
                 Password?</a>
             </div>
             <button type="submit"
               class="w-full text-black bg-neon-300 hover:bg-neon-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center transition-all duration-300 hover:scale-105">Masuk
               ke akunmu</button>
             <div class="text-sm font-light text-white">
               Tidak punya akun? <span id="linkedRegister" class="cursor-pointer font-medium hover:underline"
                 data-modal-target="register-modal" data-modal-toggle="register-modal">Daftar sekarang</span>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>

   <!-- Modal Register -->
   <div id="register-modal" class="hidden size-full fixed justify-center z-50 top-0 items-center">
     <div class="relative p-4 w-full max-w-md max-h-full box-content">
       <div class="relative rounded-2xl p-4 shadow bg-dark-blue-1000">
         <!-- Modal header -->
         <div class="flex flex-col items-center justify-between gap-y-2 p-4 md:p-5 rounded-t">
           <div><img src="./public/images/flixie-logo.png" class="w-[84px]" alt="Flixie Logo "></div>
           <h5 class="text-h5 font-bold text-white">Daftar Akun Flixie</h5>
           <button type="button"
             class="absolute top-4 right-3 text-white bg-transparent hover:bg-pink-500 hover:text-black rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
             data-modal-hide="register-modal">
             <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
               viewBox="0 0 14 14">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
             </svg>
           </button>
         </div>
         <!-- Modal body -->
         <div class="p-4 md:p-5">
           <form class="space-y-4" action="#">
             <div class="block inputGroups">
               <label for="email" class="block mb-2 text-bnormal font-medium text-white">Email</label>
               <input type="email" name="email" id="email"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="example@gmail.com" required autocomplete="off" />
             </div>
             <div class="block inputGroups">
               <label for="username" class="block mb-2 text-bnormal font-medium text-white">Username</label>
               <input type="text" name="username" id="username"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="myusername" required autocomplete="off" />
             </div>
             <div class="block inputGroups">
               <label for="fullname" class="block mb-2 text-bnormal font-medium text-white">Nama Lengkap</label>
               <input type="text" name="fullname" id="fullname"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="Sun Jinwoo" required autocomplete="off" />
             </div>
             <div class="hidden inputGroups">
               <label for="password" class="block mb-2 text-bnormal font-medium text-white">Password</label>
               <input type="password" name="password" id="password"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="••••••••" required autocomplete="off" />
             </div>
             <div class="hidden inputGroups">
               <label for="confirmPassword" class="block mb-2 text-bnormal font-medium text-white">Konfirmasi
                 Password</label>
               <input type="password" name="confirmPassword" id="confirmPassword"
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                 placeholder="••••••••" required autocomplete="off" />
             </div>


             <div class="flex justify-between">
               <ul id="bullets" class="flex gap-x-1 items-end">
                 <li>
                   <div class="size-3 rounded-full bg-white transition-all duration-300 ease-out"></div>
                 </li>
                 <li>
                   <div class="size-3 rounded-full border border-white transition-all duration-300 ease-out"></div>
                 </li>
               </ul>
               <div class="flex gap-x-3">
                 <a id="btnNext"
                   class="flex text-black bg-neon-300 hover:bg-neon-400 hover:scale-105 transition-all ease-in font-bold rounded-lg text-bnormal px-4 py-2 text-center cursor-pointer">
                   <span>Next</span>
                   <svg class="size-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="m9 5 7 7-7 7" />
                   </svg>
                 </a>
                 <a id="btnBack"
                   class="hidden text-black bg-neon-300 hover:bg-neon-400 hover:scale-105 transition-all ease-in font-bold rounded-lg text-bnormal px-4 py-2 text-center cursor-pointer">
                   <svg class="inline-block size-6 text-gray-800" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                       d="m15 19-7-7 7-7" />
                   </svg>
                   <span>Back</span>
                 </a>
                 <button id="btnRegister"
                   class="hidden text-black font-bold bg-lagoon-500 hover:bg-lagoon-400 hover:scale-105 transition-all ease-in rounded-lg text-bnormal px-4 py-2 text-center">
                   Daftar
                 </button>
               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>
