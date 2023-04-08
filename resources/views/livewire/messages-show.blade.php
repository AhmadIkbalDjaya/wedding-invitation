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
    {{-- <script>
        function myjs() {
            const rowWishes1Height = $("#wishes .container .row:first-child").height();
            const rowWishes2Height = $("#wishes .container .row:nth-child(2)").height();
            const wishesSection = $("#wishes").height();
            const messageContainerHeight =
            wishesSection - (rowWishes1Height + rowWishes2Height) - 15;
            $("#wishes .message-container").height(messageContainerHeight);
            $("#wishes .message-container").css("background", "pink")
            
            console.log(messageContainerHeight);
        }
    </script> --}}
</div>

{{-- @push('script')
<script>
    document.addEventListener('livewire:load', function () {
        setTimeout(() => {
            Livewire.emit('messageStore')
        })

        Livewire.on('messageStore', function () {
            console.log("OK");
        })
    })
</script>
@endpush --}}