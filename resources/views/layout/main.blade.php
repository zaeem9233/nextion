<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="bg-light">

    @include('layout.navbar')

    <main>
      <div class="container-fluid">
        <div class="row flex-nowrap">
        
          @include('layout.sidemenu')
          
          <div class="col py-3">
            @yield('content')
          </div>

        </div>
      </div>
    </main>

    @include('layout.footer')

    @include('layout.bottom-files')
</body>
</html>
