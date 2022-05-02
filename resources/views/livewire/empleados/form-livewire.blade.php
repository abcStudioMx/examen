<div>

<div class="container">

    <form wire:submit.prevent='submit'>
        <input type="hidden" name="myId" value="{{ $datosEmpleado->id}} " id="myId">
        <table class="table" >
        <tr>
            <th>Nombre:</th>
            <th><input type="text" name="name" wire:model='name' id="name"></th>
            <th> {{$datosEmpleado->name}} </th>
            <th>@error('name')  <span class="error">{{$message}}</span> @enderror</th>
        </tr>
        <tr>
            <th>e-mail:</th>
            <th><input type="email" name="email" wire:model='email' id="email"></th>
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
            <th><input type="text" name="salario" wire:model='salario' id="salario"></th>
            <th> {{$datosEmpleado->salario_diario}} </th>
            <th>@error('salario')  <span class="error">{{$message}}</span> @enderror</th>

        </tr>
        <tr>
            <th colspan="3">
            <center>
            @can('empleados.boton.actualizar')
                <button type="submit"  class="btn btn-warning" type="">Actualizar</button>
            @endcan
            </center>
            </th>
        </tr>
    </table>
</form>

</div>

</div>
