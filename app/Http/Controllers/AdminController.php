<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function signup_post (Request $request) {
        // Nhận request từ user và xử lý
        if ($request->name == '') {
            return view('publics.layouts.signup', [
                'content' => 'Chua nhap data'
            ]);
        } else {
            return view('publics.layouts.home', [
                'content' => 'ok'
            ]);
        }
        // Kết nối DB

        // Trả về Data cho user
    }
}
