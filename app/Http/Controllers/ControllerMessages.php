<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;

class ControllerMessages extends Controller
{
    function mostrar() {
        $messages = Message::all();
        return view('/messages', ['messages' => $messages]);
    }
    

}
