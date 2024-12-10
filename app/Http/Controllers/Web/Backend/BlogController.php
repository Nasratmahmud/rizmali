<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    //
    public function create(){
        return view('backend.layouts.blog.create');
    }


    public function insert(Request $request){
        
        $validitor = Validator::make($request->all(),[
            'name' => 'required|string',
            'details' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'blogStatus' =>'required',
        ]);

        if($validitor->fails()){
            // return response()->$validitor->error()->first;
        }

        try{
            $blog = New Blog();
            $blog->name	= $request->name;
            $blog->details = $request->details;
            $blog->blogStatus = $request->blogStatus;
            $blog->photo = uploadImage($request->photo, 'blogPhoto');
            $blog->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new blog.');
            
            return redirect()->route('blog.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the blog.');
        }
    }

    public function edit($id){
        $editBlog = Blog::findOrFail($id);

        return view('backend.layouts.blog.edit',compact('editBlog'));
    }

    public function update(Request $request , $id){

        $validitor = Validator::make($request->all(),[
            'name' => 'required|string',
            'details' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
            'blogStatus' =>'required',
        ]);

        if($validitor->fails()){
        }

        try{
                $blog = Blog::findOrFail($id);
                $blog->name	= $request->name;
                $blog->details = $request->details;
                $blog->blogStatus = $request->blogStatus;

                if ($request->hasFile('photo')) {
                    $blog->photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $blog->photo = $request->current_photo;
                }
                
                $blog->save();

                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the blog.');
                return redirect()->route('blog.view');

        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the blog.');
            return redirect()->route('blog.view');
        }
    }


    public function show(){
        $blogs = Blog::all();
        return view('backend.layouts.blog.view', compact('blogs'));
    }


    public function delete($id){

        $blog = Blog::findOrFail($id);

        if ($blog) {
            $blog->delete();
            unlink($blog->photo);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}
