<?php

namespace App\Http\Controllers\Web\Backend;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{


    protected $validStartDate = '';
    protected $validEndDate = '';
    protected $inValidStartDate = '';
    protected $inValidEndDate = '';

    public function create(){
        return view('backend.layouts.package.create');
    }


    public function insert(Request $request){
        
        $validitor = Validator::make($request->all(),[
            'title' => 'required|string',
            'days' => 'required|numeric',
            'startValidDate' => 'required|string',
            'endValidDate' => 'required|string',
            'startInvalidDate' => 'required|string',
            'endInvalidDate' => 'required|string',
            'includes' => 'required',
            'excludes' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
            return response()->$validitor->error()->first;
        }

        try{
            $package = New Package();
            $package->title	= $request->title;
            $package->details = $request->details;
            $package->includes	= $request->includes;
            $package->excludes = $request->excludes;
            $package->days = $request->days;
            $package->valid = $request->startValidDate ." to ".$request->endValidDate;
            $package->not_valid = $request->startInvalidDate ." to ". $request->endInvalidDate;
            $package->photo = uploadImage($request->photo, 'packagePhoto');
    
            $package->save();

            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully created a new package.');
            // return to_route('admin.dashboard')->with('t-success', 'New package Created');
            return redirect()->route('package.create');
        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to create the package.');
        }

    }

    public function edit($id){
        $package = Package::findOrFail($id);
        $validDate = explode(' to ' , $package->valid);
        $inValidDate = explode(' to ', $package->not_valid);

        return view('backend.layouts.package.edit',compact('package','validDate','inValidDate'));
    }

    public function update(Request $request , $id){

        $validitor = Validator::make($request->all(),[
            'title' => 'required|string',
            'days' => 'required|numeric',
            'startValidDate' => 'required|string',
            'endValidDate' => 'required|string',
            'startInvalidDate' => 'required|string',
            'endInvalidDate' => 'required|string',
            'includes' => 'required',
            'excludes' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:10000',
        ]);

        if($validitor->fails()){
            return response()->$validitor->error()->first;
        }

        try{

            $package = Package::findOrFail($id);

            $package->title	= $request->title;
            $package->details = $request->details;
            $package->includes	= $request->includes;
            $package->excludes = $request->excludes;
            $package->days = $request->days;
            $package->valid = $request->startValidDate ." to ".$request->endValidDate;
            $package->not_valid = $request->startInvalidDate ." to ". $request->endInvalidDate;
            $package->photo = uploadImage($request->photo, 'packagePhoto');

            $package->save();

             toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(3000)->addSuccess('Successfully update a new package.');

        }catch(Exception $e){
            toastr()->closeButton()->preventDuplicates()->progressBar()->timeOut(1000)->addError('Problem to update the package.');
        }
    }


    public function show(){

        $packages = Package::all();
        return view('backend.layouts.package.view', compact('packages'));
    }
    
}
