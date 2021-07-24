@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md">
        {{ $imovel->created_at }}
    </div>
</div>

<div class="row">
    <div class="col-md">
        {{ $imovel->local }}
    </div>
</div>

<div class="row">
    <div class="col-md">
        {{ $imovel->id}}
    </div>
</div>

<div class="row">
    <div class="col-md">
        {{ $imovel->tipo_de_imovel }}
    </div>
</div>

<div class="row">
    <div class="col-md">
        {{ $imovel->valor }}
    </div>
</div>

@endsection
