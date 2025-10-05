<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // 뷰에 데이터 전달
        $messeage = "Laravel 연습 시작!";
        $user = ['name' => '피카츄', 'age' => 5, 'role' => '전기쥐'];
        $fruits = ['apple', 'banana', 'orange', 'strawberry'];
        return view('hello', compact('messeage', 'user', 'fruits'));
    }
}
