@extends('admin.layouts.main')
@section('body')
    @include('admin.nav')
    <div class="container">
      <h1>Tambah Tamu Undangan</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="/admin/guest/" method="post">
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Tamu" value="{{ old('name') }}">
              <label for="name">Nama Tamu</label>
              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" value="{{ old('slug') }}">
              <label for="slug">Slug</label>
              @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat" value="{{ old('address') }}">
              <label for="address">Alamat</label>
              @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control @error('information') is-invalid @enderror" name="information" placeholder="Leave a comment here" id="information" value="{{ old('information') }}"></textarea>
              <label for="information">information</label>
              @error('information')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Tambah Tamu</button>
          </form>
        </div>
      </div>
    </div>
    <script>
      const name = document.querySelector('#name');
      const slug = document.querySelector('#slug');

      name.addEventListener('change', function(){
        fetch('/admin/guest/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
      });
    </script>
@endsection