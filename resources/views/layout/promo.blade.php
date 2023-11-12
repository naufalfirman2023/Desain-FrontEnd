@extends('index')

@section('content')
    <head>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <div class="wrapper">
        <div id="final-value">
            <p>Klik Spin untuk Mendapatkan Promo</p>
        </div>
        <div class="container">
            <canvas id="wheel"></canvas>
            <button id="spin-btn">Spin</button>
            <img src="img/left-arrow.png" alt="spinner-arrow" />
        </div>

    </div>

    <!-- Chart JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- Chart JS Plugin for displaying text over chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"></script>
    <!-- Script -->
    <script src="/js/app.js"></script>
    
@endsection