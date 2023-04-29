@extends('layout')
@section('content')

<div class="absolute bottom-0 w-full h-full" style="background-image:url(/img/recursos/confetti.gif); background-size: 100%; background-position:bottom; background-repeat: no-repeat;">
    <div class="grid grid-cols-3 grid-rows-6 w-3/4 m-auto">
        <div class="col-start-1 col-span-3 text-6xl font-bold text-center pt-8">
            ¡Excelente!
        </div>

        <div class="col-start-2 row-start-2 row-span-2" style="background-image:url(/img/recursos/feliz.png); background-size: 50%; background-position:bottom; background-repeat: no-repeat;"></div>
        <div class="col-start-2 row-start-4 text-4xl font-semibold pt-12">Jugador: Victor</div>

        <div class="col-start-2 w-3/4 row-start-5 text-4xl font-semibold pt-8">Preguntas correctas: </div>

        <div class="col-start-3 row-start-5 -ml-32 my-auto">
            <div class="w-24 h-16 bg-[#85d1ee] pt-4 text-center rounded-lg text-2xl font-bold">
                25/25
            </div>
        </div>

        <div class="col-start-2 row-start-6 w-2/4 mx-auto mt-10">
            <a href="/revision">
                <button class="boton7 siete">
                    <span>
                        Revisar
                    </span>
                </button>
            </a>
        </div>

        <div class="col-start-2 row-start-7 w-2/4 mx-auto mt-10">
            <a href="/">
                <button class="boton7 siete">
                    <span>
                        Volver a jugar
                    </span>
                </button>
            </a>
        </div>
    </div>
</div>

@endsection
