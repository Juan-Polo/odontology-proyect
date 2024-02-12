@extends('layouts.plantilla')

@section('title', 'Registros create')


@section('content')
    <div class="container " style="background-color: yellow; ">

        <div class="row my-5">
            <div class="col-sm-12  col-md-4 col-lg-4 col-xl-4 " style="background-color: blue">
                <form class="me-1" action="">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Teléfono </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-outline-success">Guardar</button>

                    </div>




                </form>
            </div>


            <div class="col-sm-12  col-md-8 col-lg-8 col-xl-8 " style="background-color: red">
                <h2 class="ms-5">Listado de pacientes</h2>
                <table class="table  table-striped  ms-5">

                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Eliminar</th>
                            <th>Ver</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tbody>


                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td><img class="mx-3" style="width: 40px" src="{{ asset('/img/eliminar.png') }}"
                                        alt=""></td>
                                <td><img class="mx-3" style="width: 40px" src="{{ asset('/img/ojo.png') }}"
                                        alt=""></td>
                            </tr>

                        </tbody>
                    @endforeach

                </table>
                <div class="">{{ $users->links() }}</div>

            </div>




        </div>
























        {{-- <h1>inicio registro</h1>
        <a href=" {{ route('users.create') }}">Crear usuario</a>





        @foreach ($users as $user)
            <a href="{{ route('users.show', $user->id) }}"> {{ $user->name }} </a>
            <a href="{{ route('users.show', $user->id) }}"> {{ $user->lastname }} </a>
        @endforeach




        {{ $users->links() }} --}}
    </div>
@endsection
