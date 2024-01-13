<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="bg-light">

    @include('layout.navbar')

    <main class="p-3 main-content">

      @include('layout.breadcrumb')

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
