<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function login(){
        $name ="Đỗ Duy Hưng!";
        return view('login')->with('name',$name); 
    }
}