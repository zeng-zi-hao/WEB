@extends('layouts/title')

@section('adoption')
    <div class="mx-5 mt-8">
        <a href="{{route('adoption.index')}}" class="bg-indigo-500 rounded p-2 text-white ">back</a>
        <br>
        <br>
        <br>
    </div>

    <div class="mx-5 container">
        @if($errors->any())
            <div class="errors p-3 bg-red-500 rounded">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            <br>
        @endif
        <form action="{{route('adoptions.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="d-flex">
                <div>
                    <input accept="image/*" type='file' id="imgInp" name="path"  /><br><br>
                    <img id="blah" class="rounded-2xl" style="width:150px;height:150px" class="border-solid rounded" src="#"/>
                    <br>
                    <script>
                        imgInp.onchange = evt => {
                            const [file] = imgInp.files
                            if (file) {
                                blah.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>

                <div>
                    <div class="field my-2">
                        <label>寵物名稱</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="pet_name" maxlength="150" value="{{old('pet_name')}}" class="border-gray-400 p-1">
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>性別</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" value="boy"> 公
                        <input type="radio" name="gender" value="girl"> 母
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>年齡</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="age" maxlength="3" value="{{old('age')}}" class="border-gray-400 p-1">
                    </div>
                    <br>

                    <div class="field my-2">
                        <label>健康狀況</label>&nbsp;&nbsp;&nbsp;
                        <textarea name="health_status" cols="25" rows="3" maxlength="150" class="border-gray-400">{{old('health_status')}}</textarea>
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>送養原因&nbsp;&nbsp;</label>
                        <textarea name="adoption_reason" cols="25" rows="8" maxlength="300" class="border-gray-400">{{old('adoption_reason')}}</textarea>
                    </div>
                    <br>

                    <div class="action">
                        <button type="submit" class="p-1 rounded  hover:underline bg-gray-400 text-white">submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
