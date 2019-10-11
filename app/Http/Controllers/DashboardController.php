<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function normal_pass(){

     	   return view('dashboard.normal_pass');
     }


    public function menu_fn(){

     	   return view('dashboard.menu');
     }

       
       public function submit_fn(){

       	        return view('dashboard.payment_option');
       }

}
