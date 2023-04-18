@extends('admin.layouts.main')
@section('body')
    @include('admin.nav')
    <div class="container">
      <h1>Edit Tamu Undangan</h1>
      <div class="row">
        <div class="col-md-8">
          <form action="{{ route('guest.update', ['guest' => $guest->id]) }}" method="post">
            @method("patch")
            @csrf
            <div class="form-floating mb-3">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Tamu" value="{{ old('name', $guest->name) }}">
              <label for="name">Nama Tamu</label>
              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" value="{{ old('slug', $guest->slug) }}">
              <label for="slug">Slug</label>
              @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat" value="{{ old('address', $guest->address) }}">
              <label for="address">Alamat</label>
              @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Nomor Telephone" value="{{ old('phone', $guest->phone) }}">
              <label for="phone">Phone</label>
              @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control @error('information') is-invalid @enderror" name="information" placeholder="Leave a comment here" id="information" value="{{ old('information', $guest->information) }}"></textarea>
              <label for="information">information</label>
              @error('information')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Edit Tamu</button>
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