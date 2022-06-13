@extends('layouts/title')

@section('profile')
    <div class="m-8" style="width: auto">
        <form method="post">
            @csrf
            @method('patch')
            <table>
                <tr style="height: 60px">
                    <th class="font-medium text-2xl" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">修改名稱<br></th>
                </tr>
                <tr style="height: 30px">
                    <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">姓名:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">電子郵件:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th><div class="action"><button type="submit" class="bg-blue-500 hover:underline rounded p-0.5 text-white">save</button></div></th>
                </tr>
            </table>
        </form>
        <br>
        <form method="post">
            @csrf
            @method('patch')
            <table>
                <tr style="height: 60px">
                    <th class="font-medium text-2xl" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">修改密碼<br></th>
                </tr>
                <tr>
                    <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">新密碼:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th class="font-medium" style="text-align:justify;text-justify:distribute-all-lines;text-align-last:justify">確認密碼:</th>
                    <th><input></th>
                </tr>
                <tr>
                    <th><div class="action"><button type="submit" class="bg-blue-500 hover:underline rounded p-0.5 text-white">save</button></div></th>
                </tr>
            </table>
        </form>
    </div>

@endsection

