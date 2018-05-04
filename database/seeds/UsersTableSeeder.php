<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Administrador',
            'dni' => '1',
            'email' => 'admin@admin.com',
            'phone' => '584245129400',
            'province' => 'Portuguesa',
            'city' => 'Guanare',
            'domicile' => 'Calle 9 La Arenosa',
            'provider_id' => '0',
            'provider' => 'local',
            'password' => bcrypt('a12345$')
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Cliente',
            'dni' => '2',
            'email' => 'cliente@cliente.com',
            'phone' => '584245129400',
            'province' => 'Portuguesa',
            'city' => 'Guanare',
            'domicile' => 'Calle 9 La Arenosa',
            'provider_id' => '0',
            'provider' => 'local',
            'password' => bcrypt('a12345$'),
        ]);
    }
}
