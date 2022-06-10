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
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <div class="flex h-screen">
            <div class="m-auto">

                @if($errors->any())
                    <div class="errors p-3 bg-red-500 rounded">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br>
                @endif

                @if(session()->has('notice'))
                    <div class="bg-pink-300 px-3 py-2 rounded">
                        {{session()->get('notice')}}
                    </div>
                @endif

                <div class="m-3 flex justify-center">
                    <a href="{{route('root')}}" class="rounded-full"><img src="{{ URL::asset('storage/images/logo_1.jpg')}}"  class="rounded-full border-2" style="width:150px;height:150px"></a>
                </div>

                <div>
                    帳號:&nbsp;&nbsp;&nbsp;<input type="text" name='email' size="22">
                    <br><br>
                    密碼:&nbsp;&nbsp;&nbsp;<input type="password" name="password" size="22">
                    <br><br>
                </div>

                <div class="flex justify-end">
                    <div class="action"><button type="submit" class="mr-3 bg-blue-500 hover:underline rounded p-1 text-white">登入</button></div>
                    <a href="{{route('register.store')}}" class="mr-2 bg-blue-500 rounded p-1 text-white">註冊</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
