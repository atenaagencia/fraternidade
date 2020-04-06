<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Herbet Junior',
            'email' => 'herbetjr@gmail.com',
            'telefone'=> '74988114876',
            'whatsapp'=>'74988114876',
            'password' => bcrypt('01072015')
        ]);
        $this->call(NivelSeeder::class);
    }
}
