<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('cities')->insert([
               [
                    'name' => 'Anantapur'
               ],
               [
                    'name' => 'Bageshwar'
               ],
               [
                    'name' => 'Chirala'
               ],
               [
                    'name' => 'Cuttack'
               ],
               [
                    'name' => 'Gobichettipalayam'
               ],
               [
                    'name' => 'Hoshiarpur'
               ],
               [
                    'name' => 'Jharsuguda'
               ],
               [
                    'name' => 'Karjat'
               ],
               [
                    'name' => 'Lanka'
               ],
               [
                    'name' => 'Malpura'
               ],
               
            
        ]);
    }
    
    
}

