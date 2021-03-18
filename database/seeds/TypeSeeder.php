<?php

use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typesOfCuisines=[
            ['name' => 'Afghano'],
            ['name' => 'Africano'],
            ['name' => 'Americano'],
            ['name' => 'Argentino'],
            ['name' => 'Asiatico'],
            ['name' => 'Asiatico fusion'],
            ['name' => 'Austriaco'],
            ['name' => 'Bakey'],
            ['name' => 'Belga'],
            ['name' => 'Bengalese'],
            ['name' => 'Bevande'],
            ['name' => 'Brasiliano'],
            ['name' => 'Brunch'],
            ['name' => 'Caffetteria'],
            ['name' => 'Cambogiano'],
            ['name' => 'Canadese'],
            ['name' => 'Cantonese'],
            ['name' => 'Caraibico'],
            ['name' => 'Cinese'],
            ['name' => 'Cinese di Sichuan'],
            ['name' => 'Cingalese'],
            ['name' => 'Colazione'],
            ['name' => 'Coreano'],
            ['name' => 'Cubano'],
            ['name' => 'Dessert'],
            ['name' => 'di Shanghai'],
            ['name' => 'Egiziano'],
            ['name' => 'Emiratense'],
            ['name' => 'Etiope'],
            ['name' => 'Filippino'],
            ['name' => 'Francese'],
            ['name' => 'Giamaicano'],
            ['name' => 'Giapponese'],
            ['name' => 'Greco'],
            ['name' => 'Hawaiano'],
            ['name' => 'Heathy'],
            ['name' => 'Hongkonghese'],
            ['name' => 'Indiano'],
            ['name' => 'Indonesiano'],
            ['name' => 'Inglese'],
            ['name' => 'Iraniano'],
            ['name' => 'Irlandese'],
            ['name' => 'Israeliano'],
            ['name' => 'Italiano'],
            ['name' => 'Kuwaitiano'],
            ['name' => 'Latinoamericano'],
            ['name' => 'Libanese'],
            ['name' => 'Malese'],
            ['name' => 'Marocchino'],
            ['name' => 'Mediorientale'],
            ['name' => 'Mediterraneo'],
            ['name' => 'Messicano'],
            ['name' => 'Nepalese'],
            ['name' => 'Nigeriano'],
            ['name' => 'Occidentale'],
            ['name' => 'Olandese'],
            ['name' => 'Pakistano'],
            ['name' => 'Pechinese'],
            ['name' => 'Peruviano'],
            ['name' => 'Polacco'],
            ['name' => 'Portoghese'],
            ['name' => 'Rumeno'],
            ['name' => 'Russo'],
            ['name' => 'Singaporiano'],
            ['name' => 'Siriano'],
            ['name' => 'Spagnolo'],
            ['name' => 'Spesa'],
            ['name' => 'Sud Indiano'],
            ['name' => 'Surinamese'],
            ['name' => 'Taiwanese'],
            ['name' => 'Tedesco'],
            ['name' => 'Thai'],
            ['name' => 'Thailandese'],
            ['name' => 'Tibetano'],
            ['name' => 'Turco'],
            ['name' => 'Venezuelano'],
            ['name' => 'Vietnamita'],
            ['name' => 'Altro'],
        ];
        
        foreach ($typesOfCuisines as $types) {
            $newType = new Type();
            $newType->name = $types['name'];    
            $newType->save();
        }
        
        // for ($i=0; $i < 20 ; $i++) {
        //     $newRestaurant = new Type();
        //     $newRestaurant->name = $faker->name();    
        //     $newRestaurant->save();
        // }
    }
}