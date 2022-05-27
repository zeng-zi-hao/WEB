@extends('layouts/title')

@section('adoption')
    <div class="mx-5 mt-8">
        <a href="{{route('adoption_index')}}" class="bg-indigo-500 rounded p-2 text-white ">back</a>
        <br>
        <br>
        <br>
    </div>

    <div class="mx-5 container">
        <div class="d-flex">
            <div >
                <form runat="server">
                    <input accept="image/*" type='file' id="imgInp" /><br><br>
                    <img id="blah" style="width:150px;height:150px" class="border-solid rounded" src="#"/>
                </form>
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
                <form  method="post">
                    @csrf
                    @method('patch')
                    <div class="field my-2">
                        <label>寵物名稱</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="pet_name"  class="border-gray-400 p-1">
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>性別</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender_boy" value="boy"> 公
                        <input type="radio" name="gender_girl" value="girl"> 母
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>年齡</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="age"  class="border-gray-400 p-1">
                    </div>
                    <br>

                    <div class="field my-2">
                        <label>健康狀況</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="health_status"  class="border-gray-400 p-1">
                    </div>
                    <br>

                    <div class="field my-1">
                        <label>送養原因&nbsp;&nbsp;</label>
                        <textarea name="reason" cols="25" rows="8" class="border-gray-400"></textarea>
                    </div>
                    <br>

                    <div class="action">
                        <button type="submit" class="p-1 rounded  hover:underline bg-gray-400 text-white">submit</button>
                    </div>

                </form>
            </div>

        </div>

    </div>
@endsection
