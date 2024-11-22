<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 10; $i++){
            $new_category = new Category();
            $new_category->name = $faker->randomElement([
                "Account e Autenticazione",
                "Sicurezza",
                "Software",
                "Sistema Operativo",
                "Rete e Connessioni",
                "Cloud e Archiviazione",
                "Hardware",
            ]);
            $
            $new_category->save();
        }
    }
}
