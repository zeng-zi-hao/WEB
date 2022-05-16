
@extends('layouts/share')

@section('main')
    <h1 class="text-3xl">Begin to share something</h1>
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
            <label>Title&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="title" value="{{old('title')}}" class="border-gray-400 p-1">
        </div>

        <div class="field my-1">
            <label>Content</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-400">{{old('content')}}</textarea>
        </div>

        <div class="action">
            <button type="submit" class="px-3 py-2 bg-gray-500 text-white hover:bg-gray-400 hover:text-gray-900 rounded">share</button>
        </div>
    </form>
@endsection
