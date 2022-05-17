<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qController extends Controller
{
    public function store(Request $request){
            $request->validate([
                'name'=>"required|max:10",
                'email'=>"required"
            ]);
    }
}
