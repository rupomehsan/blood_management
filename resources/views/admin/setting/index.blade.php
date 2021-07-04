@extends('admin.layouts.index')
@section('content')
    <form id="changePass" role="form" method="post" style="padding:200px 350px;">
        <table>


            <tr>
                <td>old pass:</td>
                <td><input type="password" id="old_pass"></td>
            </tr>
            <tr>
                <td>new pass:</td>
                <td><input type="password" id="password"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="updatepass" value="update"/>
                </td>
            </tr>
        </table>
    </form>
@endsection
@section('custom_js')
    <script>
        $('#changePass').submit(function (e) {
            e.preventDefault();
            var old_pass = $('#old_pass').val()
            var password = $('#password').val()
            $.ajax({
                url: '{{url('backend/changepass')}}',
                method: 'post',
                datatype: 'json',
                data: {
                    '_token': '{{csrf_token()}}',
                    'old_pass': old_pass,
                    'password': password,
                },
                success: function (res) {
                    console.log(res)
                    if (res.status == 'done') {
                        alert(res.message)
                    }
                },
                error: function (err) {
                    console.log(err)
                }
            })
        })
    </script>
@endsection
