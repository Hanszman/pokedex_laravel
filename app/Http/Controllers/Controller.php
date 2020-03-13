<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home(){
        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/'
        ]);
    
        $response = $client->request('GET', "region");
        $regions = json_decode( $response->getBody(), true );
        $regions = $regions['results'];
    
        return view('pages.home', compact('regions'));
    }

    public function pokemon($id){
        switch ($id) {
            case 1: //kanto
                $offset = 0;
                $limit  = 151;
                $region = 'Kanto';
                break;
            case 2: //johto
                $offset = 151;
                $limit  = 100;
                $region = 'Johto';
                break;
            case 3: //hoenn
                $offset = 251;
                $limit  = 135;
                $region = 'Hoenn';
                break;
            case 4: //sinnoh
                $offset = 386;
                $limit  = 108;
                $region = 'Sinnoh';
                break;
            case 5: //unova
                $offset = 494;
                $limit  = 155;
                $region = 'Unova';
                break;
            case 6: //kalos
                $offset = 649;
                $limit  = 72;
                $region = 'Kalos';
                break;
        }

        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/'
        ]);
    
        $response = $client->request('GET', "pokemon/?offset={$offset}&limit={$limit}");
        $pokemons = json_decode( $response->getBody(), true );
        $pokemons = $pokemons['results'];
    
        return view('pages.pokemon', compact('pokemons', 'offset', 'region'));
    }

    public function detalha_pokemon($id){
        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/'
        ]);
    
        $response = $client->request('GET', "pokemon/{$id}");
        $pokemon = json_decode( $response->getBody(), true );
        // dd($pokemon);

        return view('pages.detalha_pokemon', compact('pokemon'));
    }

}
