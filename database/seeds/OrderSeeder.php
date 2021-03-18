<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20 ; $i++) {
            $newOrder = new Order;
            $newOrder->customer_name = $faker->firstName();
            $newOrder->customer_surname = $faker->lastName();
            $newOrder->customer_phone = $faker->phoneNumber();
            $newOrder->customer_city = $faker->city();
            $newOrder->customer_address = $faker->address();
            $newOrder->customer_CAP = $faker->postcode();
            $newOrder->total_price = $faker->randomFloat(2, 1, 300);
            $newOrder->save();
        }
    }
}
