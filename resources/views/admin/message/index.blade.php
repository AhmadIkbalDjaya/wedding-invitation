@extends('admin.layouts.main')

@section('body')
    @include('admin.nav')
    <div class="container">
      <h1>Ucapan Tamu</h1>
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Datang</th>
            <th scope="col">By Guest</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($messages as $message)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $message->name }}</td>
            <td>{{ $message->address }}</td>
            <td>{{ \Carbon\Carbon::parse($message->created_at)->format('d M Y') }}</td>
            <td>{{ $message->isCome }}</td>
            <td>
              {{ $message->guest_name }}
            </td>
            <td>
              {{ $message->isActive }}
            </td>
            <td>
              <form action="{{ route('message.active', ['message' => $message->id]) }}">
                @if ($message->isActive)
                <button class="btn btn-danger">Sembunyikan</button>
                @else
                <button class="btn btn-success">Tampilkan</button>
                @endif
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection