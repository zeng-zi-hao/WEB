@extends('layouts/share')

@section('main')
    <h1 class="text-3xl">You can share anything</h1>
    <br>
    <a href="{{route('shares.create')}}">share</a>
@endsection


