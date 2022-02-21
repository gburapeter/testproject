<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <script type="text/javascript" src="{{ asset('\app.js') }}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
       
        @yield('styles')
    </head>
    <body>
      <div class="content">
      @yield('content')
    </div>

      {{-- <footer>
        <p>Copyright 2022 TechDrobe</p>
      </footer> --}}
    </body>
</html>