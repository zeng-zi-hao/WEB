<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div  class="bg-white">
    <header>
        <div class="container  px-6 py-3 mx-auto">
                <a href="{{route('products.list')}}" class="text-white bg-indigo-600 p-2 rounded" >返回購物區</a>
        </div>
    </header>

    <main class="my-8">
        @yield('content')
    </main>

</div>
</body>
</html>
