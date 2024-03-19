<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class AdminMessageController extends Controller
{
    public function index()
    {
       $messages = Message::all();

      return view('admin.messages.home', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'Message' => 'required',
        ]);

        Message::create($data);

        return redirect(route('contactus'))->with('status', 'Message has been successfully sent!.');
    }
    
      public function show(Message $message){

        return view('admin.messages.show', compact('message'));
      }
     
    public function delete(Message $message)
    {
        return view('admin.messages.delete',['message' => $message]);
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect(route('admin.messages.index'))->with('status','Messages has been successfuly deleted');
}
}
