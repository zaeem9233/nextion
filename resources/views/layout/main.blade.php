<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.head')
</head>
<body class="bg-light">

    @include('layout.navbar')

    <main>
        
      @yield('content')

    </main>

    @include('layout.footer')

    @include('layout.bottom-files')
</body>
</html>
