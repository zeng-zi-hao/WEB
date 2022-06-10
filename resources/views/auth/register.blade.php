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
<form action="{{route('register.store')}}" method="post">
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



            <div class="m-3 flex justify-center">
                <a href="{{route('root')}}" class="rounded-full"><img src="{{ URL::asset('storage/images/logo_2.jpg')}}"  class="rounded-full border-2" style="width:150px;height:190px"></a>
            </div>

            <div>
                <table>
                    <tr style="height: 60px">
                        <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">姓名:</th>
                        <th><input type="text" name="name" value="{{old('name')}}" size="22"></th>
                    </tr>
                    <tr style="height: 60px">
                        <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">電子郵件:</th>
                        <th><input type="email" name="email" value="{{old('email')}}" size="22"></th>
                    </tr>
                    <tr style="height: 60px">
                        <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">密碼:</th>
                        <th><input type="password" name="password" size="22"></th>
                    </tr>
                    <tr style="height: 60px">
                        <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">確認密碼:</th>
                        <th><input type="password" name="confirm_password" size="22"></th>
                    </tr>
                </table>
            </div>

            <div class="flex justify-end">
                <a href="{{route('login')}}" class="mr-3 p-1 text-indigo-900">已經註冊過了</a>
                <div class="action">
                    <button type="submit" class="mr-2 bg-blue-500 hover:underline rounded p-1 text-white">註冊</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
