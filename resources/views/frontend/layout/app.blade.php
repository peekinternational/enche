<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Cinnect" />
    <meta name="description" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link
      href="https://cdn.form.io/flatpickr/flatpickr.min.css"
      rel="stylesheet"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Document title -->
    <title>Enche</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    @yield('style')

  </head>
  <body>
    <div class="container-fluid">
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')
    @yield('script')
  </div>

  <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  </body>

  </html>