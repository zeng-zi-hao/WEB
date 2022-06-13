@extends('layouts/share')

@section('main')
    <div class="m-5">
        <br>
        <h1 class="text-3xl">你可以分享任何事物</h1>
        <br>
        <table>
            <thead>
                <tr>
                    <th><a href="{{route('shares.create')}}" class="bg-gray-500 text-white hover:bg-gray-400 hover:text-gray-900 rounded p-2">share</a></th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th><a href="{{route('self_share_history')}}" class="bg-gray-500 text-white hover:bg-gray-400 hover:text-gray-900 rounded p-2">share history</a></th>
                </tr>
            </thead>
        </table>
        <br>
        <br>

        @foreach($shares as $share)
            <div class="border-t border-gray-300 my-1 p-2">
                <h2 class="text-lg font-bold">
                    <a href="{{route('shares.show',$share)}}" class="text-indigo-500 text-2xl">
                        {{ \Illuminate\Support\str::limit($share->title,20,'...')}}
                    </a>
                </h2>
                <p>{{$share->created_at}} from {{$share->user->name}}</p>
                <br>
            </div>
        @endforeach
        {{$shares->links()}}
    </div>
@endsection


