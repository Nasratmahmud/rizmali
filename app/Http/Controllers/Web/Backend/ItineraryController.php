<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ItineraryController extends Controller
{
    //
    // public function create(){
    //     $packages = Package::all();
    //     $hotels = Hotel::all();
        
    //     return view('backend.layouts.packagePrice.create',compact('packages','hotels'));
    // }


    // public function insert(Request $request){

    //     $validitor = Validator::make($request->all(),[
    //         'package' => 'required|numeric',
    //         'hotel' => 'required|numeric',
    //         'person1' => 'required|numeric',
    //         'person2'=> 'required|numeric',
    //         'person4'=> 'required|numeric',
    //         'person6'=> 'required|numeric',
    //         'person8'=> 'required|numeric',
    //     ]);

    //     if($validitor->fails()){
    //         // return response()->$validitor->error()->first;
    //     }

    //     try{
    //         $setPrice = New PackagePrice();
    //         $setPrice->package_id = $request->package;
    //         $setPrice->hotel_id = $request->hotel;
    //         $setPrice->person_1_price = $request->person1;
    //         $setPrice->person_2_price = $request->person2;
    //         $setPrice->person_4_price = $request->person4;
    //         $setPrice->person_6_price = $request->person6;
    //         $setPrice->person_8_price = $request->person8;
    //         $setPrice->save();

    //         toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new package.');
    //         return redirect()->route('package.price.view');
    //     }catch(Exception $e){
    //         toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the package.');
    //     }

    // }

    // public function edit($id){
    //     $packagePrice = packagePrice::findOrFail($id);
    //     $packages = Package::all();
    //     $hotels = Hotel::all();
    //     return view('backend.layouts.packagePrice.edit',compact('packagePrice','packages', 'hotels'));
    // }

    // public function update(Request $request , $id){

    //     $validitor = Validator::make($request->all(),[
    //         'package' => 'required|numeric',
    //         'hotel' => 'required|numeric',
    //         'person1' => 'required|numeric',
    //         'person2'=> 'required|numeric',
    //         'person4'=> 'required|numeric',
    //         'person6'=> 'required|numeric',
    //         'person8'=> 'required|numeric',
    //     ]);

    //     if($validitor->fails()){
    //     }

    //     try{
    //             $setPrice = packagePrice::findOrFail($id);
    //             $setPrice->package_id = $request->package;
    //             $setPrice->hotel_id = $request->hotel;
    //             $setPrice->person_1_price = $request->person1;
    //             $setPrice->person_2_price = $request->person2;
    //             $setPrice->person_4_price = $request->person4;
    //             $setPrice->person_6_price = $request->person6;
    //             $setPrice->person_8_price = $request->person8;
    //             $setPrice->save();

    //             toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully updated the destination.');
    //             return redirect()->route('package.price.view');

    //     }catch(Exception $e){
    //         toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the destination.');
    //         return redirect()->route('package.price.view');
    //     }
    // }


    // public function show(){
    //     $packagePrices = PackagePrice::all();
    //     return view('backend.layouts.packagePrice.view', compact('packagePrices'));
    // }


    // public function delete($id){

    //     $packagePrice = PackagePrice::findOrFail($id);

    //     if ($packagePrice) {
    //         $packagePrice->delete();
    //         return response()->json(['success' => true]);
    //     }
    //     return response()->json(['success' => false], 404);
    // }
}
