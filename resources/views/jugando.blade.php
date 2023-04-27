@extends('layout')
@section('content')

<div class="space-y-1 pb-8 bg-fixed flex-col" style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
    <p class="text-center font-just text-6xl pb-5 pt-20">¡El juego ha comenzado!</p>
    <div class=" h-96 columns-3 flex-col grid-rows-6 grid-flow-col gap-0 mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg max-w-4xl">
        <!--columna 1-->
        <div class="rounded-xl max-w-sm mx-auto text-black bg-[#1CD6CE] equipos">
            <p class="font-just text-4xl text-center" id="player">{{$PlayerInfo['player']}}</p>
        </div>
    <!--botones-->
    <div class="flex-col max-w-sm mx-auto mt-6 space-y-5 p-5 rounded-t-lg rounded-b-lg">
        <!--BOTON PARA REGRESAR A PAGINA CREAR EQUIPOS-->
        <button type="button" class="text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
            <a href="/crearequipos">
                <span class="px-5">
                    Regresar
                </span>
            </a>
        </button>
        <!--Boton para finalizar juego-->
        <button type="button" class="text-4xl text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
            
            <a href="/resultados/{{$PlayerInfo['player']}}/">
                <span>
                    Finalizar juego
                </span>
            </a>
        </button>
    </div>
</div>

@endsection