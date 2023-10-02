    @extends('publics.public')
    @section('content')
        {{ $content }}


                <div class="form">
                    <h2>Đăng ký</h2>
                    <label">Họ và tên</label><br>
                    <input type="text" name="name"><br>
                    <label>Số điện thoại</label><br>
                    <input type="text" name="phone"><br>
                    <label">Email</label><br>
                    <input type="text" name="email"><br>
				    <a href="login.blade.php">Đăng Nhập</a> <br>                  
                    <input id="submit" type="submit" name="submit" value="Gửi">
                </div>				
        
        
    @endsection