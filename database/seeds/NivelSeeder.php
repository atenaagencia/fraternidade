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
            'valor_deposito' => 20.00,
            'quantidade' => 3,
        ]);
        DB::table('nivels')->insert([
            'valor_deposito' => 40.00,
            'quantidade' => 9,
        ]);
        DB::table('nivels')->insert([
            'valor_deposito' => 60.00,
            'quantidade' => 27,
        ]);
    }
}
