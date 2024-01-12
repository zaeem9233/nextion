<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nextion Task')</title>
    <!-- Include your stylesheets and scripts here -->
    <link rel="stylesheet" href="{{ asset('css/bootsrap.css') }}">
</head>
<body>

    <main>
        
      @yield('content')

    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
