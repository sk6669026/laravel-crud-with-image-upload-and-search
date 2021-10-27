<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class UploadDataController extends Controller
{
    public function index()
    {
        return view('uploadpage');
    }

    public function store(Request $request)
    {
        $data=new personal;

        if ($request->file('file'))
        {
            $file=$request->file('file');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $request->file->move('stortage', $filename);
            $data->file=$filename;
        }

        $data->name=$request->name;
        $data->email=$request->email;

        $data->save();
        
        return redirect()->back();
    }
    public function editpage($id)
    {
        $data=personal::find($id);
        return view('editpage',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data=personal::find($id);
        if ($request->file('file'))
        {
            $file=$request->file('file');
            $filename = time() . "." . $file->getClientOriginalExtension();
            $request->file->move('stortage', $filename);
            $data->file=$filename;
        }
        $data->name=$request->name;
        $data->email=$request->email;
        $data->save();
        return redirect()->back();
    }
}
