<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力フォームの表示
    public function showForm()
    {
        return view('index');
    }

    // 入力内容の確認
    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'inquiry_type' => 'required|string',
            'message' => 'required|string',
        ]);

        return view('confirm', compact('validated'));
    }

    // 送信処理
    public function send(Request $request)
    {
        // メール送信やデータベース保存などの処理
        return view('thanks');
    }
}
