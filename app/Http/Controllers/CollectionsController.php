<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;


class CollectionsController extends Controller
{
    //

public function Collections()
{
    
    $collections = collect([

        ['name'=>'Syed Anwar Ahmed Shah','age'=>'25','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'LAMP Stack'],
        ['name'=>'Syed Anwar Shah','age'=>'24','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'RUBY DEVELOPER'],
        ['name'=>'Syed Ahmed shah','age'=>'23','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'MERN Stack'],
        ['name'=>'Shah Sahab','age'=>'22','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'MEAN Stack'],
        ['name'=>'Shah Ji','age'=>'21','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'JAVA Stack'],
        ['name'=>'Shah Saab','age'=>'20','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'PYTHON Stack'],
        ['name'=>'Shah Saab','age'=>'19','Qualification'=>'BSSE','Designation'=>'Trainee Junior Software Developer','company'=>'NEXT GENERATION INNOVATION','Salary'=>20000,'Stack'=>'DEVOPS']
    ]);


                       
                        
                        
//    dd();                     

                        
return view('welcome')
            ->with('employees', $collections->all())
            ->with('totalsalary',$collections->sum('Salary'))
            ->with('Stacks',$collections->groupBy('Stack'));  
        }

}
