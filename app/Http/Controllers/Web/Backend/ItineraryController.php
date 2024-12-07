<?php

namespace App\Http\Controllers\Web\Backend;


use App\Models\Hotel;
use App\Models\Package;
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


    // public function packageDetail(Request $request ){
    //     $packagDay = Package::find($request->id);
    //     return response()->json($request->package);
    //                           $html = `<div class="form-group col-md-6">
    //                                    <label class="form-label" id="days" for="days">Days:{{ $packagDay->days }}</label>
    //                                 <input type="text" id="days" class="form-control" readonly>
    //                             </div>`;
    //                             echo $html;
    // }

    public function packageDetail(Request $request)
    {
        Log::info('Package ID received:', ['package_id' => $request->package]);
        $package = Package::find($request->package); 
        if ($package) {
            return response()->json(['days' => $package->days]); 
        }
        return response()->json(['error' => 'Package not found'], 404); 
    }
}
