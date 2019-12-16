<?php

use App\Tienda;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;


class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        $faker = Faker::Create();
        for ($i=0; $i <= 99 ; $i++) { 
            Tienda::create([
                'nombre_tienda' => $faker->company,
                'direccion' => $faker->address,
                'telefono' => $faker->phoneNumber,
                'nit' => $faker->ean8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
         
    }
}
