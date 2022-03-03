<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    //home page loading handler
    public function index(){

        // instantiate Message model class here
        $messages = Message::all();

        return view('index', [
            'messages' => $messages

        ]);
        // echo 'Home';
    }
}
