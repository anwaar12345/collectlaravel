<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\storecollections;
class Storecontroller extends Controller
{
    public function collections()
    {
// $collections = collect([
// ['Serial'=>'01','name'=>'Computer','company'=>'hp','Model'=>'Core i7','color'=>'Grey White','price'=>21000,'freeitems'=>true],
// ['Serial'=>'02','name'=>'Laptop hp','company'=>'hp','Model'=>'Core i5','color'=>'Black','price'=>43000],
// ['Serial'=>'03','name'=>'Macintosh','company'=>'Apple','Model'=>'Core i5','color'=>'White','price'=>200000],
// ['Serial'=>'04','name'=>'Laptop DELL','company'=>'DELL','Model'=>'Core i7','color'=>'Brown','price'=>40000],
// ['Serial'=>'05','name'=>'Lenovo Computer','company'=>'Lenovo','Model'=>'Core 2 Duo','color'=>'Blue','price'=>39000,'freeitems'=>true],
// ['Serial'=>'06','name'=>'Laptop DELL','company'=>'DELL','Model'=>'Core i7','color'=>'Brown','price'=>40000],
// ['Serial'=>'07','name'=>'Lenovo Laptop','company'=>'Lenovo','Model'=>'Core 2 Duo','color'=>'Blue','price'=>39000,'freeitems'=>true],
// ]);

$collections = collect(storecollections::all());
$totalprice = $collections->sum('price');
$freeitems = $collections->where('freeitems',1);
$totaldiscounts = $freeitems->sum('price');
$totalnet = $totalprice-$totaldiscounts;

return view('store')
             ->with('products',$collections->all())
             ->with('totalproducts',count($collections->all()))
             ->with('totalprice',$totalprice) 
             ->with('companies',$collections->groupBy('company'))
             ->with('totaldiscounts',$totaldiscounts)
             ->with('totalnet',$totalnet)
             ->with('freeitems',$freeitems);



    }




    
}
