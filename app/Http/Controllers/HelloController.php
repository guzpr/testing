<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(){
        $name = 'Putu testing';
        return view('hello',['name'=>'Testing']);
    }

    
}
