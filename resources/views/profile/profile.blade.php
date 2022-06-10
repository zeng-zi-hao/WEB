@extends('layouts/title')

@section('profile')
    <div class="m-8" style="width: auto">

        <form action="{{route('update_information')}}" method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <th><label>修改名稱</label><br></th>
                </tr>
                <tr>
                    <th>姓名:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th>電子郵件:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th><div class="action"><button type="submit" class="bg-blue-500 hover:underline rounded p-0.5 text-white">save</button></div></th>
                </tr>
            </table>
        </form>

        <form action="{{route('update_password')}}" method="post">
            @csrf
            @method('patch')
            <table>
                <tr>
                    <th><label>修改密碼</label><br></th>
                </tr>
                <tr>
                    <th>新密碼:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th>確認密碼:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th><div class="action"><button type="submit" class="bg-blue-500 hover:underline rounded p-0.5 text-white">save</button></div></th>
                </tr>
            </table>
        </form>
    </div>
@endsection
