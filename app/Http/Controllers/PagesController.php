<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $content = 'home';
        return view('publics.layouts.home', [
            'content' => $content,

        ]);
    }

    public function signup()
    {
        $content = 'signup';
        return view('publics.layouts.signup', [
            'content' => $content,

        ]);
    }
    public function signin()
    {
        $content = 'signin';
        return view('publics.layouts.signin', [
            'content' => $content,

        ]);
    }

    public function about()
    {
        $content = 'about';
        $name = 'Nguyen Quang Khai';
        return view('publics.layouts.about', [
            'content' => $content,
            'name' => $name,
        ]);
    }
}
