    @extends('publics.public')
    @section('content')
    {{ $content }}

    <form action="/signup_post" method="post">
        @csrf
        <h2>Đăng ký</h2>
        <label>Họ và tên</label><br>
        <input type="text" name="name"><br>
        <label>Số điện thoại</label><br>
        <input type="text" name="phone"><br>
        <label>Email</label><br>
        <input type="text" name="email"><br>
        <button id="submit" type="submit"> Gửi </button>
    </form>

    @endsection