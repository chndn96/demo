<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chndu;
use App\Models\user;
use Faker\Factory as Faker;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = faker::create();
        for($i = 45; $i < 98 ; $i++){
            $chndu = new Chndu;
            $chndu->name = $faker->name;
            $chndu->email =  $faker->email;
            $chndu->gender = 'm';
            $chndu->address = $faker->address;
            $chndu->state = $faker->state;
            // $chndu->country =$faker->country;
            // $chndu->dob =$faker->date;
            $chndu-
            $chndu->password = $faker->password;
            $chndu->save();
        }

    }
}
