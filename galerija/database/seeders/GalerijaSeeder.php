<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
$faker = Factory::create();

class GalerijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
        $faker = Factory::create();
       // require_once '/path/to/C:/wamp64/www/Laravel-domaci/galerija/vendor/fakerphp/faker/src/autoload.php';
       // $faker = Faker\Factory::create();
        DB::table('galerijas')->insert([
           
            'grad' => $faker->city(),
            'adresa'=> $faker->streetAddress(),
            'naziv' => $faker->catchPhrase(),


        ]);
    }
}
