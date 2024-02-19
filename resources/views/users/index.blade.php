@extends('layouts.plantilla')

@section('title', 'Registros create')


@section('content')

    <div class="container " style="background-color: rgba(255, 255, 0, 0); ">

        <div class="row my-5  justify-content-center">
            <div class=" fw-bold  mb-5 col-xl-4  mx-auto" style="background-color: rgba(0, 0, 255, 0)">
                <h5 class="text-left fw-bold mb-3" style="font-size: 30px">Datos del paciente</h5>
                <form action=" {{ route('users.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Juan Manuel" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                        <input type="text" class="form-control" placeholder="Polo Villegas" name="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email </label>
                        <input type="email" class="form-control" placeholder="name@example.com" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Teléfono </label>
                        <input type="phone" class="form-control" placeholder="3213345533" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password </label>
                        <input type="password" class="form-control" placeholder="******" name="password">
                    </div>



                    <div class="d-grid gap-2">
                        <button type="" class=" btn btn-success">Guardar</button>

                    </div>




                </form>
            </div>


            <div class=" table-responsive-sm  table-responsive-md  col-xl-8  mx-auto"
                style="background-color: rgba(255, 0, 0, 0)">
                <h5 class="text-center fw-bold mb-3" style="font-size: 30px">Listado de pacientes</h5>
                <table class="table  table-striped table-hover  text-center border  ">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
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
                                <td class="fw-bold">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>


                                <td>
                                    <form action=" {{ route('users.destroy', $user) }}" method="POST">

                                        @csrf

                                        @method('delete')


                                        <button style="border: 0"><img class="mx-2" style="width: 40px"
                                                src="{{ asset('/img/eliminar.png') }}" alt=""></button>
                                    </form>

                                </td>


                                <td> <a href="{{ route('users.show', $user) }}"><i class="fa-solid fa-eye"
                                            style="color: #FFD43B; font-size: 35px"></i> </a>
                                </td>
                            </tr>

                        </tbody>
                    @endforeach

                </table>
                {{ $users->links() }}

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
