@extends('layouts/share')

@section('main')
    <div class="m-3">
        <br>
        <h1 class="text-3xl">You can share anything</h1>
        <br>
        <a href="{{route('shares.create')}}" class="bg-gray-500 text-white hover:bg-gray-400 hover:text-gray-900 rounded p-2">share</a>
        <br>
        <br>
        <br>
        <br>

        @foreach($shares as $share)
            <div class="border-t border-gray-300 my-1 p-2">
                <h2 class="text-lg font-bold">
                    <a href="{{route('shares.show',$share)}}">
                        {{$share->title}}
                    </a>
                </h2>

                <p>{{$share->created_at}} from {{$share->user->name}}</p>

                <div class="flex">
                    <a class="mr-2" href="{{route('shares.edit',$share)}}">Edit</a>

                    <form action="{{route('shares.destroy',$share)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="px-2 bg-red-500 text-white rounded">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
        {{$shares->links()}}
    </div>
@endsection


