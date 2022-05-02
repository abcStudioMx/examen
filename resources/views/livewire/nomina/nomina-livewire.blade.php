<div>

    <input type="text" wire:model='buscar' size="30" placeholder="Nombre">
    <select name="" id="">
        <option value="5">Días para nómina</option>
        <option value="10"></option>
    </select>
    <table class="table table-striped">{{$dias}}
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">e-mail</th>
                <th scope="col">Estatus</th>
                <th scope="col">Salario</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $item )
              <tr>
                <th scope="row">{{$item->name}}</th>
                <td>{{$item->email}}</td>
                <td>{{$item->estatus}}</td>
                <td>{{$item->salario_diario}}</td>
                <td>{{$item->salario_diario*floatval($buscar)}}</td>
              </tr>
              @endforeach
            </tbody>
    </table>


</div>
