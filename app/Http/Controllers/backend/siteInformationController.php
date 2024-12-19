<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\siteInformation;
use File;

class siteInformationController extends Controller
{
    public function index(){
        $siteinfos = siteInformation::all();
        return view('backend.siteinfo',compact('siteinfos'));
    }

    public function edit($id){
        $info = siteInformation::where('id', $id)->first();
        return view('backend.edit_siteInfo', compact('info'));

    }

    public function update(Request $request, $id)
    {
        $info = siteInformation::find($id);
        if ($request->hasFile('logo')) { // Check if a file has been uploaded
            $existing_logo = $info->logo;
            $extension = $request->file('logo')->getClientOriginalExtension(); // Get the file extension
            $logo = 'logo'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extension; // Generate a unique filename
            $logo_path = 'uploads/website-images/'.$logo; // Construct the file path
            $request->file('logo')->move(public_path('uploads/website-images'), $logo); // Move the uploaded file to the desired location
            $info->logo = $logo_path; // Update the logo path in the database
            $info->save();
            if ($existing_logo) {
                if (File::exists(public_path($existing_logo))) {
                    unlink(public_path($existing_logo)); // Delete the previous logo file
                }
            }
        }

        // Update other fields
        $info->name = $request->name;
        $info->mobile1 = $request->mobile1;
        $info->mobile2 = $request->mobile2;
        $info->email1 = $request->email1;
        $info->email2 = $request->email2;
        $info->address = $request->address;
        $info->description = $request->description;
        $info->save();

        return redirect()->route('siteinfo.index');
    }

public function destroy($id){

    $info = siteInformation::find($id);
    $existing_logo = $info->logo;
    $info->delete();
    if($existing_logo){
        if(File::exists(public_path().'/'.$existing_logo))unlink(public_path().'/'.$existing_logo);
    }

    $notification= trans('admin_validation.Delete Successfully');
    $notification=array('messege'=>$notification,'alert-type'=>'success');
    return redirect()->back()->with($notification);
}


}
