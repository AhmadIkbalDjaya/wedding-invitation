<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index () {
        return view("admin.message.index", [
            "title" => "Wishes",
            "messages" => Message::latest()->get(),
        ]);
    }

    public function isActive (Message $message) {
        $message->isActive == 1 ? $message->update(["isActive" => 0]) : $message->update(["isActive" => 1]);
        return redirect('/admin/message');
    }
}
