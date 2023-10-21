@extends('index')

@section('content')

<div class="md:max-lg:flex ">
  {{-- Ini Textnya Ya dar --}}
  <div class="font-semibold text-center sm:text-center">
    <h3 class=" sm:text-6xl text-4xl pt-20 ">Joki Sekarang</h3>
    <p class="sm:pt-6 pt-1 flex justify-center items-center sm:text-2xl text-xs font-normal">
      "Malas Nugas! Joki Aja, Ada Kami <img src="img/Logonya.png" class="sm:w-20 w-11 rounded-lg bg-gray-800 m-2 p-1  "></img> solusi malas tugas anda"
    </p>
  </div>

  {{-- Ini hitam Cardnya Darrrr --}}
  <div class="sm:pt-20 pt-10 flex justify-center">
    <div class="sm:w-80 sm:p-8 w-60 p-4 bg-gray-900 text-center sm:rounded-3xl rounded-2xl text-white  border-4 shadow-xl border-white transform sm:scale-125 transform scale-62">
      <h1 class="text-white font-semibold sm:text-2xl text-lg">Free</h1>
      <p class="sm:pt-2 pt-1 tracking-wide">
        <span class="text-gray-400 align-top">Rp </span>
        <span class="sm:text-3xl text-xl font-semibold">0</span>
        <span class="text-gray-400 font-medium">/ user</span>
      </p>

      <hr class="sm:mt-4 mt-2 border-1 border-gray-600"/>
      
      <div class="sm:text-base text-xs">
  
        <div class="sm:pt-8 pt-6">
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
            <p class="w-full sm:py-4 py-3 bg-blue-600 sm:mt-4 mt-2 rounded-xl text-white">
              <span class="font-medium"> Whatsapp </span>
              <span class="pl-2 material-icons align-middle text-sm">
                east
              </span>
            </p>
          </a>
        </div>
      </div>

    </div>
  </div>

{{-- ini card putihnya  --}}

  <div class="md:flex shrink-0 justify-center">
    @foreach ($produk as $item)
      <div class="flex sm:pt-20 pt-18 sm:m-8 m-4">
        <div class="w-96 p-8 bg-white text-center rounded-3xl  shadow-xl">
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
                  <span class="font-medium"> Order </span>
              </p>
              </a>
          </div>
        </div>
      </div>
            
    @endforeach
  </div>
</div>





@endsection