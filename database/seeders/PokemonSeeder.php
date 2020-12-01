<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemon')->insert([
            [
                'nom'=>'Abdelita',
                'image'=>'143.png',
                'niveau'=>213,
                'type_id'=>2,
            ],
        ]);
    }
}
