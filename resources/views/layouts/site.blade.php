<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>{{ env('APP_NAME') }} @yield('title')</title>
</head>

<body class="bg-gray-100">
  @include('layouts.header')

  @yield('main')

  @yield('scripts')
</body>

</html>