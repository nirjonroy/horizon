<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Script;
use App\Models\Blog; // Import the Script model

class ScriptController extends Controller
{
    // Index method to display all scripts
    public function index()
    {
        // Fetch all scripts from the database
        $scripts = Script::where('id', 1)->first();

        // Return the view with the scripts data
        return view('backend.scripts', compact('scripts'));
    }

    // Update method to edit a specific script
    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'google' => 'required|string',
            'facebook' => 'required|string',
        ]);
    
        // Assuming you have a Script model and you want to update the first record
        $script = Script::first(); // or find by ID if you have it
    
        // Update the script with the validated data
        $script->google = $request->input('google');
        $script->facebook = $request->input('facebook');
        
        // Save the changes to the database
        $script->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Scripts updated successfully.');
    }
}