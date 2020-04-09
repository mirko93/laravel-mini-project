<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home')</title>
</head>
<body>
    
    <div class="container">

      @include('nav')

      @if (session()->has('message'))
      <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
      </div>
      @endif

      @yield('content')

    </div>


</body>
</html>