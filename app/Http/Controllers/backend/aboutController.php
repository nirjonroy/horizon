<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use File;
use RealRashid\SweetAlert\Facades\Alert;

class aboutController extends Controller
{
    public function index(){
        $about = About::first();
        return view('backend.about-us', compact('about'));
    }

    public function edit(){
        $about = About::first();
        return view('backend.edit_about-us', compact('about'));
    }

    public function update(Request $request){
        $about = About::where('id', 1)->first();
        if ($request->hasFile('image_1')) { // Check if a file has been uploaded
            $existing_image_1 = $about->image_1;
            $extension = $request->file('image_1')->getClientOriginalExtension(); // Get the file extension
            $image_1 = 'image_1'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extension; // Generate a unique filename
            $image_1_path = 'uploads/website-images/'.$image_1; // Construct the file path
            $request->file('image_1')->move(public_path('uploads/website-images'), $image_1); // Move the uploaded file to the desired location
            $about->image_1 = $image_1_path; // Update the logo path in the database
            $about->save();
            if ($existing_image_1) {
                if (File::exists(public_path($existing_image_1))) {
                    unlink(public_path($existing_image_1)); // Delete the previous logo file
                }
            }
        }

        if ($request->hasFile('image_2')) { // Check if a file has been uploaded
            $existing_image_2 = $about->image_2;
            $extension = $request->file('image_2')->getClientOriginalExtension(); // Get the file extension
            $image_2 = 'image_2'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extension; // Generate a unique filename
            $image_2_path = 'uploads/website-images/'.$image_2; // Construct the file path
            $request->file('image_2')->move(public_path('uploads/website-images'), $image_2); // Move the uploaded file to the desired location
            $about->image_2 = $image_2_path; // Update the logo path in the database
            $about->save();
            if ($existing_image_2) {
                if (File::exists(public_path($existing_image_2))) {
                    unlink(public_path($existing_image_2)); // Delete the previous logo file
                }
            }
        }

        if ($request->hasFile('image_3')) { // Check if a file has been uploaded
            $existing_image_3 = $about->image_3;
            $extension = $request->file('image_3')->getClientOriginalExtension(); // Get the file extension
            $image_3 = 'image_3'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extension; // Generate a unique filename
            $image_3_path = 'uploads/website-images/'.$image_3; // Construct the file path
            $request->file('image_3')->move(public_path('uploads/website-images'), $image_3); // Move the uploaded file to the desired location
            $about->image_3 = $image_3_path; // Update the logo path in the database
            $about->save();
            if ($existing_image_3) {
                if (File::exists(public_path($existing_image_3))) {
                    unlink(public_path($existing_image_3)); // Delete the previous logo file
                }
            }
        }

        // Update other fields
        $about->about_us = $request->about_us;

        $about->save();

        return redirect()->route('about.index')->with('success', 'Updated Successfully');
    }
}
