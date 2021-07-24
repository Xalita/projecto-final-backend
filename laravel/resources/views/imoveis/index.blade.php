@extends('layouts.navigation')

@section('grelha-imoveis')
    @foreach ($imoveis as $imovel )

        <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                <h5 class="card-title">{{ $imovel }}</h5>

                <a href="{{ route('imoveis.show') }}" class="btn btn-primary">+Info</a>
                </div>
            </div>

  @endforeach
@endsection
