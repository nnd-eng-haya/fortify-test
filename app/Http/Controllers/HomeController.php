<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * homeページコントローラ
 */
class HomeController extends Controller
{
    /**
     * index表示
     */
    public function index()
    {
        // ビューを表示
        return view('home');
    }
}
