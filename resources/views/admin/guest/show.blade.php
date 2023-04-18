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
            <a href="http://127.0.0.1:8000/{{ $guest->slug }}">
              http://127.0.0.1:8000/{{ $guest->slug }}
            </a>
          </td>
        </tr>
        <tr>
          <td>
            <button class="border-0 p-0 bg-transparent copy-link" data-clipboard-text="http://127.0.0.1:8000/{{ $guest->slug }}">
              Copy Link 
              <i class="fa-solid fa-copy"></i>
            </button>
          </td>
          <td></td>
          <td>
            @if ($guest->phone != null)
            <a href="https://wa.me/62895327581913?text=Assalamu datangki di, http://127.0.0.1:8000/{{ $guest->slug }}" target="_blank" class="text-black text-decoration-none">
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