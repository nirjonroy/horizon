<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\slider;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
class sliderController extends Controller
{
    public function index(){
        $sliders = slider::where('status', 1)->get();
        return view('backend.slider', compact('sliders'));
    }

    public function create(){
        return view('backend.create_slider');
    }

    public function store(Request $request){
        $slider = new slider();

        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image = 'image'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image = 'uploads/website-images/'.$image;
            Image::make($request->image)
                ->save(public_path().'/'.$image);
            $slider->image = $image;
        }

        $slider->text_1 = $request->text_1;
        $slider->text_2 = $request->text_2;



        $slider->save();
        return redirect()->back()->with('success', 'Cretated Successfully');
    }

    public function edit($id){
        $slider = slider::find($id);

        return view('backend.edit_slider', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = slider::find($id);

        // Update hero_banner image
        $slider->image = $this->updateImage($request->file('image'), $slider->image, 'image');




        // Update other fields
        $slider->text_1 = $request->text_1;
        $slider->text_2 = $request->text_2;


        $slider->save();

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    // Helper function to upload or update an image
    private function updateImage($file, $previousImagePath, $fieldName)
    {
        if ($file) {
            // Delete previous image if it exists
            $this->deleteImageIfExists($previousImagePath);

            // Upload new image
            return $this->uploadImage($file, $fieldName);
        }

        // If no new image is uploaded, return the previous image path
        return $previousImagePath;
    }

    // Helper function to upload an image
    private function uploadImage($file, $fieldName)
    {
        $extension = $file->getClientOriginalExtension();
        $filename = $fieldName . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extension;
        $path = 'uploads/website-images/' . $filename;
        Image::make($file)->save(public_path($path));
        return $path;
    }

    // Helper function to delete an image if it exists
    private function deleteImageIfExists($path)
    {
        if ($path && file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    }

    public function destroy($id)
{
    $slider = slider::findOrFail($id);

    // Delete associated images
    $this->deleteImageIfExists($slider->hero_banner);
    $this->deleteImageIfExists($slider->Sporting_event_image);


    // Delete the record
    $slider->delete();

    return redirect()->back()->with('success', 'Record deleted successfully');
}

}
