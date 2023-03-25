@extends('admin.layouts.main')
@section('body')
  @include('admin.nav')
  <div class="container">
    <h1>Tamu Undangan</h1>
    <a href="/admin/guest/create" class="btn btn-primary">Tambah Undangan</a>
    <div class="table-responsive">
      <table class="table table-bordered mt-5">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Slug</th>
            <th scope="col">Alamat</th>
            <th scope="col">Informasi</th>
            <th scope="col">Link</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guests as $guest)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $guest->name }}</td>
            <td>{{ $guest->slug }}</td>
            <td>{{ $guest->address }}</td>
            <td>{{ $guest->information }}</td>
            <td>
              <a href="http://127.0.0.1:8000/{{ $guest->slug }}" target="_blank"> http://127.0.0.1:8000/{{ $guest->slug }} </a>
            </td>
            <td class="d-flex">
              <a href="/admin/guest/edit/{{ $guest->id }}" class="text-white text-decoration-none btn btn-warning me-1">Edit</a>
              <form action="">
                <button class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>  
@endsection