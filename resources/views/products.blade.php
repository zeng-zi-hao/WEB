@extends('layouts/title')

@section('products_list')
    <div class="container px-6 mx-auto">
        <div class="my-3">
            <a href="{{ route('cart.list') }}" class="mr-3 text-white bg-indigo-500 p-2 rounded ">
                購物車 {{ Cart::getTotalQuantity()}}
            </a>

            <a href="{{route('order_list')}}" class="text-white bg-indigo-500 p-2 rounded ">
                我的訂單
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($products as $product)
                <div class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <img src="{{ URL::asset('storage/images/' . $product->image) }}" alt="" style="width:300px;height:200px" class="w-full max-h-60">
                    <div class="flex items-end justify-end w-full bg-cover">

                    </div>
                    <div class="px-5 py-3">
                        <h3 class="text-gray-700 uppercase">{{ $product->name }}</h3>
                        <span class="mt-2 text-gray-500">${{ $product->price }}</span>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->price }}" name="price">
                            <input type="hidden" value="{{ $product->image }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-gray-500 hover:bg-indigo-600 rounded">加入購物車</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
