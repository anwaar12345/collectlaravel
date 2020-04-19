<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();

                    DB::table('storecollections')->truncate();
                    DB::table('employees')->truncate();
        
        Model::reguard();
        $this->call(employeeseeder::class);
        $this->call(storecollectionseeder::class);
        $this->call(userseeder::class);
    }
}
