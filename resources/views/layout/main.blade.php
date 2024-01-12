<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="bg-light">

    @include('layout.navbar')

    <main class="p-3">
      {{-- <div class="container-fluid"> --}}
        {{-- <div class="row flex-nowrap"> --}}
        
          {{-- @include('layout.sidemenu') --}}
          
          {{-- <div class="col py-3"> --}}

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

                <div class="card">
                  <div class="card-body">
                    
                    <h2>@yield('title')</h2>

                    @yield('content')

                  </div>
                </div>

              </div>
            </div>

          {{-- </div> --}}

        {{-- </div> --}}
      {{-- </div> --}}
    </main>

    @include('layout.footer')

    @include('layout.bottom-files')
</body>
</html>
