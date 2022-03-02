<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home page loading handler
    public function index(){
        return view('welcome');
        // echo 'Home';
    }
}
