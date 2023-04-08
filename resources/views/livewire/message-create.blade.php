<div class="col-12 col-md-6" id="messages-container">
    <form wire:submit.prevent="store" class="send-box" id="message-form">
        <input type="hidden" wire:model='guest_name' id="guest_name" value="{{ $guest_name }}">
        <p class="title">Kirim Ucapan:</p>
        <div class="form-input">
            <input type="text" wire:model="name" name="name" id="name" placeholder=" " required class=" @error('name') is-invalid @enderror"/>
            <label for="name"><i class="fa-solid fa-user"></i> Nama Lengkap</label>
            @error('name')
                <div id="" class="invalid-feedback small">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input">
            <input type="text" wire:model="address" name="address" id="address" placeholder=" " required class="@error('address') is-invalid @enderror"/>
            <label for="address"><i class="fa-solid fa-location-dot"></i> Alamat</label>
            @error('address')
                <div id="" class="invalid-feedback small">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-input ta">
            <textarea id="text" wire:model="text" name="text" placeholder="" rows="3" required class="@error('text') is-invalid @enderror"></textarea>
            <label for="text"><i class="fa-solid fa-pen-to-square"></i> Pesan</label>
            @error('text')
                <div id="" class="invalid-feedback small">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-audio-box d-flex mb-3">
            <div class="form-radio me-3 d-flex align-items-center">
                <input type="radio" wire:model="isCome" name="isCome" value="1" id="comeTrue" class="me-1" required />
                <label class="labelRadio" for="comeTrue">Hadir</label>
            </div>
            <div class="form-radio me-3 d-flex align-items-center">
                <input type="radio" wire:model="isCome" name="isCome" value="0" id="comeFalse" class="me-1" required/>
                <label class="labelRadio" for="comeFalse">Tidak Hadir</label>
            </div>
            @error('isCome')
                <div id="" class="invalid-feedback small">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="send-message" id="send-message">Kirim Sekarang</button>
    </form>
</div>