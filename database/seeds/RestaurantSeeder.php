<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Restaurant;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
            $newRestaurant = new Restaurant;
            $newRestaurant->name = $faker->name();
            $newRestaurant->slug = Str::slug($newRestaurant->name, '-');
            $newRestaurant->address = $faker->address();
            $newRestaurant->phone = $faker->phoneNumber();
            $newRestaurant->save();
        }
    }
}