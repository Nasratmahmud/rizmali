<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AboutusController extends Controller
{
    //
    public function create(){
        $aboutUs = CMS::where('status',1)->first();
        if($aboutUs != null){
            return view('backend.layouts.aboutUs.edit',compact('aboutUs'));
        }else{
            return view('backend.layouts.aboutUs.create');
        }
        // return view('backend.layouts.aboutUs.create');
        
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
            
            return redirect()->route('aboutus.create');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the package.');
        }

    }

    public function edit($id){
        $aboutUs = CMS::findOrFail($id);
        return view('backend.layouts.aboutUs.edit',compact('aboutUs'));
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
                return redirect()->route('aboutus.view');

        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the destination.');
            return redirect()->route('aboutus.view');
        }
    }


    public function show(){
        $aboutUs = CMS::where('status',1)->first();   
        
        return view('backend.layouts.aboutUs.view', compact('aboutUs'));
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
