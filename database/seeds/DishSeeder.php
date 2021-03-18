<?php
use App\Dish;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 20; $i++) { 
            $newDish = new Dish();
            $newDish-> name =  $faker->sentence(3);
            $newDish->slug = Str::slug($newDish->name, '-');
            $newDish-> ingredients =  $faker->text(100);
            $newDish-> price =  $faker->randomFloat(2, 1, 100);
            $newDish-> visibility =  $faker->boolean();
            $newDish-> save();
        }
    }
}
