@extends('layouts/title')

@section('adoption_index')
    <div class="m-5 ml-8">
        <a href="{{route('adoptions.create')}}" class="bg-yellow-500 p-2 text-white rounded">我要送養</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{route('self_adoption_history')}}" class="bg-yellow-500 p-2 text-white rounded">送養紀錄</a>
    </div>

    <div class="m-8">
        <div class="m-8 grid grid-cols-1 gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($adoptions as $adoption)
                <div class="w-55 max-w-sm mx-auto overflow-hidden rounded-md shadow-md">
                    <div class="px-5 py-3">
                        <a href="{{route('adoptions.show',$adoption)}}"><img src="{{ URL::asset('storage/images/' . $adoption->path)}}" class="rounded-2xl" style="width:150px;height:150px"></a>
                        <h3 class="text-gray-700 uppercase">{{ \Illuminate\Support\str::limit($adoption->pet_name,5,'...') }}</h3>
                        <span class="mt-2 text-gray-500">性別: {{ $adoption->gender }}&nbsp;&nbsp;年齡: {{ $adoption->age }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $adoptions->links() }}
    </div>
@endsection
