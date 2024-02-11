<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Blog</title>
    {{-- <link href="{{ asset('css/main.min.css') }}" rel="stylesheet"> --}}
    @vite('css/main.min.css')
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-hijau" >
        <div class="container">
          <a class="navbar-brand text-biru" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-biru active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-biru" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-biru disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item">
                    <a href="/yourpost" class="nav-link text-biru mx-3">Dashboard</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="btn btn-outline-biru">Login</a>
                </li>
                @endauth
            </ul>
          </div>
        </div>
      </nav>
      <div class="container mt-3">
        @yield('container')
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>