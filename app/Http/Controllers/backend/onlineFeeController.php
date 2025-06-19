<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\onlineFee;
use App\Models\feesCategory;
use App\Models\whereToStudy;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class onlineFeeController extends Controller
{
    public function index(){
            $fees = onlineFee::where('status',1)->latest()->get();

        return view('backend.online_fee', compact('fees'));
    }
    public function create(){
        $category = feesCategory::all();
        $university = whereToStudy::all();
        return view('backend.create_online_fee', compact('category', 'university'));
    }

    public function store(Request $request){
        $fees = new onlineFee;
        $fees->degree_id = $request->degree_id;
        $fees->university_id = $request->university_id;
        $fees->type = $request->type;
        $fees->program = $request->program;
        $fees->short_name = $request->short_name;
        $fees->total_fee = $request->total_fee;
        $fees->yearly = $request->yearly;
        $fees->duration = $request->duration;
        $fees->link = $request->link;

        $fees->save();
        return redirect()->route('fees.online.index')->with('success', 'Cretated Successfully');
    }

    public function edit(Request $request, $id){
        $fee = onlineFee::find($id);
        $category = feesCategory::all();
        $university = whereToStudy::all();
        return view('backend.edit_online_fee', compact('category', 'fee', 'university'));
    }

    public function update(Request $request, $id)
    {
        $fees = onlineFee::find($id);


                $fees->degree_id = $request->degree_id;
                $fees->type = $request->type;
                $fees->program = $request->program;
                $fees->short_name = $request->short_name;
                $fees->total_fee = $request->total_fee;
                $fees->yearly = $request->yearly;
                $fees->duration = $request->duration;
                $fees->university_id = $request->university_id;
                $fees->link = $request->link;



        $fees->save();

        return redirect()->back()->with('success', 'Updated Successfully');
    }
    
    
   public function recommand($id)
    {
        $onlineFee = OnlineFee::findOrFail($id);
        $onlineFee->recommend = 1;
        $onlineFee->save();

        return redirect()->back()->with('success', 'Recommand Successfully');
    }

    public function not_recommand ($id)
    {
        $onlineFee = OnlineFee::findOrFail($id);
        $onlineFee->recommend = 0;
        $onlineFee->save();

        return redirect()->back()->with('delete', 'Recommand removed');
    }
    

    public function destroy($id)
    {
        $fee = onlineFee::findOrFail($id);

        // Delete associated images

        // Delete the record
        $fee->delete();

        return redirect()->back()->with('success', 'Record deleted successfully');
    }
}
