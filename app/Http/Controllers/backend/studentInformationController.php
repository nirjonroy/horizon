<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\studentInformation;

class studentInformationController extends Controller
{
    public function index(){
        $studentinfo = studentInformation::all();
        return view('backend.studentinformations', compact('studentinfo'));
    }
    public function show($id){
        $info = studentInformation::find($id);
        return view('backend.show_student_information', compact('info'));

    }
}
