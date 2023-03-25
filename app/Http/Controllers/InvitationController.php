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

    // public function wishes (Request $request) {
    //     $validated = $request->validate([
    //         "name" => "required",
    //         "address" => "required",
    //         "text" => "required",
    //         "guest_name" => "",
    //         "isCome" => "required",
    //     ]);
    //     Message::create($validated);
    //     return back();
    // }

    public function messageStore (Request $request) {
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['text'] = $request->text;
        $data['isCome'] = $request->isCome;
        $data['guest_name'] = $request->guest_name;
        Message::create($data);
    }

    public function readMessage(){
        return view('partials.messages', [
            "messages" => Message::where("isActive", "1")->latest()->get(),
        ]);
    }
}
