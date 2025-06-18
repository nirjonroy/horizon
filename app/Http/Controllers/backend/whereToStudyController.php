<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\whereToStudy;
use RealRashid\SweetAlert\Facades\Alert;
use Image;

class whereToStudyController extends Controller
{
    public function index(){
        $studies = whereToStudy::where('status', 1)->get();
        $title = 'Delete !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('backend.whereToStudy', compact('studies'));
    }

    public function create(){
        return view('backend.create_whereToStudy');
    }

    public function store(Request $request){
        $whereToStudy = new whereToStudy();

        if($request->slider1){
            $extention = $request->slider1->getClientOriginalExtension();
            $slider1 = 'slider1'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $slider1 = 'uploads/custom-images/where_to_study/'.$slider1;
            Image::make($request->slider1)
                ->save(public_path().'/'.$slider1);
            $whereToStudy->slider1 = $slider1;
        }

        if($request->slider2){
            $extention = $request->slider2->getClientOriginalExtension();
            $slider2 = 'slider2'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $slider2 = 'uploads/custom-images/where_to_study/'.$slider2;
            Image::make($request->slider2)
                ->save(public_path().'/'.$slider2);
            $whereToStudy->slider2 = $slider2;
        }

        if($request->slider3){
            $extention = $request->slider3->getClientOriginalExtension();
            $slider3 = 'slider3'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $slider3 = 'uploads/custom-images/where_to_study/'.$slider3;
            Image::make($request->slider3)
                ->save(public_path().'/'.$slider3);
            $whereToStudy->slider3 = $slider3;
        }

        if($request->image_1){
            $extention = $request->image_1->getClientOriginalExtension();
            $image_1 = 'image_1'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_1 = 'uploads/custom-images/where_to_study/'.$image_1;
            Image::make($request->image_1)
                ->save(public_path().'/'.$image_1);
            $whereToStudy->image_1 = $image_1;
        }

        if($request->image_2){
            $extention = $request->image_2->getClientOriginalExtension();
            $image_2 = 'image_2'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_2 = 'uploads/custom-images/where_to_study/'.$image_2;
            Image::make($request->image_2)
                ->save(public_path().'/'.$image_2);
            $whereToStudy->image_2 = $image_2;
        }

        if($request->image_3){
            $extention = $request->image_3->getClientOriginalExtension();
            $image_3 = 'image_3'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_3 = 'uploads/custom-images/where_to_study/'.$image_3;
            Image::make($request->image_3)
                ->save(public_path().'/'.$image_3);
            $whereToStudy->image_3 = $image_3;
        }

        if($request->image_4){
            $extention = $request->image_4->getClientOriginalExtension();
            $image_4 = 'image_4'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_4 = 'uploads/custom-images/where_to_study/'.$image_4;
            Image::make($request->image_4)
                ->save(public_path().'/'.$image_4);
            $whereToStudy->image_4 = $image_4;
        }

        if($request->image_5){
            $extention = $request->image_5->getClientOriginalExtension();
            $image_5 = 'image_5'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_5 = 'uploads/custom-images/where_to_study/'.$image_5;
            Image::make($request->image_5)
                ->save(public_path().'/'.$image_5);
            $whereToStudy->image_5 = $image_5;
        }

        $whereToStudy->name = $request->name;
        $whereToStudy->link = $request->link;
        $whereToStudy->short_description = $request->short_description;
        $whereToStudy->rated = $request->rated;
        $whereToStudy->global_network = $request->global_network;
        $whereToStudy->award = $request->award;
        $whereToStudy->rank = $request->rank;
        $whereToStudy->faq_question_1 = $request->faq_question_1;
        $whereToStudy->faq_answer_1 = $request->faq_answer_1;
        $whereToStudy->faq_question_2 = $request->faq_question_2;
        $whereToStudy->faq_answer_2 = $request->faq_answer_2;
        $whereToStudy->faq_question_3 = $request->faq_question_3;
        $whereToStudy->faq_answer_3 = $request->faq_answer_3;
        $whereToStudy->faq_question_4 = $request->faq_question_4;
        $whereToStudy->faq_answer_4 = $request->faq_answer_4;
        $whereToStudy->faq_question_5 = $request->faq_question_5;
        $whereToStudy->faq_answer_5 = $request->faq_answer_5;
        $whereToStudy->is_done = $request->is_done;
        $whereToStudy->priority = $request->priority;
        $whereToStudy->meta_title = $request->meta_title;
        $whereToStudy->meta_description = $request->meta_description;

        $keywords = $request->keywords;
        $whereToStudy->keywords = $keywords ? json_encode(array_map('trim', explode(',', $keywords))) : null;

        $whereToStudy->save();
        return redirect()->back()->with('success', 'Cretated Successfully');
    }

    public function edit($id){
        $studies = whereToStudy::find($id);

        return view('backend.edit_wheretostudy', compact('studies'));
    }

    public function update(Request $request, $id)
    {
        $whereToStudy = whereToStudy::find($id);

        // Update slider1 image
        $whereToStudy->slider1 = $this->updateImage($request->file('slider1'), $whereToStudy->slider1, 'slider1');

        // Update slider2 image
        $whereToStudy->slider2 = $this->updateImage($request->file('slider2'), $whereToStudy->slider2, 'slider2');

        // Update slider3 image
        $whereToStudy->slider3 = $this->updateImage($request->file('slider3'), $whereToStudy->slider3, 'slider3');

        // Update image_1
        $whereToStudy->image_1 = $this->updateImage($request->file('image_1'), $whereToStudy->image_1, 'image_1');

        // Update image_2
        $whereToStudy->image_2 = $this->updateImage($request->file('image_2'), $whereToStudy->image_2, 'image_2');

        // Update image_3
        $whereToStudy->image_3 = $this->updateImage($request->file('image_3'), $whereToStudy->image_3, 'image_3');

        // Update image_4
        $whereToStudy->image_4 = $this->updateImage($request->file('image_4'), $whereToStudy->image_4, 'image_4');

        // Update image_5
        $whereToStudy->image_5 = $this->updateImage($request->file('image_5'), $whereToStudy->image_5, 'image_5');

        // Update other fields
        $whereToStudy->short_description = $request->short_description;
        $whereToStudy->link = $request->link;
        $whereToStudy->rated = $request->rated;
        $whereToStudy->global_network = $request->global_network;
        $whereToStudy->award = $request->award;
        $whereToStudy->rank = $request->rank;
        $whereToStudy->faq_question_1 = $request->faq_question_1;
        $whereToStudy->faq_answer_1 = $request->faq_answer_1;
        $whereToStudy->faq_question_2 = $request->faq_question_2;
        $whereToStudy->faq_answer_2 = $request->faq_answer_2;
        $whereToStudy->faq_question_3 = $request->faq_question_3;
        $whereToStudy->faq_answer_3 = $request->faq_answer_3;
        $whereToStudy->faq_question_4 = $request->faq_question_4;
        $whereToStudy->faq_answer_4 = $request->faq_answer_4;
        $whereToStudy->faq_question_5 = $request->faq_question_5;
        $whereToStudy->faq_answer_5 = $request->faq_answer_5;
        $whereToStudy->is_done = $request->is_done;
        $whereToStudy->priority = $request->priority;
        $whereToStudy->meta_title = $request->meta_title;
        $whereToStudy->meta_description = $request->meta_description;

        $keywords = $request->keywords;
        $whereToStudy->keywords = $keywords ? json_encode(array_map('trim', explode(',', $keywords))) : null;

        $whereToStudy->save();

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
        $path = 'uploads/custom-images/where_to_study/' . $filename;
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
    $whereToStudy = whereToStudy::findOrFail($id);

    // Delete associated images
    $this->deleteImageIfExists($whereToStudy->slider1);
    $this->deleteImageIfExists($whereToStudy->slider2);
    $this->deleteImageIfExists($whereToStudy->slider3);
    $this->deleteImageIfExists($whereToStudy->image_1);
    $this->deleteImageIfExists($whereToStudy->image_2);
    $this->deleteImageIfExists($whereToStudy->image_3);
    $this->deleteImageIfExists($whereToStudy->image_4);
    $this->deleteImageIfExists($whereToStudy->image_5);

    // Delete the record
    $whereToStudy->delete();

    return redirect()->route('whereToStudy.index')->with('success', 'Record deleted successfully');
}



}
