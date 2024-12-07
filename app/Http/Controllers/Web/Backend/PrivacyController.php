<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PrivacyController extends Controller
{
    //

    
    public function create(){
        $privacy = CMS::where('status',3)->first();
        if($privacy != null){
            return view('backend.layouts.privacyPolicy.edit',compact('privacy'));
        }else{
            return view('backend.layouts.privacyPolicy.create');
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
            $privacy = New CMS();
            $privacy->title	= $request->title;
            $privacy->details = $request->details;
            $privacy->photo = uploadImage($request->photo, 'packagePhoto');
            $privacy->status = $request->status;
            $privacy->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new Privacy.');
            
            return redirect()->route('privacy.create');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the Privacy.');
        }

    }

    public function edit($id){
        $privacy = CMS::findOrFail($id);
        return view('backend.layouts.privacyPolicy.edit',compact('privacy'));
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
                $privacy = CMS::updateOrCreate(['id' => $id ]);
                $privacy->title	= $request->title;
                $privacy->details = $request->details;

                if ($request->hasFile('photo')) {
                    $privacy->photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $privacy->photo = $request->current_photo;
                }
                $privacy->save();
                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the Privacy.');
                return redirect()->route('privacy.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the Privacy.');
            return redirect()->route('privacy.view');
        }
    }


    public function show(){
        $privacy = CMS::where('status',3)->first();   
        
        return view('backend.layouts.privacyPolicy.view', compact('privacy'));
    }


    public function delete($id){

        $aboutus = CMS::findOrFail($id);

        if ($aboutus) {
            $aboutus->delete();
            unlink($aboutus->photo);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}
