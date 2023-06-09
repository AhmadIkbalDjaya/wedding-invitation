<div class="message-container" id="messages-containerr" wire:dom="myjs">
    @foreach ($messages as $message)
    <div class="message-box d-flex justify-content-center">
        <div class="circle-user">{{ ucfirst(substr($message->name, 0, 1)) }}</div>
        <div class="text-box">
            <div class="arrow-left"></div>
            <div class="d-flex align-items-center">
                <p class="user-name me-1">{{ $message->name }}</p>
                <span class="status">
                    @if ($message->isCome == 1)
                    <i class="fa-solid fa-check"></i>
                    @else
                    <i class="fa-solid fa-minus"></i>
                    @endif
                </span>
            </div>
            <p class="user-address"> di {{ $message->address }}</p>
            <p class="user-message">
                "{{ $message->text }}"
            </p>
            <p class="message-date">{{ \Carbon\Carbon::parse($message->created_at)->format('d F Y') }}</p>
        </div>
    </div>
    @endforeach
</div>