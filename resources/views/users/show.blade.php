@extends('layouts.plantilla')

@section('title', 'User' . $user->name)


@section('content')

    <div class="container my-5  " style="background-color: rgba(0, 157, 255, 0)">




        <a class="btn btn-primary" href="{{ route('users.index') }}">Volver a la lista</a>

        <div id="con" class="row  d-flex justify-content-center mt-5 gap-5 p-5 border border-  rounded-5">



            <table class=" col-sm-4  table  text-left table-striped  table-hover " style="width: 500px ;">

                <tr>

                    <td class="d-flex justify-content-center "><img style="width: 400px"
                            src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" alt=""></td>
                </tr>
                <tr>
                    <td class="d-flex gap-3">
                        <p class="fw-bold">Nombre:</p> {{ $user->name }}
                    </td>

                </tr>

                <tr>
                    <td class="d-flex gap-3" style="background-repeat: no-repeat">
                        <p class="fw-bold"> Apellido:</p> {{ $user->lastname }}
                    </td>

                </tr>
                <tr>
                    <td class="d-flex gap-4">
                        <p class="fw-bold mr-4">Email:</p> {{ $user->email }}
                    </td>

                </tr>
                <tr>
                    <td class="d-flex gap-4">
                        <p class="fw-bold">Celular:</p>
                        <p>{{ $user->phone }}</p>
                    </td>

                </tr>









            </table>



            <div class=" col-sm-2 d-flex flex-column align-items-center justify-content-center mb-3"
                style="background-color: rgba(137, 43, 226, 0) ; ">
                <h5 class="text-uppercase mb-4 fw-bold text-primary" style="font-size:20px">Historia clinica</h5>

                <a href="https://expert.holanuna.com/es/practika/wp-content/uploads/2021/08/Screenshot-2021-06-23-at-13.00.53-925x1024.png"
                    download="SENA-SONRIE-HISTORIA.pdf"><i class="fa-solid fa-download"
                        style="color: #005b8f; font-size:60px"></i>
                </a>
            </div>



        </div>


        <div class="r  d-flex justify-content-center my-5 gap-5 p-5 border border-2 border-dark rounded-5"
            style="  background-image:url({{ asset('/img/consu.jpg') }} );  background-size: cover
        ;background-repeat: no-repeat ;  height:500px">
        </div>

    </div>


@endsection
