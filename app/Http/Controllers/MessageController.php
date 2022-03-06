<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    //to create messages and submit to DB
    public function create(Request $request){
        $message = new Message();
        $message->title = $request->title;
        $message->body = $request->body;
        $message->save();
        return redirect('/');
    }

    public function view($id){
        $message = Message::findOrFail($id);
        // var_dump($message->title);exit;
        return view('viewmessage', [
                'message' => $message
        ]);
    }

}
