<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;


class NoticeController extends Controller
{
    public function display(){
        $notices = Notice::orderByDesc('created_at')->get();

        return view('Admin.Notices.notice')->with('notices', $notices);
    }

    public function createNotice(){
        return view('Admin.Notices.createNotice');
    }
    
    public function addNotice(Request $request){
         //Validate
         $request->validate([
            'title'=>'required',
            'description'=>'required',
         ]);

        $notices = new Notice;
        $notices->title = $request->title;
        $notices->description = $request->description;
        $notices->save();
        
        return redirect()->route('admin.notice_list')->with('success', 'Notice successfully added!');
     }

     public function editnotice($id){
        $notice = Notice::findOrFail($id);

        return view('Admin.Notices.editNotice')->with('notice', $notice);
     }

     public function updateNotice(Request $request){
        //Validate
        $request->validate([
            'title'=>'required',
            'description'=>'required',
         ]);

        $notices = Notice::findOrFail($request->id);
        $notices->title = $request->title;
        $notices->description = $request->description;
        $notices->save();

        return redirect()->route('admin.notice_list')->with('success', 'Notice successfully updated!');
     }

     public function destroynotice($id){
        $notice = Notice::findorFail($id);
        $notice->delete();

        return redirect()->route('admin.notice_list')->with('success', 'Notice successfully deleted!');
     }
 }
