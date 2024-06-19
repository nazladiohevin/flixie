@extends('layout.main')
@section('tab-title')
  Tentang Kami - Flixie
@endsection
@section('content')
  <main>
    <!-- Description -->
    <header>
      <div class="mx-auto container px-6 xl:px-24">
        <div class="flex justify-center items-center h-screen">
          <h1 class="text-4xl leading-snug md:text-h1 font-bold text-white text-center animate-bounce">KENALI KAMI LEBIH
            DEKAT</h1>
        </div>
        <div class="flex flex-col justify-between items-center gap-16 md:flex-row">
          <div class="w-full lg:w-1/2">
            <img src="../../public/images/image.png" alt="our loved" class="w-full object-center" />
          </div>
          <div class="w-full lg:w-1/2">
            <p>
              Visi Flixie adalah menjadi platform Streaming on Demand terdepan
              yang mendorong akses hiburan digital yang lebih luas untuk semua
              kalangan. Flixie memiliki misi untuk mengakselerasi transisi
              Indonesia menuju dunia digital melalui Hiburan-hiburan yang
              berkualitas dan memanjakan mata.
            </p>
            <br />
            <p>
              Kini semua orang tanpa terkecuali bergerak menuju hiburan digital
              yang bertumpu pada inovasi teknologi di dalam industri hiburan
              Film/Series. Kami yakin layanan Streaming on Demand adalah kebutuhan
              tidak primer bagi sebagian orang yang masih sangat efektif untuk
              melepas penat.
            </p>
            <br />
            <p>
              Flixie hadir sebagai platform Streaming on Demand yang mengakomodasi
              tayangan-tayangan berstandar global. Semua demi menghadirkan
              platform hiburan yang accessible dan modern.
            </p>
          </div>
        </div>
      </div>
    </header>

    <!-- My Team -->
    <section>
      <div class="mt-52 mx-auto container px-6 xl:px-24">
        <div>
          <div class="mt-10 mb-28 w-full text-center">
            <p class="text-xl font-bold">
              <span style="letter-spacing: 0.05em">The Team</span>
            </p>
            <h4 class="text-4xl font-bold">The People of FLIXIE</h4>
          </div>
          <div
            class="grid grid-cols-1 gap-x-28 lg:gap-x-20 xl:gap-x-28 gap-y-20 place-content-center sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex flex-col items-center text-center group">
              <div class="rounded-[35px] overflow-hidden h-72 w-full  lg:h-96">
                <img src="../../public/images/hevin.png" alt="hevin"
                  class="w-full h-full object-cover object-top group-hover:scale-150 transition-all duration-300 ease-in-out" />
              </div>
              <div>
                <h5 class="text-h5 font-bold mt-5">Nazla Dio Hevin</h5>
                <p class="text-xl">Leader Team, Fullstack Web Developer</p>
              </div>
            </div>
            <div class="flex flex-col items-center text-center group">
              <div class="rounded-[35px] overflow-hidden h-72 lg:h-96">
                <img src="../../public/images/gunawan.png" alt="gunawan"
                  class="w-full h-full object-cover object-top group-hover:scale-150 transition-all duration-300 ease-in-out" />
              </div>
              <div>
                <h5 class="text-h5 font-bold mt-5">Gunawan Sylvester</h5>
                <p class="text-xl">
                  Project Manager
                </p>
              </div>
            </div>
            <div class="flex flex-col items-center text-center group">
              <div class="rounded-[35px] overflow-hidden h-72 w-full lg:h-96">
                <img src="../../public/images/agung.png" alt="agung"
                  class="w-full h-full object-cover object-top group-hover:scale-150 transition-all duration-300 ease-in-out" />
              </div>
              <div>
                <h5 class="text-h5 font-bold mt-5">M. Agung Reza Yudha</h5>
                <p class="text-xl">
                  Backend Web Developer, Photographer
                </p>
              </div>
            </div>
            <div class="flex flex-col items-center text-center group">
              <div class="rounded-[35px] overflow-hidden h-72 w-full lg:h-96">
                <img src="../../public/images/hayya.jpg" alt="hayya"
                  class="w-full h-full object-cover object-top group-hover:scale-150 transition-all duration-300 ease-in-out" />
              </div>
              <div>
                <h5 class="text-h5 font-bold mt-5">Hayya Rasykah Ningrum</h5>
                <p class="text-xl">
                  UI/UX Designer, Data Analytics
                </p>
              </div>
            </div>
            <div class="flex flex-col items-center text-center overflow-hidden group">
              <div class="rounded-[35px] overflow-hidden h-72 w-full  lg:h-96">
                <img src="../../public/images/niken.jpg" alt="niken"
                  class="w-full h-full object-cover object-top group-hover:scale-150 transition-all duration-300 ease-in-out" />
              </div>
              <div>
                <h5 class="text-h5 font-bold mt-5">Niken Puspitaningrum</h5>
                <p class="text-xl">
                  Frontend Web Developer, Content Writer
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
