<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\contactForm;
use Illuminate\Http\Request;

class contactFormController extends Controller
{
    public function index(){
        $contactForm = contactForm::all();
        return view('backend.contact_form', compact('contactForm'));
    }

    public function show($id){
        $contactForm = contactForm::find($id);
        return view('backend.show_contact_form', compact('contactForm'));
    }
}
