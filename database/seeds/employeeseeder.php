<?php

use Illuminate\Database\Seeder;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employees = [[
            'name' => 'Syed Anwar Ahmed Shah',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'LAMP STACK',
            'salary' => '20000'
        ],[
            'name' => 'Ali Asghar',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'Ruby STACK',
            'salary' => '20000'
        ],[
            'name' => 'Abdul Wahab',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'IOT Developer',
            'salary' => '20000'
        ],[
            'name' => 'Umair Lakhani',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'AI Developer',
            'salary' => '20000'
        ],[
            'name' => 'Hamza',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'IOT Developer',
            'salary' => '20000'
        ],[
            'name' => 'Saad',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'Ruby Developer',
            'salary' => '20000'
        ],[
            'name' => 'Sikander Deen Muhammad',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'Python Stack',
            'salary' => '20000'
        ],[
            'name' => 'Ismail Akhtar',
            'age' => 25,
            'designation' => 'Trainee Php Junior Dev',
            'qualification' => 'BSSE(LAST SEMESTER) Maju Khi',
            'company' => 'Next Generations Innovations',
            'technology' => 'JAM STACK',
            'salary' => '20000'
        ]];

foreach($employees as $employee)
        DB::table('employees')->insert($employee);


    }
}
