<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MateClic</title>
    @vite('resources/css/app.css')
</head>

<body>
    
    @yield('content')
    <!--PIE DE PAGINA-->
    <footer class="bg-transparent text-black py-5 mt-7 text-right text-xl w-full absolute bottom-0">
        <div class="font-just text-4xl pr-3">Benémerita Universidad Autónoma de Puebla</div>
        <div class="font-just text-3xl pr-3">Facultad de Ciencias de la Computación</div>
    </footer>
</body>
</html>