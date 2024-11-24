<?php

namespace Database\Seeders;

use App\Models\Operator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OperatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 5; $i++){
            $new_operator = new Operator();
            $new_operator->name = $faker->firstName();
            $new_operator->surname = $faker->lastName();
            $new_operator->email = $faker->email();
            $new_operator->is_available = $faker->boolean('true', true);
            $new_operator->save();
        }
    }
}
