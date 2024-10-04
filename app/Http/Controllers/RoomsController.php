<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('index',[
            'rooms' => $rooms
        ]);
    }

    public function show(Room $room)
    {
        return view('chat', [
            'room'=> $room,
            'roomId' => $room->id,
            'messages' => []
        ]);
    }
}
