<?php

<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
        $searchData = $request->all();

        // 検索結果を取得し、ページネーションを使用
        $inquiries = Inquiry::search($searchData)->paginate(7);

        return view('inquiries.index', compact('inquiries', 'searchData'));
    }

    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('inquiries.show', compact('inquiry'));
    }
}
