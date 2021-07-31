<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Imovel') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row">
        <div class="col-md">
            {{ $cebolas->created_at ?? '' }}
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            {{ $cebolas->local ?? ''}}
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            {{ $cebolas->tipo_de_imovel ?? '' }}
        </div>
    </div>

    <div class="row">
        <div class="col-md">
            {{ $cebolas->valor ?? '' }}
        </div>
    </div>

</div>

</x-app-layout>
