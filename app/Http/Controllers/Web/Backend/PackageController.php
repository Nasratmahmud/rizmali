<?php

namespace App\Http\Controllers\Web\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function create(){
        return view('backend.layouts.package.create');
    }

    public function insert(Request $request){
        // dd($request);
        $validitor = Validator::make($request->all(),[
            'title' => 'required|string',
            'days' => 'required|numeric',
            'valid' => 'required|string',
            'not_valid' => 'required|string',
            'includes' => 'required',
            'excludes' => 'required',
            'photo' => 'required|images|mimes:jpeg,png,jpg|max:10000',
        ]);
        if($validitor->fails()){
            return response()->$validitor->error()->first;
        }
    }
}
