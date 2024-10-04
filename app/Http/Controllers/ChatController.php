<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ChatController extends Controller
{
    public function fireMessage(Request $request)
    {
        MessageSent::dispatch($request->sender, $request->message);
        return $request->all();
    }
    public function chatroom(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);
        $username = $request->username;
        return view('chat', ['username' => $username]);
    }
}
