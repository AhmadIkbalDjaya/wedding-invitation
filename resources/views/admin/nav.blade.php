<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('guest.index') }}">Admin</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/guest*') ? 'active' : '' }}" aria-current="page" href="{{ route('guest.index') }}">Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin/message*') ? 'active' : '' }}" href="{{ route('message.index') }}">Wishes</a>
        </li>
      </ul>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button class="btn btn-primary" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>