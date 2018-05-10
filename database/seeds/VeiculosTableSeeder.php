<?php

use Illuminate\Database\Seeder;
use App\Veiculo;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veiculo::create([
            'marca'     => 'FIAT',
            'modelo'    => 'Palio',
            'ano'       => '2018' ,
        ]);
        Veiculo::create([
            'marca'     => 'VOLKS',
            'modelo'    => 'Palio',
            'ano'       => '2018' ,
        ]);
    }
}
