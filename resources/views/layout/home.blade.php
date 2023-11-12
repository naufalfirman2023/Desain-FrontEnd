
@extends('index')

@section('content')
    
<div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="ml6">
                <span class="text-wrapper">
                    <span class="letters">Selamat Datang di Joki Sujilah</span>
                </span>
            </h1>
            <p class="mt-4 text-lg">
                Selamat datang di dunia jasa joki tugas terbaik! Kami dengan bangga memperkenalkan tim joki profesional kami yang siap membantu Anda dalam menyelesaikan berbagai tugas dengan cepat, efisien, dan berkualitas tinggi. Kami memiliki joki-joki berpengalaman yang telah membantu banyak klien dengan kesuksesan dalam berbagai bidang.
            </p>
            <a href="/produk" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-lg">Mulai Sekarang</a>
        </div>
    </div>
</div>  


<!-- Kenapa Memilih Kami -->
<div class="bg-gray-100 py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-semibold text-gray-900 text-center mb-8">Kenapa Memilih Layanan Joki Kami?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Poin 1 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">1. Profesional dan Berpengalaman</h3>
                <p class="text-gray-700">Tim joki kami terdiri dari para profesional yang memiliki pengalaman dalam berbagai jenis layanan joki.</p>
            </div>
            
            <!-- Poin 2 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">2. Efisien dan Terpercaya</h3>
                <p class="text-gray-700">Kami menyediakan layanan yang efisien dan dapat Anda andalkan, sehingga Anda dapat fokus pada hal lain yang lebih penting.</p>
            </div>

            <!-- Poin 3 -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">3. Beragam Pilihan</h3>
                <p class="text-gray-700">Kami menawarkan berbagai jenis layanan joki untuk memenuhi kebutuhan Anda, mulai dari permainan hingga tugas online.</p>
            </div>

            <!-- Poin 4 (Baru) -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">4. Hasil Berkualitas</h3>
                <p class="text-gray-700">Kami selalu berusaha untuk memberikan hasil yang berkualitas tinggi sehingga Anda puas dengan layanan kami.</p>
            </div>

            <!-- Poin 5 (Baru) -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">5. Dukungan 24/7</h3>
                <p class="text-gray-700">Kami siap memberikan dukungan 24/7 untuk menjawab pertanyaan Anda dan membantu Anda dengan layanan kami.</p>
            </div>
            <!-- Poin 6 (Baru) -->
            <div class="bg-white rounded-lg p-6 shadow-md">
                <h3 class="text-xl font-semibold mb-2">6. Keamanan Privacy</h3>
                <p class="text-gray-700">kami siap menjaga kerahasiaan privasi clien .</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100 py-24">
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="flex justify-center mb-10 text-6xl font-semibold">Testimoni</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-10">
            <div class="flex items-center">
                <img src="img/abel.jpg" alt="Layanan 1" class="w-48 h-48 rounded-full object-cover">
            </div>
            <div>
                <h2 class="text-3xl font-semibold">Initial - Raden Abel</h2>
                <p class="mt-4 text-lg">Proses joki yang mudah dan menyenangkan, praktisi joki sangat sangat handal dibidangnya</p>
            </div>
        </div>
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-semibold">Initial - Esa Age </h2>
                <p class="mt-4 text-lg">Cepat amanah ,singkat padat jelas dan murah.</p>
            </div>
            <div class="flex items-center">
                <img src="img/esa.jpg" alt="Layanan 2" class="w-48 h-48 rounded-full object-cover">
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<style>
    .ml6 {
    position: relative;
    font-weight: 900;
    font-size: 3.3em;
    }

    .ml6 .text-wrapper {
    position: relative;
    display: inline-block;
    padding-top: 0.2em;
    padding-right: 0.05em;
    padding-bottom: 0.1em;
    overflow: hidden;
    }

    .ml6 .letter {
    display: inline-block;
    line-height: 1em;
    }
</style>

<script>
    var textWrapper = document.querySelector('.ml6 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
        targets: '.ml6 .letter',
        translateY: ["1.1em", 0],
        translateZ: 0,
        duration: 1000,
        delay: (el, i) => 50 * i
    }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 1250
    });
</script>
@endsection