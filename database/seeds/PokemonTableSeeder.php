<?php

use Illuminate\Database\Seeder;
use App\Pokemon;

class PokemonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = [
            [
                'nome' => 'pikachu',
                'tipo' => 'elettro',
                'sesso' => 'maschio',
                'peso' => 20,
                'leggendario' => false
            ],
            [
                'nome' => 'sbirulino',
                'tipo' => 'spettro',
                'sesso' => 'femmina',
                'peso' => 10,
                'leggendario' => true
            ],
            [
                'nome' => 'charizard',
                'tipo' => 'fuoco',
                'sesso' => 'maschio',
                'peso' => 2000,
                'leggendario' => false
            ],
            [
                'nome' => 'lucario',
                'tipo' => 'lotta',
                'sesso' => 'maschio',
                'peso' => 40,
                'leggendario' => false
            ],
            [
                'nome' => 'darkrai',
                'tipo' => 'buio',
                'sesso' => 'maschio',
                'peso' => 100,
                'leggendario' => true
            ],
            [
                'nome' => 'pikachu',
                'tipo' => 'elettro',
                'sesso' => 'maschio',
                'peso' => 20,
                'leggendario' => false
            ],
            [
                'nome' => 'magikarp',
                'tipo' => 'acqua',
                'sesso' => 'femmina',
                'peso' => 20,
                'leggendario' => true
            ],
            [
                'nome' => 'infernape',
                'tipo' => 'fuoco',
                'sesso' => 'maschio',
                'peso' => 60,
                'leggendario' => false
            ]
            
        ];

        foreach ($pokemons as $pokemon) {
            $newpokemon = new Pokemon();

            $newpokemon -> nome = $pokemon['nome'];
            $newpokemon -> tipo = $pokemon['tipo'];
            $newpokemon -> sesso = $pokemon['sesso'];
            $newpokemon -> peso = $pokemon['peso'];
            $newpokemon -> leggendario = $pokemon['leggendario'];

            $newpokemon -> save();
        }
    }
}
