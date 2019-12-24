<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ page_title($title ?? '' )}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        footer{
            margin: 4em 0;
        }
    </style>
</head>
<body>
    
    <script src="//code.jquery.com/jquery.js"></script>
    @include('flashy::message')

	@include('layouts.partials._nav')

	@yield('content')

    @include('layouts/partials/_footer') 

</body>
</html>