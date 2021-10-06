<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'kpi_market')</title>
    <link rel="shortcut icon" href="/images/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/7b74a90834.js" crossorigin="anonymous"></script>

</head>

<body>
    @include('parts.header')
    <main>@yield('content')</main>
    @include('parts.footer')
</body>
</html>