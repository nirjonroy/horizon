<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feesCategory;
use RealRashid\SweetAlert\Facades\Alert;

class feesCategoryController extends Controller
{
     public function index(){
        $data = feesCategory::all();
        return view('backend.feesCategory-index', compact('data'));
     }
     public function create(){
        return view('backend.create-feesCategory');
     }
     public function store(Request $request){
            $feesCat = new feesCategory;
            $feesCat->name = $request->name;
            $feesCat->save();
            return redirect()->route('fees.category.index')->with('success', 'Cretated Successfully');
     }

     public function edit(Request $request, $id){
        $feesCat=feesCategory::find($id);
        return view('backend.edit_feesCategory', compact('feesCat'));

     }

     public function update(Request $request, $id){
        $feesCat=feesCategory::find($id);
        $feesCat->name = $request->name;
        $feesCat->save();
        return redirect()->route('fees.category.index')->with('success', 'Updated Successfully');
     }
}
