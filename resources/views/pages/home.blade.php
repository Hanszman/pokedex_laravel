@extends('templates.nav') <!-- Herda da .blade Nav -->

@section('titulo','Home') <!-- Herda título adaptável -->

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h1 class="display-3" style="color: #E3350D;">
            <img src="https://img.icons8.com/ios-filled/50/000000/pokeball--v1.png">
            Pokédex
            </h1>
            <p>Seja bem-vindo à enciclopédia Pokémon!</p>
            <br>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="display-3 text-center" style="color: #E3350D;">Selecione a região desejada:</h3>
    @for($i=0; $i < sizeof($regions) - 1; $i++)
        <a href="{{ route('pokemon', $i+1) }}" type="button" class="btn btn-danger btn-lg btn-block">{{ ucfirst($regions[$i]['name']) }}</a>
    @endfor
</div>