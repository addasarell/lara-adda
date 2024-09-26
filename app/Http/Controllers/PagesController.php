<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function about(){
    return view ('about');
   }
    public function calculate($a,$b){
        return 'result:'. ($a+$b); 
    }

    public function admin(){
        return view ('admin.index');

   }
   
   
   public function services()
   {
       $services = ['design','develeop','test'];
       return view ('services')->with('services',$services);
   }



    //
}
