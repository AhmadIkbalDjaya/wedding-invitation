<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body{
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-4">
          <form class="login-box" action="{{ route('login.store') }}" method="post">
            @csrf
            <h3>Login Admin Undangan</h3>
            <div class="form-floating mb-3">
              <input type="text" name="username" class="form-control @error('name') is-invalid @enderror" id="usernameInput" placeholder="Username">
              <label for="usernameInput">Username</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary w-100 rounded-5">Login</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>