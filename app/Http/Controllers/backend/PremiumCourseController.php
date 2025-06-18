<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\PremiumCourse;
use App\Models\PremiumCourseModule;
use Illuminate\Http\Request;
   use Illuminate\Support\Str;
   use Image;


class PremiumCourseController extends Controller
{
    public function index()
    {
        $courses = PremiumCourse::with('modules')->latest()->get();
        return view('backend.premium_courses', compact('courses'));
    }

    public function create()
    {
        return view('backend.create_premium_courses');
    }




public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'instructor' => 'nullable|string|max:255',
        'duration' => 'nullable|string|max:255',
        'effort' => 'nullable|string|max:255',
        'format' => 'nullable|string|max:255',
        'price' => 'required|numeric',
        'short_description' => 'nullable|string',
        'long_description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'status' => 'required|boolean',
    ]);

    $data = $request->only([
        'title', 'instructor', 'duration', 'effort', 'format', 'price',
        'short_description', 'long_description', 'status'
    ]);

    $data['slug'] = \Str::slug($request->title);

    // ✅ Store image in public/premium-courses/
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('premium-courses'), $imageName);
        $data['image'] = 'premium-courses/' . $imageName; // Save relative path
    }

    PremiumCourse::create($data);

    return redirect()->route('courses.index')->with('success', 'Course created successfully.');
}



    public function show($id)
    {
        $course = PremiumCourse::with('modules')->findOrFail($id);
        return view('premium_courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = PremiumCourse::with('modules')->findOrFail($id);
        return view('backend.edit_premium_courses', compact('course'));
    }

    public function update(Request $request, $id)
{
    $course = PremiumCourse::findOrFail($id);

    // Update basic fields
    $course->title = $request->title;
    $course->slug = $request->slug;
    $course->instructor = $request->instructor;
    $course->duration = $request->duration;
    $course->effort = $request->effort;
    $course->format = $request->format;
    $course->price = $request->price;
    $course->short_description = $request->short_description;
    $course->long_description = $request->long_description;
    $course->status = $request->has('status') ? 1 : 0;

    // Update image if uploaded
    if ($request->hasFile('image')) {
        // Delete old image
        if ($course->image && file_exists(public_path($course->image))) {
            unlink(public_path($course->image));
        }

        // Upload new image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $filename = 'premium_course_' . time() . '.' . $ext;
        $path = 'premium-courses/' . $filename;

        // Save image
        Image::make($image)->save(public_path($path));
        $course->image = $path;
    }

    $course->save();

    return redirect()->back()->with('success', 'Premium course updated successfully!');
}

// Helper function to upload or update an image
private function updateImage($file, $previousImagePath, $fieldName)
{
    if ($file) {
        $this->deleteImageIfExists($previousImagePath);
        return $this->uploadImage($file, $fieldName);
    }

    return $previousImagePath;
}

// Helper function to upload an image
private function uploadImage($file, $fieldName)
{
    $extension = $file->getClientOriginalExtension();
    $filename = $fieldName . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extension;
    $path = 'premium-courses/' . $filename;
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
    $whereToStudy = PremiumCourse::findOrFail($id);

    // Delete associated images
    $this->deleteImageIfExists($whereToStudy->image);
    

    // Delete the record
    $whereToStudy->delete();

    return redirect()->route('courses.index')->with('success', 'Record deleted successfully');
}
}
