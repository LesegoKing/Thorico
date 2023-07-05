<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->store('public/images/');
        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->save();
        return redirect()->back();
    }   
}
