<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
  </head>
  <body>
    @include('partials.navbar')
    <div class="container mt-5">
      @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
