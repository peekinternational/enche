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