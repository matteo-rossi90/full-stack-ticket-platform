<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = ['ASSEGNATO', 'IN LAVORAZIONE', 'CHIUSO'];

        foreach($statuses as $status){
            $new_status = new Status();
            $new_status->type = $status;
            $new_status->save();
        }




    }
}
