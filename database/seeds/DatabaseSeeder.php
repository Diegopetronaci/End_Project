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
        $this->call([
        DishSeeder::class,
        OrderSeeder::class,
        PaymentSeeder::class,
        RestaurantSeeder::class,
        TypeSeeder::class,
        ]);
    }
}
