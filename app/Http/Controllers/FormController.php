<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    // 폼 제출 처리
    public function submitForm (Request $request)
    {
        // 유효성 검사
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required|max:500',
        ]);
        // 여기서는 디비에 저장하지 않고 그냥 블레이드 파일에 전달
        return view('contact_result', compact('validated'));
    }
}
