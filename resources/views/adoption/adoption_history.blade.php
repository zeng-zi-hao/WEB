@extends('layouts/title')

@section('adoption_history')

    <div class="m-8">
        <a href="{{route('adoption.index')}}" class="ml-8 bg-indigo-500 rounded p-2 text-white ">back</a>
        <br>
        <br>
        <br>
        <div class="m-8 grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($historys as $history)
                <div class="w-55 max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <div class="px-5 py-3">
                        <a href="{{route('adoptions.show',$history)}}"><img src="{{ URL::asset('storage/images/' . $history->path)}}" style="width:150px;height:150px"></a>
                        <h3 class="text-gray-700 uppercase">{{ $history->pet_name }}</h3>
                        <span class="mt-2 text-gray-500">{{ $history->gender }}&nbsp;&nbsp;{{ $history->age }}</span>
                        <br><br>
                        <div class="flex">
                            <a class="mr-2" href="{{route('adoptions.edit',$history)}}">Edit</a>

                            <form action="{{route('adoptions.destroy',$history)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="px-2 bg-red-500 hover:underline text-white rounded">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
