<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
   // public
      //$routes = array("home" => route("about"));
    
    /*public function view(){
      return view()
    }*/

    public function index(){
    	return view("main");  
    }

    public function about(){
      return view("about");
    }
}
