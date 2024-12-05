<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    //

    public function create(){
        return view('backend.layouts.hotel.create');
    }

    public function insert(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
        ]);

        if($validator->fails()){

        }

        try{
            $hotel  = new Hotel;
            $hotel->name = $request->name;
            $hotel->category = $request->category;
            $hotel->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully create a hotel.');
            return redirect()->route('hotel.create');
            
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem found to create a hotel.');
        }

    }


    public function edit($id){
        $hotel = Hotel::findOrFail($id);
        return view('backend.layouts.hotel.edit',compact('hotel'));
    }



    public function update(Request $request,$id){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
        ]);

        if($validator->fails()){

        }

        try{
            $hotel  = Hotel::findOrFail($id);
            $hotel->name = $request->name;
            $hotel->category = $request->category;
            $hotel->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the hotel.');
            return redirect()->route('hotel.view');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem found to updated the hotel.');
        }

    }


    public function show(){

        $hotels = Hotel::all();
        return view('backend.layouts.hotel.view', compact('hotels'));
    }

    public function delete($id){

        $package = Hotel::findOrFail($id);

        if ($package) {

            $package->delete();
            return response()->json(['success' => true]);

        }

        return response()->json(['success' => false], 404);
    
    }


}
