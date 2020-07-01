<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SMA') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2489bf6ef0.js"></script>


</head>
<body>
    
       @include('inc.navbar')
       <div class="container">
           <div class="row justify-content-center">
                @include('inc.messages')
                @yield('content')
               </div>
            
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @include('inc.footer')
</body>
</html>
