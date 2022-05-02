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

                        @livewire('nomina.calcularlivewire',['miVariabel'=> $miId])

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
