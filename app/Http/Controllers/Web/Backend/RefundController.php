<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use App\Models\CMS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RefundController extends Controller
{
    //
    public function create(){
        $refund = CMS::where('status',4)->first();
        if($refund != null){
            return view('backend.layouts.refundPolicy.edit',compact('refund'));
        }else{
            return view('backend.layouts.refundPolicy.create');
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
            $refund = New CMS();
            $refund->title	= $request->title;
            $refund->details = $request->details;
            $refund->photo = uploadImage($request->photo, 'packagePhoto');
            $refund->status = $request->status;
            $refund->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new refund.');
            
            return redirect()->route('refund.create');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the refund.');
        }

    }

    public function edit($id){
        $refund = CMS::findOrFail($id);
        return view('backend.layouts.refundPolicy.edit',compact('refund'));
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
                $refund = CMS::updateOrCreate(['id' => $id ]);
                $refund->title	= $request->title;
                $refund->details = $request->details;

                if ($request->hasFile('photo')) {
                    $refund->photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $refund->photo = $request->current_photo;
                }
                $refund->save();
                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the refund.');
                return redirect()->route('refund.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the refund.');
            return redirect()->route('refund.view');
        }
    }


    public function show(){
        $refund = CMS::where('status',4)->first();   
        
        return view('backend.layouts.refundPolicy.view', compact('refund'));
    }


    public function delete($id){

        $refund = CMS::findOrFail($id);

        if ($refund) {
            $refund->delete();
            unlink($refund->photo);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}
