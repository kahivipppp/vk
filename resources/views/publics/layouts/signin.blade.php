@extends('publics.public')
@section('content')
{{ $content }}


<form action="/signin_post" method="post">
	@csrf
	<h2>Đăng Nhập</h2>
	<label">Họ và tên</label><br>
		<input type="text" name="name"><br>
		<label>Số điện thoại</label><br>
		<input type="text" name="phone"><br>
		<label">Email</label><br>
			<input type="text" name="email"><br><br>
			<a href="">Quên mật khẩu</a> <br> <br>
			<a href="">Đăng Ký</a> <br><br>
			<button id="submit" type="submit"> Gửi </button>
</form>


@endsection