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
            'iconmap' => 'https://icon-icons.com/icons2/1151/PNG/32/1486505264-food-fork-kitchen-knife-meanns-restaurant_81404.png'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'ENTRETENIMIENTO',
            'iconweb' => 'fas fa-film',
            'iconapp' => 'film',
            'iconmap' => 'https://icon-icons.com/icons2/1149/PNG/32/1486504374-clip-film-movie-multimedia-play-short-video_81330.png'
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'TURISMO',
            'iconweb' => 'fas fa-plane',
            'iconapp' => 'plane',
            'iconmap' => 'https://icon-icons.com/icons2/1146/PNG/32/1486485566-airliner-rplane-flight-launch-rbus-plane_81166.png'
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'MODA',
            'iconweb' => 'fas fa-cut',
            'iconapp' => 'cut',
            'iconmap' => 'https://icon-icons.com/icons2/197/PNG/32/scissors_24029.png'
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'BELLEZA',
            'iconweb' => 'fas fa-female ',
            'iconapp' => 'woman',
            'iconmap' => 'https://icon-icons.com/icons2/1130/PNG/32/womaninacircle_80046.png'
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'DECO Y HOGAR',
            'iconweb' => 'fas fa-home',
            'iconapp' => 'home',
            'iconmap' => 'https://icon-icons.com/icons2/1151/PNG/32/1486505259-estate-home-house-building-property-real_81428.png'
        ]);
    }
}
