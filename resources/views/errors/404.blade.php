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

    <div class="flex h-screen">
        <div class="m-auto">
            <h1>哎呀!好像找不到資源!</h1>
            <br>
            <img src="{{ URL::asset('storage/images/404.jpg')}}" class="rounded-xl border-2" style="width:400px;height:400px">
        </div>
    </div>
</body>
</html>
