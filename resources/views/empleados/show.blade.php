<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Empleados') }}
        </h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">



                        <div class="container">

                            <form action="{!!route('empleados.store')!!}" method="POST">
                                @csrf
                                <input type="hidden" name="myId" value="{{ $datosEmpleado->id}} " id="myId">
                                <table class="table table-hover" >
                                <tr>
                                    <th class="text-start">Nombre:</th>
                                    <th><input type="text" name="name" value=" {{$datosEmpleado->name}} "
                                        wire:model='name' id="name"></th>
                                    <th> {{$datosEmpleado->name}} </th>
                                    <th>@error('name')  <span class="error">{{$message}}</span> @enderror</th>
                                </tr>
                                <tr>
                                    <th>e-mail:</th>
                                    <th><input type="email" name="email" value=" {{$datosEmpleado->email}} "
                                        wire:model='email' id="email"></th>
                                    <th> {{$datosEmpleado->email}} </th>
                                    <th>@error('email')  <span class="error">{{$message}}</span> @enderror</th>

                                </tr>
                                <tr>
                                    <th>Estatus:</th>
                                    <th>
                                        <select name="estatus" id="estatus">
                                            <option value="Activo" selected>Activo</option>
                                            <option value="Baja">Baja</option>
                                            <option value="Vacaciones">Vacaciones</option>
                                        </select>
                                    </th>
                                    <th> {{$datosEmpleado->estatus}} </th>
                                    <th>@error('estatus')  <span class="error">{{$message}}</span> @enderror</th>
                                </tr>
                                <tr>
                                    <th>Salario:</th>
                                    <th><input type="text" name="salario" value=" {{$datosEmpleado->salario_diario}} "
                                        wire:model='salario' id="salario"></th>
                                    <th> {{$datosEmpleado->salario_diario}} </th>
                                    <th>@error('salario')  <span class="error">{{$message}}</span> @enderror</th>

                                </tr>
                                <tr class="text-start">
                                    <th>Perfil:</th>
                                    <th>
                                        <select name="role" id="role">
                                            <option value="0">Sin Cambios</option>
                                            @foreach ($role as $item)
                                                <option value=" {{$item->id}} "> {{$item->name}} </option>
                                            @endforeach
                                        </select>
                                    <th>@error('role')  <span class="error">{{$message}}</span> @enderror</th>
                                    </th>
                                    @forelse ($perfil as $item )
                                    <p class="text-start">
                                        <th><p class="text-start">{{$item->name}}</p></th>
                                    </p>
                                    @empty
                                    <th class="text-start">Sin Permisos</th>
                                    @endforelse
                                </tr>
                                <tr>
                                    <th colspan="4">
                                    <center>
                                        <button type="submit"  class="btn btn-warning" type="">Actualizar</button>
                                    </center>
                                    </th>
                                </tr>
                            </table>
                        </form>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
