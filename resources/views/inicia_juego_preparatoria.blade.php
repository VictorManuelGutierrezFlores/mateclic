@extends('layout')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script>
    let tiempo = 10
    let contador = 0
    let contando = false

    var suspender_sonido = new Audio('sounds/alarma.mp3');
    var clic1 = new Audio('sounds/s-click-002.ogg')
    var clic2 = new Audio('sounds/s-click-004.ogg')
    suspender()

    function temporizar() {
        let t = tiempo - contador
        contando = t > 0
        if (contador % 2 == 0) {
            select_id("frente3").innerHTML = t
            clic1.play()
        } else {
            select_id("atras3").innerHTML = t
            clic2.play()
        }

        style("moneda3").transform = `rotateY(${180 * contador}deg)`
        if (contando) {
            contador++
            setTimeout(() => {
                temporizar()
            }, 1000);
        } else {
            suspender()
            suspender_sonido.play()
        }
    }

    function suspender() {
        contador = 0
        select_id("frente3").innerHTML = `<i class="fas fa-stopwatch"></i>
        <span style="font-size:20%; font-just; opacity:0.5">Empezar</span>`;
        select_id("atras3").innerHTML = `
        <i class="fas fa-stopwatch"></i>
        <span style="font-size:20%; font-just; opacity:0.5">!Se acabó¡</span>`;
    }

    async function tomarTiempo() {

        const {
            value: tiempo_input
        } = await swal.fire({
            title: "¡Tienen 15 minutos para jugar!",
            showCancelButton: true
        })
        if (!tiempo_input) {
            return
        }
        tiempo = 2
        contador = 0
        if (!contando) {
            temporizar()
        }
    }

    function style(id) {
        return select_id(id).style
    }

    function select_id(id) {
        return document.getElementById(id)
    }
</script>
<!--Final del script-->

<div class="absolute bottom-0 w-full h-full" style="background-image:url(/img/fondos/fondo7.svg); background-size: 100%; background-position:bottom; background-repeat: no-repeat;">
    <div class="grid grid-cols-10 grid-rows-12 w-full">
        <!--logo de la pagina-->
        <div class="col-start-1 col-span-2 h-20 pr-40 ml-8 mt-2" style="background-image:url(/img/Recursos/logo2.png); background-size: 100%; background-position:top;background-repeat: no-repeat;"></div>
        <!--texto de inicia juego-->
        <div class="col-start-5 col-span-2 row-start-2 h-36 text-6xl font-semibold text-center">
            !El juego a comenzado¡
        </div>

        <!--temporizador-->
        <div class="col-start-8 col-span-2 row-span-5">
            <div>
                <p class="text-4xl text-center pt-1 pb-4 font-semibold">Haz click para iniciar el temporizador</p>
            </div>

            <div class="col-start-5 col-end-6 row-start-3 row-end-6">
                <div class="contenedor3">
                    <div class="moneda3" id="moneda3" onclick="tomarTiempo()">
                        <div class="lado3 frente3" id="frente3"><i class="fas fa-stopwatch"></i>
                            <span style="font-size:20%; font-just; opacity:0.5">
                            Empezar
                            </span>
                        </div>
                        <div class="lado3 atras3" id="atras3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Nombre del ejercicio-->
        <div class="col-start-4 col-span-2 row-start-6 text-3xl font-semibold text-left">
            Ejercicio 1:
        </div>
        <!--numero de preguntas actualues-->
        <div class="col-start-6 col-span-2 row-start-6 text-3xl font-semibold text-right">
            1/25
        </div>
        <!--recuadro de ejercicios-->
        <div class="col-start-4 col-span-4 row-start-7 pt-8">
            <div class="w-full cont_prep rounded-lg bg-gray-400/25 pt-8">
                <div class="grid grid-cols-4 grid-rows-4 w-11/12 cont2_prep rounded-lg bg-gray-400/25 mx-auto">
                    <div class="col-start-1 col-span-4 row-start-1  pt-4 text-3xl font-semibold text-center">
                        ¿Cuál es el resultado del siguiente sistema de ecuaciones?
                    </div>

                    <div class="col-start-1 col-span-4 row-start-2 w-full h-20 text-2xl font-semibold">
                        <div class="m-auto text-center text-3xl h-full">
                            <div class="grid grid-cols-3 grid-rows-2">
                                <div class="col-start-2 row-start-1">2y -7y = 10</div>
                                <div class="col-start-2 row-start-2">63x + 8y = 41</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-start-1 col-span-4 row-start-3">
                        <div class="grid grid-cols-8 ">
                            <div class="col-start-2 w-3/6">
                                <div class=" text-2xl mx-auto font-semibold text-right">
                                    X =
                                </div>
                            </div>
                            <div class="col-start-3 w-full">
                                <div class="my-auto">
                                    <div class="">
                                        <input class="w-40 h-14 rounded-lg bg-transparent border-2 border-black text-center text-3xl" type="text" placeholder="Respuesta" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-start-5 w-3/6">
                                <div class=" text-2xl m-auto font-semibold text-left">
                                    Y =
                                </div>
                            </div>
                            <div class="col-start-6">
                                <div class="mx-auto">
                                    <div class="">
                                        <input class="w-40 h-14 rounded-lg bg-transparent border-2 border-black text-center text-3xl" type="text" placeholder="Respuesta" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-start-1 col-span-2 row-start-4 w-60 -mt-2 mx-auto">
                        <button class="boton5 cinco">
                            <span>
                                Regresar
                            </span>
                        </button>
                    </div>

                    <div class="col-start-3 col-span-2 row-start-4 w-60 -mt-2 m-auto">
                        <button class="boton5 cinco">
                            <span>
                                Siguiente
                            </span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        <!--Boton de volver-->

        <!--Boton de siguiente pregunta/finalizar juego-->
    </div>
</div>


@endsection
