<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Inquiry::query();

        // 検索機能
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('inquiry_type')) {
            $query->where('inquiry_type', $request->inquiry_type);
        }

        // ページネーション
        $inquiries = $query->paginate(10);

        return view('admin.index', compact('inquiries'));
    }
}

