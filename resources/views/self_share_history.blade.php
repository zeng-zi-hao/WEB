@extends('layouts/title')

@section('self_share_history')
    <div class="m-5">
        <br>
        <h1 class="text-3xl">分享過的文章</h1>
        <br>
        <a href="{{route('share')}}" class="bg-indigo-500 rounded p-2 text-white">back</a>
        <br>
        <br>&nbsp;&nbsp;

        @foreach($historys as $history)
            <div class="border-t border-gray-300 my-1 p-2">
                <h2 class="text-lg font-bold">
                    <a href="{{route('shares.show',$history)}}" class="text-indigo-500 text-2xl">
                        {{\Illuminate\Support\str::limit($history->title,20,'...')}}
                    </a>
                </h2>

                <p>{{$history->created_at}} from {{$history->user->name}}</p>

                <div class="flex">
                    <a class="mr-2" href="{{route('shares.edit',$history)}}">Edit</a>

                    <form action="{{route('shares.destroy',$history)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="px-2 bg-red-500 hover:underline text-white rounded">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach



    </div>
@endsection


