<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Meow</title>
</head>

<body class="bg-gray-200">

<div class="bg-gray-800 flex justify-center">
    <div class="hover:bg-gray-400 mr-3"><a href="{{route('care')}}" class="text-lg text-white"> 如何照顧貓咪 </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="{{route('share')}}" class="text-lg text-white"> 分享事物 </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="{{route('adoption.index')}}" class="text-lg text-white"> 領養毛小孩 </a></div>
    <div class="hover:bg-gray-400 mr-3"><a href="{{route('products.list')}}" class="text-lg text-white"> 寵物補給品 </a></div>



    @if (Route::has('login'))
        @auth
            <div class="hover:bg-gray-400 mr-3"><a href="{{route('profile')}}" class="text-lg text-white"> 個人資料 </a></div>
            <div class="hover:bg-gray-400 mr-3"><a href="{{route('logout')}}" class="text-lg text-white"> 登出 </a></div>
        @else
            <div class="hover:bg-gray-400 mr-3"><a href="{{route('login')}}" class="text-lg text-white"> 登入 </a></div>

{{--            @if (Route::has('register'))--}}
{{--                <div class="hover:bg-gray-400 mr-3"><a href="{{ route('register') }}" class="text-lg text-white"> 註冊 </a></div>--}}
{{--            @endif--}}
        @endauth
    @endif
</div>

@if(session()->has('notice'))
    <div class="bg-pink-300 px-3 py-2 rounded">
        {{session()->get('notice')}}
    </div>
@endif

@yield('main')
@yield('products_list')
@yield('cart')
@yield('show')
@yield('self_share_history')
@yield('adoption')
@yield('adoption_index')
@yield('adoption_show')
@yield('adoption_history')
@yield('profile')

</body>
</html>
