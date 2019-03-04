<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
for ($i=0; $i < 80; $i++) {
    \DB::table('products')->insert(array(
           'name' => $faker->text(10),
           'short'  => $faker->text(20),
           'body'=>$faker -> text(900)
    ));
}
    }
}
