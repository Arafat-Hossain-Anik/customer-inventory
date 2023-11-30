{{-- bootstrap navbar codes --}}
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">CIM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      {{-- navbar items --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
        </ul>
        <div class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @auth
                <li class="nav-item">
                  <a class="nav-link  {{ Request::is('login') ? 'active' : '' }}" aria-current="page"  href="{{ route('logout') }}">Log Out</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"  href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" aria-current="page" href="/register">Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  {{ Request::is('login') ? 'active' : '' }}" aria-current="page" href="/login">Log In</a>
                </li>
                @endauth
              </ul>
        </div>
      </div>
    </div>
</nav>