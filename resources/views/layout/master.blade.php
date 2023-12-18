<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lara2303.d2 - @yield('title');</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    <div class="container">
         <!-- menu -->
         @include('layout.menu')

         <!-- main section -->
         @yield('main-section')

         <!-- footer -->
         @include('layout.footer')

    </div>
    
</body>
</html>