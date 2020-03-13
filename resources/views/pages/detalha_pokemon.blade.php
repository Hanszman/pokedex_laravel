@extends('templates.nav') <!-- Herda da .blade Nav -->

@section('titulo','Pokémon') <!-- Herda título adaptável -->

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-3" style="color: #E3350D;">
            <img src="https://img.icons8.com/ios-filled/50/000000/pokeball--v1.png">
            {{ '#' . str_pad($pokemon['id'], 3, '0', STR_PAD_LEFT) . ' - ' . ucfirst($pokemon['name']) }}
            </h1>
            <br>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$pokemon['id']}}.png" height="300" width="300">
        </div>
        <div class="col-12 text-center my-5">
            @foreach($pokemon['types'] as $key=> $type)
                <span class="badge badge-pill tipo_pokemon {{ $type['type']['name'] }}">{{ ucfirst($type['type']['name']) }}</span>
            @endforeach
        </div>
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">Height</div>
            <div class="panel-body">
              {{ $pokemon['height'] / 10 }} m
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">Weight</div>
            <div class="panel-body">
              {{ $pokemon['weight'] / 10 }} Kg
            </div>
        </div>
        @foreach($pokemon['stats'] as $key=> $status)
            <div class="panel panel-danger">
                <div class="panel-heading">{{ ucfirst($status['stat']['name']) }}</div>
                <div class="panel-body">
                    {{ $status['base_stat'] }}
                </div>
            </div>
        @endforeach
    </div>
</div>