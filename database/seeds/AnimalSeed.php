<?php

use Illuminate\Database\Seeder;
use App\Animal;
class AnimalSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Animal = Animal::create([
            'nombre' => 'Tigre',
            'siguiente' => '3'
        ]);
        $Animal = Animal::create([
            'nombre' => 'Leon',
            'siguiente' => '2'
        ]);
        $Animal = Animal::create([
            'nombre' => 'Gato',
            'siguiente' => '1'
        ]);
        $Animal = Animal::create([
            'nombre' => 'Perro',
            'siguiente' => '1'
        ]);
        $Animal = Animal::create([
            'nombre' => 'Puma',
            'siguiente' => '1'
        ]);
    }
}
