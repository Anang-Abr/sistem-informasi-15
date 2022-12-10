<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    {{-- <link rel="stylesheet" href="{{ url("assets/css/style.css") }}"> --}}
    <link rel="stylesheet" href="{{ url("assets/css/main.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/alex.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/reynaldi.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/firman.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/anang.css") }}">
    <link rel="stylesheet" href="{{ url("assets/css/account.css") }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <x-head.tinymce-config/>
  </head>
  <body>
    <div >
        @yield('content')
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ url('assets/main.js') }}"></script>
  </body>
</html>