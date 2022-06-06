@extends('layouts/title')

@section('adoption_show')
    <div class="m-5 ml-8">
        <a href="JavaScript:history.back(-1)" class="bg-indigo-500 rounded p-2 text-white">back</a>
        <br><br>

        <img src="{{ URL::asset('storage/images/')}}" style="width:150px;height:150px">
        <br>
        <h1 class="text-3xl font-bold">寵物名稱:</h1>
        <br>
        <p>年齡&nbsp;&nbsp;&nbsp;</p>
        <p>性別&nbsp;&nbsp;&nbsp;</p>

        <p>
            健康狀況:
        </p>
        <p >
            送養原因:
        </p>
        <br><br>
    </div>
@endsection
