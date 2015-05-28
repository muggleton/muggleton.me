<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  {{HTML::style('/assets/css/vendor/bootstrap/bootstrap.min.css')}}
  {{HTML::style('/assets/css/global.css')}}

  @if(!Auth::guest())
  {{HTML::style('/assets/css/pages/admin.css')}}
  @endif
  
  {{HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}
  @yield('styles')

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>