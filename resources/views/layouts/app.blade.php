{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}


{{-- -------------------------------------------------------------------------------------------------- --}}
{{-- -------------------------------------------------------------------------------------------------- --}}





<!DOCTYPE html>
<htmllang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<title>{{config('app.name')}}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="icon" href="{{URL::asset('favicon.ico')}}" sizes="65x65" type="image/png">
{{-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> --}}
{{-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<link rel="icon" href="images/connect.png" sizes="65x65" type="image/png">--}}
{{-- <script src="w3.js"> </script> --}}
<script src="{{ asset('js/app.js') }}" defer></script>
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }
    
    body,
    html {
        height: 100%;
        line-height: 1.8;
    }
--/* Full height image header */
    
    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("/images/mac.jpg");
        min-height: 100%;
    }
    
    .w3-bar .w3-button {
        padding: 16px;
    }

</style>
</head>
<body>
     
      
    @include('includes.navbar')
    {{--<br><br><br> <div class="container"> --}}
    
    @include('includes.messages')
    @yield('content')
    
    {{-- </div> --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    </div>
</body>
</html>