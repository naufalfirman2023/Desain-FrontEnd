@extends('index')

@section('content')
    
<div class="flex justify-center">
    <div class="pt-10 inline-block">
        <h2 class="text-4xl text-center font-semibold text-gray-800 mb-8">Tim Kami</h2>
        <div class="grid grid-cols flex justify-content md:grid-cols-3 gap-4">
        </div>
    </div>
</div>
<div class="slider">
    @foreach ($data_team as $item)
        <div class="item max-w-sm bg-white rounded-lg overflow-hidden shadow-lg w-75">
            <div class="flex justify-center items-center ">
                <img class=" h-64 w-99 " src="/img/{{ $item->img }}" alt="{{ $item->img }}">
            </div>
            <div class="px-10 py-4">
                <div class="font-bold text-xl mb-2">{{ Str::upper($item->nama_pengurus) }}</div>
                <div class="flex">
                    <button type="button" onclick="location.href='{{ $item->link_ig }}'" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded-full p-2 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #c13584">
                        <svg  xmlns="http://www.w3.org/2000/svg"  class="h-4 w-4"  fill="currentColor"  viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </button>
                    <p class="text-gray-700  text-sm/[17px] px-2 pt-1">{{ $item->about }}</p>
                    <p class="text-gray-700  text-sm/[17px] px-2 pt-1">{{ $item->npm }}</p>
                </div>
            </div>
        </div>
    @endforeach


    <button id="next">></button>
    <button id="prev"><</button>
</div>


<style>
.slider{
    margin-top: 90px;
  position: relative;
  width: 100%;
  height: 450px;
  overflow: hidden;
}
.item{
  position: absolute;

  text-align: justify;
  background-color: #fff;
  padding: 20px;
  transition: 0.5s;
  left: calc(50% - 110px);
  top: 0;
}
#next, #prev{
  position: absolute;
  top: 40%;
  color: #fff;
  background-color: transparent;
  border: none;
  font-size: xxx-large;
  font-family: monospace;
  font-weight: bold;
  left: 400px;
}
#next{
  left: unset;
  right: 400px;
}
</style>


<script>
    let items = document.querySelectorAll('.slider .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');
    
    let active = 3;
    function loadShow(){
        let stt = 0;
        items[active].style.transform = `none`;
        items[active].style.zIndex = 1;
        items[active].style.filter = 'none';
        items[active].style.opacity = 1;
        for(var i = active + 1; i < items.length; i++){
            stt++;
            items[i].style.transform = `translateX(${120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(-1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
        stt = 0;
        for(var i = active - 1; i >= 0; i--){
            stt++;
            items[i].style.transform = `translateX(${-120*stt}px) scale(${1 - 0.2*stt}) perspective(16px) rotateY(1deg)`;
            items[i].style.zIndex = -stt;
            items[i].style.filter = 'blur(5px)';
            items[i].style.opacity = stt > 2 ? 0 : 0.6;
        }
    }
    loadShow();
    next.onclick = function(){
        active = active + 1 < items.length ? active + 1 : active;
        loadShow();
    }
    prev.onclick = function(){
        active = active - 1 >= 0 ? active - 1 : active;
        loadShow();
    }
</script>

@endsection