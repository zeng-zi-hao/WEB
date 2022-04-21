
@extends('layouts/share')

@section('main')
    <h1 class="font-thin-4xl">Begin to share something</h1>

    <form action="{{route('shares.store')}}" method="post">
        @csrf
        <div class="field my-2">
            <label>Title------</label>
            <input type="text" name="title" class="border-gray-400 p-1">
        </div>

        <div class="field my-1">
            <label>Content</label>
            <textarea name="content" cols="30" rows="10" class="border-gray-400"></textarea>
        </div>

        <div class="action">
            <button type="submit" class="px-3 py-2 rounded bg-gray-200 hover:bg-gray-400">share</button>
        </div>
    </form>
@endsection
