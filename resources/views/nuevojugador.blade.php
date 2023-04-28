@extends('layouts.layout')
@section('content')

<div class="space-y-1 pb-8 bg-fixed flex-col " style="background-image:url(/img/logo_rule-png.png);background-size: 15%; background-position:left top;background-repeat: no-repeat;">
    <div class="flex-col max-w-sm mx-auto mt-0 space-y-5 p-5 rounded-t-lg rounded-b-lg ">
        <form method="POST" target="{{route('jugando.create')}}">
            @csrf
            <p class="font-just text-center pb-0 pt-20 mb-4 text-6xl">Ingresa tu nombre</p>
            <div class="rounded-xl max-w-sm mx-auto my-3 text-black bg-[#1CD6CE] p-7 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 hover:bg-[#1CD6CE] duration-300">
                <input class="text-center block w-full rounded-md font-just text-4xl placeholder-black" 
                placeholder="Nombre" style="background-color:transparent;" name="playername" value=""></input>
            </div>
            <!--Boton para iniciar juego-->
            <button type="submit" class="text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just text-4xl rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 mr-2 mb-2">
                <span>
                    Empezar partida
                </span>
            </button>
        </form>

        <div class="flex-col max-w-sm mx-auto mt-3 space-y-5 p-5 rounded-t-lg rounded-b-lg">
            <!--BOTONO REGRESAR INDEX-->
            <button type="button" class="text-white bg-[#D61C4E] hover:bg-[#D61C4E]/90 focus:ring-4 focus:outline-none focus:ring-[#D61C4E]/50 font-just text-4xl rounded-lg py-1.5 px-5 text-center inline-flex items-center dark:focus:ring-[#D61C4E]/55 ">
                <a href="{{ route('home') }}">
                    <span class="text-3xl">
                        Regresar
                    </span>
                </a>
            </button>
        </div>

</div>

    @endsection