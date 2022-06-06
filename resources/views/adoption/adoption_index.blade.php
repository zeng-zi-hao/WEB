@extends('layouts/title')

@section('adoption_index')
    <div class="m-5 ml-8">
        <a href="{{route('adoption')}}" class="bg-yellow-500 p-2 text-white rounded">我要送養</a>
    </div>

    <div class="m-8 grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        @foreach ($adoptions as $adoption)
            <div class="w-55 max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                <div class="px-5 py-3">
                    <a href="{{route('adoptions.show')}}"><img src="{{ URL::asset('storage/images/' . $adoption->path)}}" style="width:150px;height:150px"></a>
                    <h3 class="text-gray-700 uppercase">{{ $adoption->pet_name }}</h3>
                    <span class="mt-2 text-gray-500">{{ $adoption->gender }}&nbsp;&nbsp;{{ $adoption->age }}</span>
                </div>
            </div>
        @endforeach
    </div>

@endsection
