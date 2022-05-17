<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        // $name = $request->input('name');
        // dd($name);
        // dd($request->except('_token'));
        // $request->validate([
        //     'name'=>'required'
        // ]);

        // dd($request);

        // $uri = $request->path();
        // $uri = $request->url();
        // echo $uri;

        // if ($request->is('book/*')) {
        //     echo 'enter success';
        // } else {
        //     echo 'wrong path';
        // }

        // echo $request->method();

        // if ($request->has(['auth','name'])) {
        //     echo 'yes';
        // }else{
        //     echo 'no';
        // }


        // if ($request->filled('name')) {
        //     echo 'yes';
        // }else{
        //     echo 'no';
        // }

        // $request->flash();

        // if($request->hasFile('image')){
        //     $image = $request->file('image');
        // dd($image);
        // }else{
        //     echo 'no file';
        // }

        // $path = $request->image->path();
        // $path = $request->image->extension();
        // echo $path;

        

    }
}
