<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-table.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    @yield('additionalCSS')
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
    <script src="/js/cleave.min.js"></script>
</head>
<body>
    @include('partials.nav')
    @yield('content')
    <script src="/js/bootstrap.js"></script>
    <script src="/js/bootstrap-table.min.js"></script>
    <script src="/js/bootstrap-table-natural-sorting.min.js"></script>
    <script src="/js/main.js"></script>
    @yield('additionalJS')
    
    @auth
    <script src="{{ asset('js/enable-push.js') }}" defer></script>
    @endauth
</body>
</html>