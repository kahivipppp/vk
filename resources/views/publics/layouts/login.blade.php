@extends('publics.public')
@section('content')
    {{ $content }}


			<div class="form">
				<h2>Đăng Nhập</h2>
				<label">Họ và tên</label><br>
				<input type="text" name="name"><br>
				<label>Số điện thoại</label><br>
				<input type="text" name="phone"><br>
				<label">Email</label><br>
				<input type="text" name="email"><br>
				<a href="">Quên mật khẩu</a> <br>
				<a href="/">Đăng Ký</a> <br>
				<a herf="home.blade.php"><input id="submit" type="submit" name="submit" value="Gửi"></a>
			</div>				
	
    
@endsection