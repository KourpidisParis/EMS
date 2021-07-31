<?php

namespace App\Http\Controllers;
use App\Models\Notice;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function create(){
        return view('admin.notice.create');
    }

    public function index(){
        $notices = Notice::latest()->get();
        return view('admin.notice.index',compact('notices'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            'name'=>'required',
        ]);

        Notice::create($request->all());
        return redirect()->route('notices.index')->with('message','Notice created');
    }

    public function edit($id){
        $notice = Notice::find($id);
        return view('admin.notice.edit',compact('notice'));
    }

    public function update(Request $request, $id){
        $notice = Notice::find($id);
        $notice->update($request->all());

        return redirect()->route('notices.index')->with('message','Notice updated succedfully');
    }

    public function destroy($id){
        Notice::find($id)->delete();
        return redirect()->route('notices.index')->with('message','Notice deleted succesfulyyS');
    }
}
