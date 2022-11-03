<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="../css/app.css">

   
 


    <title> @yield('titel')</title>
</head>
<body>
    <header class="card-header">
    <p class="card-header-title">
      Table
    </p>
        <ul class="menu-label">
            <li class="li block is-reght">  @yield('header1') </li>
            <li class="li block is-reght">  @yield('header2') </li>
        </ul>
    </header>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/app.js"></script>

</body>
</html>