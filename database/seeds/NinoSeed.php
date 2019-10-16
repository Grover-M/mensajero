<?php

use Illuminate\Database\Seeder;
use App\Nino;

class NinoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nino = Nino::create([
            'nom_animal' => 'tigre1',
            'id_animal' => '1',
            'password' => bcrypt('Tigre1'),
        ]);
        $nino = Nino::create([
            'nom_animal' => 'tigre2',
            'id_animal' => '1',
            'password' => bcrypt('Tigre2'),
        ]);
        $nino = Nino::create([
            'nom_animal' => 'leon1',
            'id_animal' => '2',
            'password' => bcrypt('Leon1'),
        ]);
    }
}
