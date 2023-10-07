<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function signup_post(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        // Nhận request từ user và xử lý
        if ($name == '' || $phone == '' || $email == '') {
            return view('publics.layouts.signup', [
                'content' => 'Chưa nhập thông tin'
            ]);
        } else {


            return view('publics.layouts.signin', [
                'content' => 'Đăng ký thành công'
            ]);
        }
        // Kết nối DB

        // Trả về Data cho user
    }



    
    public function signin_post(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        // Nhận request từ user và xử lý
        if ($name == '' || $phone == '' || $email == '') {
            return view('publics.layouts.signin', [
                'content' => 'Chưa nhập thông tin'
            ]);
        } else {


            return view('publics.layouts.home', [
                'content' => 'Đăng nhập thành công'
            ]);
        }
        // Kết nối DB

        // Trả về Data cho user
    }
}