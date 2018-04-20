<?php

use Illuminate\Database\Seeder;

class CmsSocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_socialnetworks')->insert([
            'id' => 1,
            'name' => 'Facebook',
            'url' => 'as',
        ]);

        DB::table('cms_socialnetworks')->insert([
            'id' => 2,
            'name' => 'Google Plus',
            'url' => 'as',
        ]);

        DB::table('cms_socialnetworks')->insert([
            'id' => 3,
            'name' => 'Twitter',
            'url' => 'as',
        ]);

        DB::table('cms_socialnetworks')->insert([
            'id' => 4,
            'name' => 'Instagram',
            'url' => 'as',
        ]);
    }
}
