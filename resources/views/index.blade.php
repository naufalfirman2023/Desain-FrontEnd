<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    
    <title>Tugas</title>
</head>
<body class="bg-gradient-to-r from-blue-500 via-blue-200 to-blue-200 flex flex-col min-h-screen">
    @include('layout.navbar')

        @yield('content')

    @include('layout.footer')

</body>
</html>