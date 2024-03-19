<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $Messages = Message::all();
        //dd($blogs);

        return view('contactus');
    }
     
    public function store(Message $message, Request $request){
        $data = $request->validate([
            'name' => 'required|min:8',
            'email' => 'required|email',
            'Message' => 'required|min:8',
        ]);

        $newMessage = $message->messages()->create($data);

        return redirect(route('contactus.index', ['message' => $message]));
    }
}
