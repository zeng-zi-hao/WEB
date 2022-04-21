@extends('layouts/share')

@section('main')
    <h1>You can share anything</h1>
    <a href="{{route('shares.create')}}">share</a>
@endsection
