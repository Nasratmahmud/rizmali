<?php

namespace App\Http\Controllers\Web\Backend;

use Exception;
use Illuminate\Http\Request;
use App\Models\PrimeDestination;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PrimeDestinationController extends Controller
{
    //
    public function create(){
        return view('backend.layouts.primedestination.create');
    }


    public function insert(Request $request){
        
        $validitor = Validator::make($request->all(),[
            'name' => 'required|string',
            'motto' => 'required|string',
            'details' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
            // return response()->$validitor->error()->first;
        }

        try{
            $destinationpackage = New PrimeDestination();
            $destinationpackage->name	= $request->name;
            $destinationpackage->details = $request->details;
            $destinationpackage->motto = $request->motto;
            $destinationpackage->photo = uploadImage($request->photo, 'packagePhoto');
            $destinationpackage->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new package.');
            // return to_route('admin.dashboard')->with('t-success', 'New package Created');
            return redirect()->route('prime.destinations.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the package.');
        }

    }

    public function edit($id){
        $destinationpackage = PrimeDestination::findOrFail($id);

        return view('backend.layouts.primedestination.edit',compact('destinationpackage'));
    }

    public function update(Request $request , $id){

        $validitor = Validator::make($request->all(),[
            'name' => 'required|string',
            'motto' => 'required|string',
            'details' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
        }

        try{
                $destinationpackage = PrimeDestination::findOrFail($id);
                $destinationpackage->name	= $request->name;
                $destinationpackage->details = $request->details;
                $destinationpackage->motto = $request->motto;

                if ($request->hasFile('photo')) {
                    $destinationpackage->photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $destinationpackage->photo = $request->current_photo;
                }
                
                $destinationpackage->save();

                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the destination.');
                return redirect()->route('prime.destinations.view');

        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the destination.');
            return redirect()->route('prime.destinations.view');
        }
    }


    public function show(){
        $destinationpackages = PrimeDestination::all();
        return view('backend.layouts.primedestination.view', compact('destinationpackages'));
    }


    public function delete($id){

        $destinationpackage = PrimeDestination::findOrFail($id);

        if ($destinationpackage) {
            $destinationpackage->delete();
            unlink($destinationpackage->photo);
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
}


