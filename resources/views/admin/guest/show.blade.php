@extends('admin.layouts.main')
@section('body')
    @include('admin.nav')
    <div class="container">
      <a href="{{ route('guest.index') }}" class="btn btn-primary my-2 py-0">< Kembali</a>
      <h1>Detail Tamu</h1>
      <table class="table table-borderless d-inline-block">
        <tr>
          <th>Name</th>
          <td>:</td>
          <td>{{ $guest->name }}</td>
        </tr>
        <tr>
          <th>Slug</th>
          <td>:</td>
          <td>{{ $guest->slug }}</td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td>{{ $guest->address }}</td>
        </tr>
        <tr>
          <th>Information</th>
          <td>:</td>
          <td>{{ $guest->information }}</td>
        </tr>
        <tr>
          <th>Nomor Telepon</th>
          <td>:</td>
          <td>{{ $guest->phone }}</td>
        </tr>
        <tr>
          <th>Status Kiriman</th>
          <td>:</td>
          <td>
            <form action="{{ route('guest.send', ['guest' => $guest->id]) }}" method="post">  
              @csrf
              @if (!$guest->isSend)
              <input type="hidden" name="isSend" value="1">
              <button type="submit" class="border-0 bg-transparent">
                <span class="badge text-bg-danger">Belum</span>
              </button>
              @else
              <input type="hidden" name="isSend" value="0">
              <button type="submit" class="border-0 bg-transparent">
                <span class="badge text-bg-success">Sudah</span>
              </button>
              @endif
            </form>
          </td>
        </tr>
        <tr>
          <th>Link Undangan</th>
          <td>:</td>
          <td>
            <a href="https://sgso-invitation.com/AnnaKhalis/{{ $guest->slug }}">
              https://sgso-invitation.com/AnnaKhalis/{{ $guest->slug }}
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <button class="border-0 p-0 bg-transparent copy-link" 
              data-clipboard-text="
Bismillahirrahmanirrahim
Assalamu'alaikum warahmatullahi wabarakatuh

Kepada Yth. *{{ $guest->name }}*

Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami. 

Berikut link undangan kami untuk info lengkap acara bisa kunjungi:

*https://sgso-invitation.com/AnnaKhalis/{{ $guest->slug }}*

Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu di acara pernikahan kami.

Wassalamu'alaikum warahmatullahi wabarakatuh

Kami yang berbahagia
*Anna & Khalis*"
              >
                <i class="fa-brands fa-whatsapp"></i>
              </button>
              <button class="border-0 p-0 bg-transparent copy-link" data-clipboard-text="https://sgso-invitation.com/AnnaKhalis/{{ $guest->slug }}">
                <i class="fa-solid fa-copy"></i>
              </button>
              @if ($guest->phone != null)
              <a href="https://wa.me/62895327581913?text=
Bismillahirrahmanirrahim
%0A
Assalamu'alaikum warahmatullahi wabarakatuh
%0A%0A
Kepada Yth. *{{ $guest->name }}*
%0A%0A
Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami. 
%0A%0A
Rihul Jannah Djaya & Nur Khalis
%0A%0A
Berikut link undangan kami untuk info lengkap acara bisa kunjungi:
%0A%0A
*https://sgso-invitation.com/AnnaKhalis/{{ $guest->slug }}*
%0A%0A
Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu di acara pernikahan kami.
%0A%0A
Wassalamu'alaikum warahmatullahi wabarakatuh
%0A%0A
Kami yang berbahagia
*Anna & Khalis*" 
              target="_blank" class="text-black">
                <i class="fa-sharp fa-solid fa-paper-plane"></i>
              </a>
              @endif
          </td>
          <td></td>
          <td>
            @if ($guest->phone != null)
            <a href="https://wa.me/62895327581913?text=Assalamu datangki di, https://sgso-invitation.com/{{ $guest->slug }}" target="_blank" class="text-black text-decoration-none">
                Kirim Wa
                <i class="fa-sharp fa-solid fa-paper-plane"></i>
              </a>
            @endif
          </td>
        </tr>
      </table>
      <a href="{{ route('guest.edit', ['guest' => $guest->id]) }}" class="text-decoration-none text-black">
        <span class="badge text-bg-warning">Edit</span>
      </a>
      <form action="{{ route('guest.destroy', ['guest' => $guest->id]) }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="border-0 bg-transparent">
          <span class="badge text-bg-danger">Hapus</span>
        </button>
      </form>
    </div>
@endsection