<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\webInner;

class webInnerController extends Controller
{
    public function index(){
        $webinners=webInner::all();
        return view('backend.webinners', compact('webinners'));
    }

    public function create(){
       
        return view('backend.create_webinner');
    }

    public function store(Request $request){
        $webInner = new webInner();


        $webInner->date = $request->date;
        $webInner->time = $request->time;
        $webInner->title = $request->title;
        $webInner->from = $request->from;
        $webInner->link = $request->link;
        


        $webInner->save();
        return redirect()->back()->with('success', 'Cretated Successfully');
    }

    public function edit($id){
        $webinner = webInner::find($id);
        return view('backend.edit_webinner', compact('webinner'));
    }

    public function update(Request $request, $id)
    {
        $webInner = webInner::find($id);

        // Update hero_banner image
        



        // Update other fields
        $webInner->date = $request->date;
        $webInner->time = $request->time;
        $webInner->title = $request->title;
        $webInner->from = $request->from;
        $webInner->link = $request->link;


        $webInner->save();

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    // Helper function to upload or update an image
    

    public function destroy($id)
{
    $webInner = webInner::find($id);

    // Delete the record
    $webInner->delete();

    return redirect()->back()->with('success', 'Record deleted successfully');
}
}
