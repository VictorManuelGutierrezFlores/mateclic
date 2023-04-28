<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MateClic</title>
    @vite('resources/css/app.css')
</head>

<body class="m-0 p-0 max-h-screen">
    @yield('content')
    <!--PIE DE PAGINA-->
    <footer class="bg-transparent text-black py-5 font-semibold mt-7 text-right text-xl w-full absolute bottom-0 grid grid-rows-2">
        <div class="row-star-1  text-2xl pr-3">Benémerita Universidad Autónoma de Puebla</div>
        <div class="row-star-2  text-xl pr-3">Facultad de Ciencias de la Computación</div>
    </footer>
</body>
</html>
