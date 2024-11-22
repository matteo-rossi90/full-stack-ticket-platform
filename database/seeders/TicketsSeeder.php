<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 25; $i++){
            $new_ticket = new Ticket();
            $new_ticket->title = $faker->sentence(1);
            $new_ticket->author = $faker->sentence(1);
            $new_ticket->message = $faker->sentence(8);
            $new_ticket->date = $faker->dateTimeBetween('-2 months', 'now');
            $new_ticket->slug = Helper::generateSlug($new_ticket->title, Ticket::class);
            $new_ticket->save();
        }
    }
}
