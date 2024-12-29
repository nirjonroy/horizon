<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\internationalStudentLife;
use RealRashid\SweetAlert\Facades\Alert;
use Image;
use Illuminate\Http\Request;

class internationalStudentLifeController extends Controller
{
    public function index(){
        $lifes = internationalStudentLife::all();
        $title = 'Delete !';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('backend.studentlife', compact('lifes'));
    }

    public function create(){
        return view('backend.create_studentlife');
    }

    public function store(Request $request){
        $lifes = new internationalStudentLife();

        if($request->hero_banner){
            $extention = $request->hero_banner->getClientOriginalExtension();
            $hero_banner = 'hero_banner'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $hero_banner = 'uploads/custom-images/student-life/'.$hero_banner;
            Image::make($request->hero_banner)
                ->save(public_path().'/'.$hero_banner);
            $lifes->hero_banner = $hero_banner;
        }

        if($request->Sporting_event_image){
            $extention = $request->Sporting_event_image->getClientOriginalExtension();
            $Sporting_event_image = 'Sporting_event_image'.date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $Sporting_event_image = 'uploads/custom-images/student-life/'.$Sporting_event_image;
            Image::make($request->Sporting_event_image)
                ->save(public_path().'/'.$Sporting_event_image);
            $lifes->Sporting_event_image = $Sporting_event_image;
        }



        $lifes->name = $request->name;
        $lifes->hero_banner_text = $request->hero_banner_text;
        $lifes->Sporting_event_text = $request->Sporting_event_text;
        $lifes->faq_question_1 = $request->faq_question_1;
        $lifes->faq_answer_1 = $request->faq_answer_1;
        $lifes->faq_question_2 = $request->faq_question_2;
        $lifes->faq_answer_2 = $request->faq_answer_2;
        $lifes->faq_question_3 = $request->faq_question_3;
        $lifes->faq_answer_3 = $request->faq_answer_3;
        $lifes->faq_question_4 = $request->faq_question_4;
        $lifes->faq_answer_4 = $request->faq_answer_4;
        $lifes->faq_question_5 = $request->faq_question_5;
        $lifes->faq_answer_5 = $request->faq_answer_5;

        $lifes->meta_title = $request->meta_title;
        $lifes->meta_description = $request->meta_description;

        $keywords = $request->keywords;
        $lifes->keywords = $keywords ? json_encode(array_map('trim', explode(',', $keywords))) : null;

        $lifes->save();
        return redirect()->back()->with('success', 'Cretated Successfully');
    }

    public function edit($id){
        $life = internationalStudentLife::find($id);

        return view('backend.edit_studentlife', compact('life'));
    }

    public function update(Request $request, $id)
    {
        $life = internationalStudentLife::find($id);

        // Update hero_banner image
        $life->hero_banner = $this->updateImage($request->file('hero_banner'), $life->hero_banner, 'hero_banner');

        // Update Sporting_event_image image
        $life->Sporting_event_image = $this->updateImage($request->file('Sporting_event_image'), $life->Sporting_event_image, 'Sporting_event_image');



        // Update other fields
        $life->name = $request->name;
        $life->hero_banner_text = $request->hero_banner_text;
        $life->Sporting_event_text = $request->Sporting_event_text;


        $life->faq_question_1 = $request->faq_question_1;
        $life->faq_answer_1 = $request->faq_answer_1;
        $life->faq_question_2 = $request->faq_question_2;
        $life->faq_answer_2 = $request->faq_answer_2;
        $life->faq_question_3 = $request->faq_question_3;
        $life->faq_answer_3 = $request->faq_answer_3;
        $life->faq_question_4 = $request->faq_question_4;
        $life->faq_answer_4 = $request->faq_answer_4;
        $life->faq_question_5 = $request->faq_question_5;
        $life->faq_answer_5 = $request->faq_answer_5;

        $life->meta_title = $request->meta_title;
        $life->meta_description = $request->meta_description;

        $keywords = $request->keywords;
        $life->keywords = $keywords ? json_encode(array_map('trim', explode(',', $keywords))) : null;


        $life->save();

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
        $path = 'uploads/custom-images/student-life/' . $filename;
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
    $life = internationalStudentLife::findOrFail($id);

    // Delete associated images
    $this->deleteImageIfExists($life->hero_banner);
    $this->deleteImageIfExists($life->Sporting_event_image);


    // Delete the record
    $life->delete();

    return redirect()->route('internationalStdLife.index')->with('success', 'Record deleted successfully');
}
}
