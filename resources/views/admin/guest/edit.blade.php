@extends('admin.layouts.main')
@section('body')
    @include('admin.nav')
    <div class="container">
      <h1>Edit Tamu Undangan</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="" method="post">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Nama Tamu</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Alamat</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
              <label for="floatingTextarea">Description</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Edit Tamu</button>
          </form>
        </div>
      </div>
    </div>
@endsection