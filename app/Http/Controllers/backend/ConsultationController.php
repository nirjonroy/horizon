<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ConsultationController extends Controller
{
    public function index()  {
        
        $bookings = Booking::latest()->get();
        return view('backend.consultations', compact('bookings'));
        
    }

    public function show($id){
        $book = Booking::find($id);
        return view('backend.show_consultation_form', compact('book'));
    }

}
