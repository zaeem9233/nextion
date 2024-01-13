<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="bg-light">

    @include('layout.navbar')

    <main class="p-3 main-content">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-dark" href="{{route('dashboard')}}">
              <i class="fas fa-home mr-5"></i>
            </a>
          </li>
          
          <li class="breadcrumb-item">
            <a class="text-decoration-none text-dark" href="#!">
              Library
            </a>
          </li>
          
          <li class="breadcrumb-item active" aria-current="page">Data</li>

        </ol>
      </nav>

      <div class="row">
        <div class="col-md-12">

              @yield('content')

        </div>
      </div>
    </main>

    @include('layout.footer')

    @include('layout.bottom-files')
</body>
</html>
