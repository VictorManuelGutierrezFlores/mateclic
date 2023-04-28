@extends('layout')
@section('content')
<div class="absolute bottom-0 w-full h-screen overflow-hidden" style="background-image:url(/img/fondos/fondo4.svg); background-size: 100%; background-position:bottom; background-repeat: no-repeat;">
    <div class="grid grid-cols-3 grid-rows-5 ">
            <div class="col-start-1 row-start-1 row-end-1 w-1/2 h-52 pr-40 ml-8" style="background-image:url(/img/Recursos/logo1.png); background-size: 50%; background-position:left;background-repeat: no-repeat;"></div>

            <div class="col-start-2 row-start-1 text-3xl font-bold text-center my-auto pt-52">
                Selección del grado <br> de modo de juego
            </div>

            <div class="col-start-2 row-start-2 pt-14 h-32">
                <div class="text-2xl text-center font-bold rounded-xl max-w-sm mx-auto bg-[#7ca3ff] p-7 transition ease-in-out delay-100 hover:-translate-1 hover:scale-110 hover:bg-[#00faaf] duration-300">
                    Primaria
                </div>
            </div>

            <div class="col-start-2 row-start-3 h-32 -mt-24">
                <div class="text-2xl text-center font-bold rounded-xl max-w-sm mx-auto bg-[#7ca3ff] p-7 transition ease-in-out delay-100 hover:-translate-1 hover:scale-110 hover:bg-[#00faaf] duration-300">
                    Secundaria
                </div>
            </div>

            <div class="col-start-2 row-start-4 -mt-64 h-32">
                <div class="text-2xl text-center font-bold rounded-xl max-w-sm mx-auto bg-[#7ca3ff] p-7 transition ease-in-out delay-100 hover:-translate-1 hover:scale-110 hover:bg-[#00faaf] duration-300">
                    Preparatoria
                </div>
            </div>

            <div class="col-start-2 row-start-5 -mt-96 w-2/6 m-auto">
                <a href="/seleccion_grado">
                    <button class="boton3 tres">
                        <span>
                            Iniciar
                        </span>
                    </button>
                </a>
            </div>
    </div>
</div>

@endsection
