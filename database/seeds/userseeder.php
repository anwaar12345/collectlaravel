<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [['name'=>'Syed Anwar Ahmed Shah','email'=>'syedanwar016@gmail.com','password'=>'shahji444'],
                 ['name'=>'Syed Anwar ','email'=>'syedanwar1016@gmail.com','password'=>'shahji444'],
                 ['name'=>'Syed Shah','email'=>'syedanwar2016@gmail.com','password'=>'shahji444']];
        
        
        foreach($users as $user)

        DB::table('users')->insert($user);

        }
 
       
    }

