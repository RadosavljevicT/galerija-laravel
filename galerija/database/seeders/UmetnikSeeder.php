<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
$faker = Factory::create();

class UmetnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
       
        DB::table('umetniks')->insert([
            
            'ime_umetnika' => $faker->firstNameFemale(),
            'prezime_umetnika'=> $faker->lastName(),
            'stil' => $faker->randomElement(['Renesansa','Barok,Postimpresionizam','Moderna umetnost']),
            'nacionalnost' => $faker->country(),


        ]);
    }
}
