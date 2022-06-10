@extends('layouts/title')

@section('adoption_show')
    <div class="m-5 ml-8">
        <a href="JavaScript:history.back(-1)" class="bg-indigo-500 rounded p-2 text-white">back</a>
        <br><br>

        <img src="{{ URL::asset('storage/images/' . $adoptions->path)}}" class="rounded-2xl" style="width:150px;height:150px">
        <br>
        <h1 class="text-3xl font-bold">寵物名稱:{{$adoptions->pet_name}}</h1>
        <br>
        <p>年齡&nbsp;&nbsp;&nbsp;{{$adoptions->age}}</p>
        <p>性別&nbsp;&nbsp;&nbsp;{{$adoptions->gender}}</p>

        <p>
            健康狀況: &nbsp;&nbsp;&nbsp;{{$adoptions->health_status}}
        </p>
        <p>
            送養原因:
            <p class="ml-3" style="text-indent:2em">{{$adoptions->adoption_reason}}</p>
        </p>
        <br><br>
    </div>
@endsection
