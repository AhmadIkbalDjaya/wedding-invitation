<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "address" => "di ",
            "text" => $this->text,
            "isCome" => $this->isCome,
            // "created_at" => $this->created_at,
            "created_at" => Date::parse($this->creaeted_at)->format('j-F-Y'),
        ];
    }
}
