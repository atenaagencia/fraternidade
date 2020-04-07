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
       $this->call(NivelSeeder::class);

        DB::table('users')->insert([
            'nome' => 'Herbet Junior',
            'email' => 'herbetjr@gmail.com',
            'telefone' => '74988114876',
            'whatsapp' => '74988114876',
            'nivel_id' => 1,
            'password' => bcrypt('01072015')
        ]);
        DB::table('users')->insert([
            'nome' => 'Reinaldo Neto',
            'email' => 'nneetto885@hotmail.com',
            'telefone' => '74988336804',
            'whatsapp' => '74988336804',
            'nivel_id' => 1,
            'password' => bcrypt('88053483')
        ]);
    }
}
