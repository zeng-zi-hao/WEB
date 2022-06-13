@extends('layouts/title')

@section('orders_list')
    <div class="container px-6 mx-auto">
        <div class="my-3">
            <a href="{{ route('products.list') }}" class="mr-3 text-white bg-indigo-500 p-2 rounded">
                back
            </a>
        </div>
    </div>
@endsection
