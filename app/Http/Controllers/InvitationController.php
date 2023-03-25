<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Resources\MessageResource;

class InvitationController extends Controller
{
    public function index (Guest $guest) {
        // $query = Message::latest()->get();
        // $data = MessageResource::collection($query);
        return view('index', [
            "guest" => $guest,
            "messages" => Message::where("isActive", "1")->latest()->get(),
        ]);
    }

    public function wishes (Request $request) {
        $validated = $request->validate([
            "name" => "required",
            "address" => "required",
            "text" => "required",
            "guest_name" => "",
            "isCome" => "required",
        ]);
        Message::create($validated);
        return back();
    }
}
