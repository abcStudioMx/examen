<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Permisos Crear') }}
        </h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">

                        {!! Form::open(['route'=>'permisos.store']) !!}
                            <div class="form group">
                                {!! Form::label('name', 'Nombre:') !!}
                                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre del Rol']) !!}
                                @error('name') <small class="text-danger">{{$message}} </small></span>

                                @enderror
                            </div>
                            <br>
                            <h2 class="h3">Lista de permisos</h2>
                            @foreach ($permissions as $permission)
                            <div>
                                <label>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
                                    {{$permission->descrition}}
                                </label>
                            </div>
                            @endforeach

                            {!! Form::submit('Agregar', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
