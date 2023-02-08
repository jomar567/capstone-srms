<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;


class NoticeController extends Controller
{
    public function display(){
        $notices = Notice::all();

        return view('Admin.Notices.notice')->with('notices', $notices);
    }

    public function createNotice(){
        return view('Admin.Notices.createNotice');
    }

}
