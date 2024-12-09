<?php

namespace App\Http\Controllers\Web\Backend;


use Exception;
use App\Models\Hotel;
use App\Models\Package;
use App\Models\Itinerary;
use Illuminate\Http\Request;


use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ItineraryController extends Controller
{
    //
    public function create(){
        $packages = Package::all();
        $hotels = Hotel::all();
        
        return view('backend.layouts.itinerary.create',compact('packages','hotels'));
    }


    public function insert(Request $request){
        
        $validitor = Validator::make($request->all(),[
            'package_id' => 'required|numeric',
            'hotel_id' => 'required|numeric',
            'day' => 'required|numeric',
            'dayWaysMeal' => 'required',
            'dayPlan' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);
        if($validitor->fails()){
            // return response()->$validitor->error()->first;
        }
        try{
            $itinerary = New Itinerary();
            $itinerary->package_id	= $request->package_id;
            $itinerary->hotel_id = $request->hotel_id;
            $itinerary->day	= $request->day;
            $itinerary->day_ways_meal = $request->dayWaysMeal;
            $itinerary->day_ways_detail = $request->dayPlan;
            $itinerary->day_ways_spot_photo = uploadImage($request->photo, 'packagePhoto');
            $itinerary->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new itinerary.');

            // return to_route('admin.dashboard')->with('t-success', 'New package Created');
            return redirect()->route('itinerary.create');

        }catch(Exception $e){

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the itinerary.');
        }
    }


    public function edit($id){
        $itinerary = Itinerary::findOrFail($id);
        $packages = Package::all();
        $hotels = Hotel::all();
        return view('backend.layouts.itinerary.edit',compact('itinerary','packages','hotels'));
    }

    public function update(Request $request , $id){

        $validitor = Validator::make($request->all(),[
            'package_id' => 'required|numeric',
            'hotel_id' => 'required|numeric',
            'day' => 'required|numeric',
            'dayWaysMeal' => 'required',
            'dayPlan' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
            // return response()->$validitor->error()->first;
        }

        try{
            $itinerary = Itinerary::findOrFail($id);
            $itinerary->package_id	= $request->package_id;
            $itinerary->hotel_id = $request->hotel_id;
            $itinerary->day	= $request->day;
            $itinerary->day_ways_meal = $request->dayWaysMeal;
            $itinerary->day_ways_detail = $request->dayPlan;


                if ($request->hasFile('photo')) {
                    $itinerary->day_ways_spot_photo = uploadImage($request->photo, 'packagePhoto');
                } elseif ($request->has('current_photo')) {
                    $itinerary->day_ways_spot_photo = $request->current_photo;
                }
                $itinerary->save();

                toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the itinerary.');
                return redirect()->route('itinerary.view');
    

        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the itinerary.');
            return redirect()->route('itinerary.view');
        }
    }


    public function show(){

        $itineraries = Itinerary::all();
        return view('backend.layouts.itinerary.view', compact('itineraries'));
    }

    public function delete($id){

        $itinerary = Itinerary::findOrFail($id);

        if ($itinerary) {
            $itinerary->delete();
            unlink($itinerary->day_ways_spot_photo);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    
    }

}
