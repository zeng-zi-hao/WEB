
@extends('layouts/share')

@section('main')
<div class="m-5">
    <h1 class="text-3xl">編輯你的內容</h1>
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
            <label>標題&nbsp;&nbsp;</label>
            <input type="text" name="title" value="{{$shares -> title}}" class="border-gray-400 p-1">
        </div>

        <div class="field my-1">
            <label>內文&nbsp;&nbsp;</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-400">{{$shares -> content}}</textarea>
        </div>
        <br>

        <div class="action">
            <a href="{{route('share')}}" class="bg-indigo-500 rounded p-2 text-white">back</a>&nbsp;&nbsp;
            <button type="submit" class="p-1 rounded bg-gray-400 text-white">update</button>
        </div>
    </form>
</div>


@endsection
