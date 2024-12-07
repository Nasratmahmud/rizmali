<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TermController extends Controller
{
    //
    public function create(){
        $term = CMS::where('status',2)->first();
        if($term != null){
            return view('backend.layouts.termCondination.edit',compact('term'));
        }else{
            return view('backend.layouts.termCondination.create');
        }
        
    }


    public function insert(Request $request){
        
        $validitor = Validator::make($request->all(),[
            'title' => 'required|string',
            'details' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
        }

        try{
            $about = New CMS();
            $about->title	= $request->title;
            $about->details = $request->details;
            $about->photo = uploadImage($request->photo, 'packagePhoto');
            $about->status = $request->status;
            $about->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new package.');
            
            return redirect()->route('Term.create');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the package.');
        }

    }

    public function edit($id){
        $privacy = CMS::findOrFail($id);
        return view('backend.layouts.termCondination.edit',compact('privacy'));
    }

    public function update(Request $request , $id){

        $validitor = Validator::make($request->all(),[
            'title' => 'required|string',
            'details' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
        }

        try{
                $aboutus = CMS::updateOrCreate(['id' => $id ]);
                $aboutus->title	= $request->title;
                $aboutus->details = $request->details;

                if ($request->hasFile('photo')) {
                    $aboutus->photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $aboutus->photo = $request->current_photo;
                }
                $aboutus->save();
                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the destination.');
                return redirect()->route('Term.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the destination.');
            return redirect()->route('Term.view');
        }
    }


    public function show(){
        $term = CMS::where('status',2)->first();   
        
        return view('backend.layouts.termCondination.view', compact('term'));
    }


    public function delete($id){

        $privacy = CMS::findOrFail($id);

        if ($privacy) {
            $privacy->delete();
            unlink($privacy->photo);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}
