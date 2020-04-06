<?php

use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nivels')->insert([
               'id' => 0,
               'valor_deposito' => 20.00,
               'quantidade' => 0,
        ]);
        DB::table('nivels')->insert([
            'id' => 1,
            'valor_deposito' => 20.00,
            'quantidade' => 3,
        ]);
        DB::table('nivels')->insert([
            'id' => 2,
            'valor_deposito' => 40.00,
            'quantidade' => 9,
        ]);
        DB::table('nivels')->insert([
            'id' => 3,
            'valor_deposito' => 60.00,
            'quantidade' => 27,
        ]);
    }
}
