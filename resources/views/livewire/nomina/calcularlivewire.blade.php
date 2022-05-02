<div>
    <div>

        <input type="text" wire:model='dias' size="30" placeholder="Días a calcular">
        <table class="table table-striped table-sm" >
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">{{$datosUsuario->name}} </th>
                  </tr>
                  <tr>
                    <th scope="col">e-mail</th>
                    <th scope="col">{{$datosUsuario->email}}</th>
                  </tr>
                  <tr>
                    <th scope="col">Estatus</th>
                    <th scope="col">{{$datosUsuario->estatus}}</th>
                  </tr>
                  <tr>
                    <th scope="col">Salario</th>
                    <th scope="col">{{$datosUsuario->salario_diario}}</th>
                  </tr>
                  <tr>
                    <th scope="col">Calcular</th>
                    <th scope="col">
                    @if ($dias)
                    {{$datosUsuario->salario_diario*$dias}}
                        @else
                        0
                    @endif

                    </th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
        </table>


    </div>

</div>
