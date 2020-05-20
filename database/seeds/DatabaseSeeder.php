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
            'usuario'=>'herbetjr',
            'email' => 'herbetjr@gmail.com',
            'telefone' => '74988114876',
            'whatsapp' => '74988114876',
            'nivel_id' => 1,
            'perfil' => 'adm',
            'password' => bcrypt('01072015')
        ]);
        DB::table('users')->insert([
            'nome' => 'Reinaldo Neto',
            'usuario' => 'nneetto885',
            'email' => 'nneetto885@hotmail.com',
            'telefone' => '74988336804',
            'whatsapp' => '74988336804',
            'nivel_id' => 1,
            'perfil' => 'adm',
            'password' => bcrypt('88053483')
        ]);
        DB::table('users')->insert([
            'nome' => 'Philip Ramon',
            'usuario' => 'philldeveloper',
            'email' => 'admin@gmail.com',
            'telefone' => '555',
            'whatsapp' => '5555',
            'nivel_id' => 1,
            'perfil' => 'adm',
            'password' => bcrypt('kmzwa8awaa')
        ]);
        DB::table('users')->insert([
            'nome' => 'Teste User',
            'usuario' => 'teste',
            'email' => 'admin@gmail.com',
            'telefone' => '555',
            'whatsapp' => '5555',
            'nivel_id' => 1,
            'perfil' => 'user',
            'password' => bcrypt('01072015')
        ]);
    }
}
