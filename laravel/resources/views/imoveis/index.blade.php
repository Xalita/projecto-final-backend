<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Imoveis') }}
        </h2>
    </x-slot>

    @foreach ($batatas as $imovel )

        <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title">{{ $imovel->local}}</h5>
                <h5 class="card-title">{{ $imovel->valor}}</h5>

                <a href="{{ route('imoveis.show', $imovel->id)}}" class="btn btn-primary"> +Info</a>
                </div>
            </div>

  @endforeach

</x-app-layout>
