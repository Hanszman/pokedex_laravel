@extends('templates.nav') <!-- Herda da .blade Nav -->

@section('titulo','Pokémon') <!-- Herda título adaptável -->

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-3" style="color: #E3350D;">
            <img src="https://img.icons8.com/ios-filled/50/000000/pokeball--v1.png">
            Pokémon
            </h1>
            <p>Descubra todos os Pokémon da região de {{$region}}!</p>
            <br>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">

            <div class="card-group">

            @foreach($pokemons as $key=> $pokemon)
                <div class="col-sm-3 col-md-2" style="margin-top: 40px; margin-bottom: 40px; margin-right: 40px; margin-left: 40px;">
                    <div class="card mb-3" style="width: 200px; border-style: solid; border-color: #E3350D; border-radius: 20px;">
                        <br>
                        <h1 class="display-3" style="text-align: center; font-size: 100px">
                            <a href="{{ route('detalha_pokemon', $key+1) }}">
                            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/{{$key+1+$offset}}.png">
                            </a>
                        </h1 class="display-3">
                        <hr>
                        <div class="card-body" style="text-align: center;">
                            <a href="{{ route('detalha_pokemon', $key+1+$offset) }}" class="btn btn-danger">{{ '#' . str_pad($key+1+$offset, 3, '0', STR_PAD_LEFT) . ' - ' . ucfirst($pokemon['name']) }}</a>
                        </div>
                        <br>
                    </div>
                </div>
            @endforeach

            </div>    

        </div>
    </div>
</div>