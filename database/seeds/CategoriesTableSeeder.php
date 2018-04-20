<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'GASTRONOMIA',
            'iconweb' => 'fas fa-utensils',
            'iconapp' => 'restaurant',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'ENTRETENIMIENTO',
            'iconweb' => 'fas fa-film',
            'iconapp' => 'film',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'TURISMO',
            'iconweb' => 'fas fa-plane',
            'iconapp' => 'plane',
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'MODA',
            'iconweb' => 'fas fa-cut',
            'iconapp' => 'cut',
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'BELLEZA',
            'iconweb' => 'fas fa-female ',
            'iconapp' => 'woman',
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'DECO Y HOGAR',
            'iconweb' => 'fas fa-home',
            'iconapp' => 'home',
        ]);
    }
}
