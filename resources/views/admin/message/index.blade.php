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
            <th scope="col">By Guest</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Fatih</td>
            <td>Rachita</td>
            <td>24 Maret 2023</td>
            <td>
              Fatih Djaya
            </td>
            <td>
              <form action="">
                <button class="btn btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
@endsection