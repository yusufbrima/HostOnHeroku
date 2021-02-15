<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ env('APP_NAME') }}::@yield('title') </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @include("components.styles");
</head>
<body>
    @yield('header')

    @yield('navbar')

<div class="container" style="margin-top:30px">
    @yield('main')
</div>
<x-footer>

</x-footer>
</body>
</html>
