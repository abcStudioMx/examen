<div>

    <input type="text" wire:model='buscar' size="30" placeholder="Buscar">
    <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">e-mail</th>
                <th scope="col">Estatus</th>
                <th colspan="2">Acción</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $item )
              <tr>
                <th scope="row">{{$item->name}}</th>
                <td>{{$item->email}}</td>
                <td>{{$item->estatus}}</td>
            @can('empleados.editar')
                <td><button wire:click='editar({{$item->id}})'
                    type="button" class="btn btn-info">Editar</button></td>
            @endcan
            @can('empleados.eliminar')
                <td><button wire:click='destroy({{$item->id}})'
                    type="button" class="btn btn-danger">Eliminar</button></td>
            @endcan
            @can('empleados.nomina')
                <td><button name="nomina" wire:click='nomina({{$item->id}})'
                    type="button" class="btn btn-warning">Nómina</button></td>
              </tr>
            @endcan
                @endforeach
            </tbody>
    </table>
    @if ($usuarios)
    {{$usuarios->links()}}
        @else

    @endif


</div>
