<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    
     public function login(){

    	return view('index');
    }

    public function postLogin(){
        return view('select_financial');
    }

     public function selectFinancial(){

    	return view('select_financial');
    }
   
   

    

}
