<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * ログイン後リダイレクトページコントローラ
 */
class LoginRedirectController extends Controller
{
    /**
     * index表示
     */
    public function index()
    {
        // ビューを表示
        return view('login_redirect');
    }
}
