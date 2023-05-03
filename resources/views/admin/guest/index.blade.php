@extends('admin.layouts.main')
@section('body')
  @include('admin.nav')
  <div class="container">
    <h1>Tamu Undangan</h1>
    <a href="{{ route('guest.create') }}" class="btn btn-primary">Tambah Undangan</a>
    <div class="table-responsive">
      <table class="table table-bordered mt-5">
        <thead class="text-center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Copy/Kirim</th>
            <th scope="col">Terkirim?</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guests as $guest)
          <tr>
            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
            <td style="white-space: nowrap">{{ $guest->name }}</td>
            <td style="white-space: nowrap">{{ $guest->address }}</td>
            <td class="text-center">
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
            <td class="text-center">
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
            <td class="d-flex justify-content-center">
              <a href="{{ route('guest.show', ['guest' => $guest->id]) }}">
                <span class="badge text-bg-primary me-1">Detail</span>
              </a>
              <a href="{{ route('guest.edit', ['guest' => $guest->id]) }}">
                <span class="badge text-bg-warning">Edit</span>
              </a>
              <form action="{{ route('guest.destroy', ['guest' => $guest->id]) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="border-0 bg-transparent">
                  <span class="badge text-bg-danger">Hapus</span>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection