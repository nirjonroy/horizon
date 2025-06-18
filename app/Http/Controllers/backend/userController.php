<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    
    public function __construct()
{
    $this->middleware('auth'); // Ensure user is authenticated
}

    
    public function show(){
        $user = User::where('id', 1)->first();
        return view('backend.user_show', compact('user'));
    }
    
    public function update(Request $request, $id){
          // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user's information
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // If a new password is provided, hash it and update it
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        // Save the changes to the database
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User Update Successfully');
    }
}
