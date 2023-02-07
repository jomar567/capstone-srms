<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function noticeList(){
        $notices = Notice::all();

        return view('Admin.Notices.notice')->with('notices', $notices);
    }
}
