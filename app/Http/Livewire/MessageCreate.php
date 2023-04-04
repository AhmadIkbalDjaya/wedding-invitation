<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageCreate extends Component
{
    public $guest_name, $name, $address, $text, $isCome;

    public function render()
    {
        return view('livewire.message-create');
    }

    public function store()
    {
        $validated = $this->validate([
            "name" => "required|string|min:3",
            "address" => "required|string|min:3",
            "text" => "required|string|min:3",
            "guest_name" => "",
            "isCome" => "required",
        ], [
            "name.min" => "Nama minamal 3 karakter",
            "address.min" => "Alamat minamal 3 karakter",
            "text.min" => "Ucapan minimal 3 karakter",
        ]);

        Message::create($validated);
        
        $this->guest_name = null;
        $this->name = null;
        $this->address = null;
        $this->text = null;
        $this->isCome = null;

        $this->emit("messageStore");
    }
}
