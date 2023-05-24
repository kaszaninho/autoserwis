<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class TypSerwisuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('typyserwisu')->insert([
            [
                'nazwa' => 'wymiana filtrów',
                'cena' => '23'
            ],
            [
                'nazwa' => 'wymiana oleju',
                'cena' => '32'
            ],
            [
                'nazwa' => 'wymiana rozrządu',
                'cena' => '1032'
            ]
            ]);
    }
}
