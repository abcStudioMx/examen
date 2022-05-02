<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Permisos') }}
        </h2>
    </x-slot>
    <div class="row justify-content-center my-5">
        <div class="col-md-12">
            <div class="card shadow bg-light">
                <div class="card-body bg-white px-5 py-3 border-bottom rounded-top">
                    <div class="mx-3 my-3">
                        <a href=" {{route('permisos.create')}} " class="btn btn-secondary btn-sm float-right"> + Agregar Rol</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Role</th>
                                    <th colspan="2">

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>

                                        <td>{{$role->name}}</td>
                                        <td width="10px">
                                        <a href=" {{route('permisos.edit', $role->id)}} " class="btn btn-sm btn-primary text-white">Editar</a></td>
                                        <td width="10px">
                                            {!! Form::open(['method' => 'DELETE','route' => ['permisos.destroy', $role->id], 'id'=>'BotonEliminar','class'=>'btn btn-sm text-white']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger','id'=>'BotonEliminar']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                   </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <script
                        src="https://code.jquery.com/jquery-3.6.0.js"
                        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                        crossorigin="anonymous"></script>

                        <script type="text/javascript">
                            $('#BotonEliminar').submit(function(event){

                                event.preventDefault();

                                    Swal.fire({
                                        title: 'Desea borrar el registro?',
                                        text: "Una vez eliminado no se podrá recuperar la información",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Si, eliminarlo!'
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            /*
                                        Swal.fire(
                                        'Eliminado!',
                                        'El registro se eliminó.',
                                        'success'
                                        )*/
                                        this.submit();
                                        }
                                    })
                            });
                         </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{$roles->links()}}
</x-app-layout>
