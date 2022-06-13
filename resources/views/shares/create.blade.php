
@extends('layouts/share')

@section('main')
    <div class="m-5">
        <a href="{{route('share')}}" class="bg-indigo-500 rounded p-2 text-white">back</a>
        <br><br>
        <h1 class="text-3xl">開始分享事物</h1>
        <br>

        @if($errors->any())
            <div class="errors p-3 bg-red-500 rounded">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('shares.store')}}" method="post">
            @csrf
            <div class="field my-2">
                <label>標題&nbsp;&nbsp;</label>
                <input type="text" name="title" maxlength="150" value="{{old('title')}}" class="border-gray-400 p-1">
            </div>

            <div class="field my-1">
                <label>內文&nbsp;&nbsp;</label>
                <textarea name="content" cols="30" rows="10" maxlength="300" class="border-gray-400">{{old('content')}}</textarea>
            </div>
            <br>


            <div class="action">
                <button type="submit" class="px-2 py-1 bg-gray-500 text-white hover:underline rounded">share</button>
            </div>
        </form>
    </div>
@endsection
