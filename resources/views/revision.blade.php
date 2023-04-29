@extends('layout')
@section('content')
<div class="absolute bottom-0 w-full h-full overflow-hidden" style="background-image:url(/img/fondos/fondo4.svg); background-size: 100%; background-position:bottom; background-repeat: no-repeat;">
    <div class="grid grid-cols-3 grid-rows-6">
        <div class="col-start-1 row-start-1 row-end-1 w-1/2 h-20 pr-40 ml-8" style="background-image:url(/img/Recursos/logo2.png); background-size: 100%; background-position:left;background-repeat: no-repeat;"></div>
        <div class="col-start-2 row-start-1 pt-14 h-16 font-bold text-4xl text-center">
            Revisión
        </div>
        <div class="col-start-1 row-start-3 h-20 text-4xl font-bold text-center">
            Jugador: Victor
        </div>
        <div class="col-start-1 row-start-4 h-20 -mt-20 ">
            <div class="grid grid-cols-2">
                <div class="col-start-1 row-start-5 text-3xl font-semibold pt-4 ml-8">Preguntas correctas: </div>

                <div class="col-start-2 row-start-5 my-auto pt-2">
                    <div class="w-24 h-16 bg-[#85d1ee] pt-4 text-center rounded-lg text-2xl font-bold">
                        25/25
                    </div>
                </div>
            </div>
        </div>

        <div class="col-start-2 row-start-2 row-span-4 container fondo_t table-wrapper">
            <div class="grid grid-cols-1 table-wrapper">
            <table class="mx-auto text-center text-md">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ejercicio</th>
                        <th>Tu respuesta</th>
                        <th>R. correcta</th>
                        <th>Valoración</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>5 + 2</td>
                        <td>7</td>
                        <td>7</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>3 x 4</td>
                        <td>12</td>
                        <td>12</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>8 - 6</td>
                        <td>3</td>
                        <td>2</td>
                        <td><center><img src="/img/recursos/mal.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>10 / 5</td>
                        <td>2</td>
                        <td>2</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>7 x 9</td>
                        <td>23</td>
                        <td>63</td>
                        <td><center><img src="/img/recursos/mal.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>06</td>
                        <td>15 - 9</td>
                        <td>6</td>
                        <td>6</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>07</td>
                        <td>24 / 6</td>
                        <td>4</td>
                        <td>4</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>6 + 3</td>
                        <td>9</td>
                        <td>9</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>9 x 3</td>
                        <td>27</td>
                        <td>27</td>
                        <td><center><img src="/img/recursos/bien.png" alt="correcto" width="25px" height="25px"></center></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="m-auto col-start-2 w-60 mb-12 ml-12">
            <a href="/resultados">
                <button class="boton3 tres">
                    <span>
                        Atras
                    </span>
                </button>
            </a>
        </div>

    </div>

</div>
@endsection

