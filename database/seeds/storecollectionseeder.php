<?php

use Illuminate\Database\Seeder;

class storecollectionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $collections = [
            [
            'name' => 'Laptop',
            'company' => 'Dell',
            'Model' => 'core i9',
            'color' => 'Black',
            'Price' => '70000',
            'freeitems' => 0,
        ],  [
            'name' => 'Computer',
            'company' => 'Dell',
            'Model' => 'core 2 Duo',
            'color' => 'Grey',
            'Price' => '7000',
            'freeitems' => 1,
        ],
        [
            'name' => 'Laptop',
            'company' => 'HP',
            'Model' => 'core i9',
            'color' => 'Black',
            'Price' => '80000',
            'freeitems' => 0,
        ],
        [
            'name' => 'Laptop',
            'company' => 'Lenovo',
            'Model' => 'core i9',
            'color' => 'Black',
            'Price' => '80000',
            'freeitems' => 0,
        ],
        [
            'name' => 'Computer',
            'company' => 'Lenovo',
            'Model' => 'core i9',
            'color' => 'Black',
            'Price' => '80000',
            'freeitems' => 0,
        ],
        
    ];

foreach($collections as $collection)
        DB::table('storecollections')->insert($collection);


    }






    }

