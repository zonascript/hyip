<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @include('partial.head')
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/chat.css')}}">
</head>
<body>
@include('partial.mainmenu')

<div id="chat" class="chat__wrap">
    <chat_wrap></chat_wrap>
</div>

@include('partial.footer')

<script src="../js/app.js" charset="utf-8"></script>
</body>
</html>