@extends('layout')
@section('content')
<div class="absolute bottom-0 w-full h-full" style="background-image:url(/img/fondos/fondo2.svg); background-size: 100%; background-position:bottom; background-repeat: no-repeat;">
    <div class="grid grid-cols-3 grid-rows-2">
            <div class="col-start-1 row-start-1 row-end-1 w-1/2 h-20 pr-40 ml-8" style="background-image:url(/img/Recursos/logo2.png); background-size: 100%; background-position:left;background-repeat: no-repeat;"></div>

            <div class="col-start-2 row-start-1 text-3xl font-bold text-center my-auto pt-52">
                Inserta el nombre del jugador
            </div>

            <div class="col-start-2 row-start-2 pt-14 h-32">
                <div class="rounded-xl max-w-sm mx-auto bg-[#8afad9] p-3 transition ease-in-out delay-100 hover:-translate-1 hover:scale-110 hover:bg-[#00faaf] duration-300">
                    <input class="text-center block w-full rounded-md font-just text-2xl text-black placeholder-black h-20" placeholder="Inserte nombre" style="background-color:transparent;" name="equipo" value=""></input>
                </div>
            </div>

            <div class="col-start-2 row-start-3 -mt-6 w-4/6 m-auto">
                <section class="grid-cols-2 grid flex-row">
                    <div class="col-start-1 w-3/4 mx-auto">
                        <a href="/">
                            <button class="boton2 dos">
                                <span>
                                    regresar
                                </span>
                            </button>
                        </a>
                    </div>
                    <div class="col-start-2 w-3/4 mx-auto">
                        <a href="/seleccion_grado">
                            <button class="boton2 dos">
                                <span>
                                    Iniciar
                                </span>
                            </button>
                        </a>
                    </div>
                </section>

            </div>
    </div>
</div>


    @endsection
