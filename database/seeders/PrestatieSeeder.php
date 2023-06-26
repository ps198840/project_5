<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrestatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prestaties')->insert([
            [
            'oefening_id' => '1',
            'naam' => 'Prestatie 1',
            'beschrijving' => 'Heb geen prestaties'
            ],
            [
            'oefening_id' => '1',
            'naam' => 'Prestatie 2',
            'beschrijving' => 'Haal de vorige prestatie'
            ],
            [
            'oefening_id' => '3',
            'naam' => 'Prestatie 3',
            'beschrijving' => 'Haal de andere 2 prestaties'
            ]
        ]);
    }
}
