
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href={{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}
 />
     <link rel="stylesheet" href={{ asset('assets/admin/dist/css/adminlte.min.css') }}
 />
</head>
<body class="hold-transition sidebar-mini">
@yield('content')
<script src={{ asset('assets/admin/plugins/jquery/jquery.min.js') }} ></script>

    <script src={{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }} 
></script>

    <script src={{ asset('assets/admin/dist/js/adminlte.min.js') }} ></script>
</body>
</html>
