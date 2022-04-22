
@extends('layouts/share')

@section('main')
    <h1 class="text-3xl">Edit your content</h1>
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

    <form action="{{route('shares.update',$shares)}}" method="post">
        @csrf
        @method('patch')
        <div class="field my-2">
            <label>Title&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
            <input type="text" name="title" value="{{$shares -> title}}" class="border-gray-400 p-1">
        </div>

        <div class="field my-1">
            <label>Content</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-400">{{$shares -> content}}</textarea>
        </div>

        <div class="action">
            <button type="submit" class="px-3 py-2 rounded bg-gray-200 hover:bg-gray-400">update</button>
        </div>
    </form>


@endsection
