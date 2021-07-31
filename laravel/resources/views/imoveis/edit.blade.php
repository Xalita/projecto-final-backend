<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vender') }}
        </h2>
    </x-slot>

<form action="{{ route('imoveis.update')}}" method="POST">
    @csrf @method('PUT')
    <div class="form-group row">
        <label for="local" class="col-md-4 col-form-label text-md-right">{{ __('Local') }}</label>
        <div class="col-md-6">
            <input type="text" id="local" class="form-control" name="local" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="tipo_de_imovel" class="col-md-4 col-form-label text-md-right">{{ __('Tipo Imóvel') }}</label>
        <div class="col-md-6">
            <input type="text" id="tipo_de_imovel" class="form-control" name="tipo_de_imovel" required autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="valor" class="col-md-4 col-form-label text-md-right">{{ __('Valor') }}</label>
        <div class="col-md-6">
            <input type="text" id="valor" class="form-control" name="valor" required autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>
        <div class="col-md-6">
            <input type="file" id="foto" class="form-control" name="foto" autofocus>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __("Adicionar") }}
            </button>
        </div>
    </div>
</form>
</x-app-layout>


