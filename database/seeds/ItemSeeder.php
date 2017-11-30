<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        	[
        		'name' => 'Elsa',
        		'quantity' => '10',
        		'price' => 2.50
        	],
        	[
        		'name' => 'Anna',
        		'quantity' => '5',
        		'price' => 1.50
        	],
        	[
        		'name' => 'Ollof',
        		'quantity' => '10',
        		'price' => 2.50
        	],
        	[
        		'name' => 'Poison Ivy',
        		'quantity' => '9',
        		'price' => 3.50
        	]
        ];

    	DB::table('items')->truncate();
    	DB::table('items')->insert($items);
    }
}
