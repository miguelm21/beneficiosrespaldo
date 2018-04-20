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
            'email' => 'admin@admin.com',
            'password' => bcrypt('a12345$'),
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Cliente',
            'email' => 'cliente@cliente.com',
            'password' => bcrypt('a12345$'),
        ]);
    }
}
