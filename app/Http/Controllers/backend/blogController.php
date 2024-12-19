<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\whereToStudy;
use App\Models\Blog;
use App\Models\internationalStudentLife;
use Image;
class blogController extends Controller
{
    public function index(){
        $blogs=Blog::where('status',1)->get();
        return view('backend.blogs', compact('blogs'));
    }

    public function create(){
        $studies = whereToStudy::all();
        $life = internationalStudentLife::all();
        return view('backend.create_blog', compact('studies', 'life'));
    }

    public function store(Request $request){
        $blog = new Blog();

        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image = 'image'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image = 'uploads/custom-images/blogs/'.$image;
            Image::make($request->image)
                ->save(public_path().'/'.$image);
            $blog->image = $image;
        }

        $blog->where_to_study_id = $request->where_to_study_id;
        $blog->life_style_id = $request->life_style_id;
        $blog->accommodation_id = $request->accommodation_id;
        $blog->homePage = $request->homePage;
        $blog->cover = $request->cover;
        $blog->title = $request->title;
        $blog->description = $request->description;



        $blog->save();
        return redirect()->back()->with('success', 'Cretated Successfully');
    }

    public function edit($id){
        $blog = Blog::find($id);
        $studies = whereToStudy::all();
        $life = internationalStudentLife::all();
        return view('backend.edit_blog', compact('blog', 'studies', 'life'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        // Update hero_banner image
        $blog->image = $this->updateImage($request->file('image'), $blog->image, 'image');




        // Update other fields
        $blog->where_to_study_id = $request->where_to_study_id;
        $blog->life_style_id = $request->life_style_id;
        $blog->accommodation_id = $request->accommodation_id;
        $blog->homePage = $request->homePage;
        $blog->cover = $request->cover;
        $blog->title = $request->title;
        $blog->description = $request->description;


        $blog->save();

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
        $path = 'uploads/custom-images/blogs/' . $filename;
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
    $blog = Blog::findOrFail($id);

    // Delete associated images
    $this->deleteImageIfExists($blog->hero_banner);
    $this->deleteImageIfExists($blog->Sporting_event_image);


    // Delete the record
    $blog->delete();

    return redirect()->back()->with('success', 'Record deleted successfully');
}


}
