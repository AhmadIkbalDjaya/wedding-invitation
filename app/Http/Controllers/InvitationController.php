<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Resources\MessageResource;

class InvitationController extends Controller
{
    public function index (Guest $guest) {
        return view('index', [
            "guest" => $guest,
            "messages" => Message::where("isActive", "1")->latest()->get(),
        ]);
    }
}
