@extends('index')

@section('content')

<div class="font-sans w-full">
    <div class=" flex justify-center items-center">
      <div class="w-full ">
        <div class="text-center font-semibold">
          <h1 class="text-8xl pt-20">
            Joki Sekarang
          </h1>
          <p class="pt-6 text-2xl font-normal w-full flex items-center justify-center md:w-full">
            "Malas Nugas! Joki Aja, Ada Kami <img src="img/Logonya.png" class="w-20 rounded-lg bg-gray-800 pr-1 pl-1 m-2 "></img> solusi malas tugas anda"
          </p>
        </div>


        <div class="flex pt-24 items-center justify-center">
          <!-- Card di tengah halaman -->
          <div class="w-80 p-8 bg-gray-900 text-center rounded-3xl text-white border-4 shadow-xl border-white transform scale-125 ">
            <h1 class="text-white font-semibold text-2xl">Free</h1>
            <p class="pt-2 tracking-wide">
              <span class="text-gray-400 align-top">Rp </span>
              <span class="text-3xl font-semibold">0</span>
              <span class="text-gray-400 font-medium">/ user</span>
            </p>
            <hr class="mt-4 border-1 border-gray-600" />
            <div class="pt-8">
              <p class="font-semibold text-gray-400 text-left">
                <span class="material-icons align-middle"> done </span>
                <span class="pl-2">
                  Konsultasi <span class="text-white">Gratissss</span>
                </span>
              </p>
              <p class="font-semibold text-gray-400 text-left pt-5">
                <span class="material-icons align-middle"> done </span>
                <span class="pl-2">
                  Curhat <span class="text-white">Bolehhhhh</span>
                </span>
              </p>
              <p class="font-semibold text-gray-400 text-left pt-5">
                <span class="material-icons align-middle"> done </span>
                <span class="pl-2">
                  <span class="text-white">Selamanya</span> ,Kecuali Kiamat
                </span>
              </p>

              <a href="#" class="">
                <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                  <span class="font-medium"> Whatsapp </span>
                </p>
              </a>
            </div>
            <div class="absolute top-4 right-4">
              <p
                class="bg-blue-700 font-semibold px-4 py-1 rounded-full uppercase text-xs"
              >
                Popular
              </p>
            </div>
          </div>
        </div>

        <div class=" flex justify-center">
            @foreach ($produk as $item)
            <div class=" flex justify-center">

                    <div class="pt-24  flex justify-center m-8">
                        <div class="w-96 p-8  justify-center  bg-white text-center rounded-3xl  shadow-xl">
                        <h1 class="text-black font-semibold text-2xl">{{ $item->nama_produk }}</h1>
                        <p class="pt-2 tracking-wide">
                            <span class="text-gray-400 align-top">IDR </span>
                            <span id="harga" class="text-3xl font-semibold">{{ $item->harga_produk }}</span>
                            <span class="text-gray-400 font-medium">/ project</span>
                        </p>
                        <hr class="mt-4 border-1" />
                        <div class="pt-8">
                            <p class="font-semibold text-gray-400 text-left">
                            <span class="material-icons align-middle"> done </span>
                            <span class="pl-2">{{ $item->desk }}</span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle"> done </span>
                            <span class="pl-2">{{ $item->waktu }}</span>
                            </p>
                            <p class="font-semibold text-gray-400 text-left pt-5">
                            <span class="material-icons align-middle"> done </span>
                            </p>
        
                            <a href="#" class="">
                            <p class="w-full py-4 bg-blue-600 mt-8 rounded-xl text-white">
                                <span class="font-medium"> Whatsapp </span>
                            </p>
                            </a>
                        </div>
                    </div>
            </div>
                    
            @endforeach
        </div>

      </div>
    </div>
    <!-- component timeline atau roadmap-->
</div>

<div class="flex p-10 justify-center w-full">
    <div class="  justify-center bg-gray-900 text-white w-full rounded-3xl    " style="border: 6px solid white">
      <div class="relative wrap rounded-lg overflow-hidden p-10 h-full">
          <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border" style="left: 50%">
          </div>
          <!-- right timeline -->
          <div class="mb-8 flex justify-between items-center w-full right-timeline">
          <div class="order-1 w-5/12"></div>
          <div
              class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full"
          >
              <h1 class="mx-auto font-semibold text-lg text-white">1</h1>
          </div>
          <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
              <h3 class="mb-3 font-bold text-gray-800 text-xl">
              Pilih Paket Joki
              </h3>
              <p
              class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100"
              >
              Pertama, pilih paket joki yang sesuai dengan kebutuhan Anda. Ini
              mungkin termasuk jenis layanan dan durasi kerja.
              </p>
          </div>
          </div>
    
          <!-- left timeline -->
          <div
          class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
          >
          <div class="order-1 w-5/12"></div>
          <div
              class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full"
          >
              <h1 class="mx-auto text-white font-semibold text-lg">2</h1>
          </div>
          <div
              class="order-1 bg-blue-600 rounded-lg shadow-xl w-5/12 px-6 py-4"
          >
              <h3 class="mb-3 font-bold text-white text-xl">Hubungi WhatsApp</h3>
              <p
              class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100"
              >
              Hubungi joki melalui WhatsApp atau media komunikasi lainnya untuk
              membahas detail pekerjaan yang perlu dilakukan.
              </p>
          </div>
          </div>
    
          <!-- right timeline -->
          <div
          class="mb-8 flex justify-between items-center w-full right-timeline"
          >
          <div class="order-1 w-5/12"></div>
          <div
              class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full"
          >
              <h1 class="mx-auto font-semibold text-lg text-white">3</h1>
          </div>
          <div class="order-1 bg-white rounded-lg shadow-xl w-5/12 px-6 py-4">
              <h3 class="mb-3 font-bold text-gray-800 text-xl">
              Konfirmasi dengan Admin Joki
              </h3>
              <p
              class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100"
              >
              Setelah berbicara dengan joki, konfirmasi detail pekerjaan dan
              harga dengan admin joki atau pihak yang berwenang.
              </p>
          </div>
          </div>
    
          <!-- left timeline -->
          <div
          class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline"
          >
          <div class="order-1 w-5/12"></div>
          <div
              class="z-20 flex items-center order-1 bg-gray-800 shadow-xl w-8 h-8 rounded-full"
          >
              <h1 class="mx-auto text-white font-semibold text-lg">4</h1>
          </div>
          <div
              class="order-1 bg-blue-600 rounded-lg shadow-xl w-5/12 px-6 py-4"
          >
              <h3 class="mb-3 font-bold text-white text-xl">Pembayaran</h3>
              <p
              class="text-sm font-medium leading-snug tracking-wide text-white text-opacity-100"
              >
              Terakhir, lakukan pembayaran sesuai dengan kesepakatan untuk
              memulai pekerjaan dengan joki.
              </p>
          </div>
          </div>
      </div>
    </div>

</div>


@endsection