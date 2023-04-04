<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    protected  $listeners = ["messageStore" => "render"];
    public function render()
    {
        return view('livewire.messages-show', [
            "messages" => Message::where("isActive", "1")->latest()->get(),
        ]);
    }
}
