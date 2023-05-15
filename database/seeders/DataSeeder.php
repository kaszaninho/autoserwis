<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('klienci')->insert([ ['imie'=>'Jan', 'nazwisko'=>'Smith', 'adres_email'=>'jansmith@dot.com'], 
										['imie'=>'Angela', 'nazwisko'=>'Bonda', 'adres_email'=>'lolbonda@buziaczek.pl'], 
										['imie'=>'Monika', 'nazwisko'=>'Ratownik', 'adres_email'=>'monisia11@spoko.com'] 
									]
								);
        DB::table('samochody')->insert([ ['idKlienta'=>'1', 'marka'=>'Audi', 'model'=>'A6', 'rocznik'=>'2019', 'nrRejestracyjny'=>'KNS22142'], 
                                        ['idKlienta'=>'1', 'marka'=>'Porsche', 'model'=>'Carrera', 'rocznik'=>'2021', 'nrRejestracyjny'=>'KW1131'], 
                                        ['idKlienta'=>'2', 'marka'=>'Fiat', 'model'=>'126p', 'rocznik'=>'1996', 'nrRejestracyjny'=>'KNS1121']
                                       ]
                                );
        DB::table('serwisy')->insert([ ['idKlienta'=>'1', 'idSamochodu'=>'1', 'DataSerwisu'=>'21/11/2022', 'Cena'=>'5000'], 
        ['idKlienta'=>'1', 'idSamochodu'=>'2', 'DataSerwisu'=>'21/12/2022', 'Cena'=>'2500'],  
        ['idKlienta'=>'1', 'idSamochodu'=>'1', 'DataSerwisu'=>'11/03/2023', 'Cena'=>'7600']
                                    ]
                                );

        DB::table('typySerwisu')->insert([ ['nazwa'=>'wymiana oleju', 'cena'=>'100'],
                                            ['nazwa'=>'wymiania rozrządu', 'cena'=>'1800']  
                            ]);
    }
}
