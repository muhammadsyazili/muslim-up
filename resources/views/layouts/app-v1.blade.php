<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

  <title>{{env('APP_NAME')}} | @yield('title')</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    body{
      background: rgb(2,0,36) !important;
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%) !important;
    }

    .login-logo,.register-logo{
      color: white;
    }

    .btn-primary{
      background: rgb(2,0,36) !important;
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%) !important;
      border: none;
    }

    .login-box,.register-box{
      width: 50vw !important;
    }

    .login-logo #icon-brand,.register-logo #icon-brand{
      width: 200px;
    }

    @media (max-width:576px){
      .login-box,.register-box{
        margin-top:.5rem !important;width:90% !important;
      }

      .login-logo #icon-brand,.register-logo #icon-brand{
        width: 100px;
      }
    }
  </style>
</head>
<body class="hold-transition register-page login-page">

  @yield('content', 'empty content')

  <!-- jQuery -->
  <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
