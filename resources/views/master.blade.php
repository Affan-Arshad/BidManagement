<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bootstrap.min.css">
    @yield('additionalCSS')
    <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css">
</head>
<body>
    @yield('content')
    <script src="/js/main.js"></script>
    @yield('additionalJS')
</body>
</html>