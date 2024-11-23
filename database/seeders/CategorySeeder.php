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

        $categories = [
            "Account e Autenticazione",
            "Sicurezza",
            "Software",
            "Sistema Operativo",
            "Rete e Connessioni",
            "Cloud e Archiviazione",
            "Hardware",
        ];

        foreach($categories as $category){
            $new_category = new Category();
            $new_category->name = $category;
            $new_category->save();
        }
    }
}
