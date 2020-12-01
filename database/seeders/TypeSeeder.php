<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            [
                'nom'=>'Normal',
            ],
            [
                'nom'=>'Combat',
            ],
            [
                'nom'=>'Vol',
            ],
            [
                'nom'=>'Poison',
            ],
            [
                'nom'=>'Sol',
            ],
            [
                'nom'=>'Roche',
            ],
            [
                'nom'=>'Insecte',
            ],
            [
                'nom'=>'Spectre',
            ],
            [
                'nom'=>'Acier',
            ],
            [
                'nom'=>'Feu',
            ],
            [
                'nom'=>'Eau',
            ],
            [
                'nom'=>'Plante',
            ],
            [
                'nom'=>'Electrik',
            ],
            [
                'nom'=>'Psy',
            ],
            [
                'nom'=>'Glace',
            ],
            [
                'nom'=>'Dragon',
            ],
            [
                'nom'=>'Ténèbres',
            ],
        ]);
    }
}
