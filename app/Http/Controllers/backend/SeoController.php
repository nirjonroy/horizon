<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoSetting;

class SeoController extends Controller
{
    
    public function seoSetup()
    {
        $pages = SeoSetting::all();
        return view("backend.seo_setup", compact("pages"));
    }

    public function getSeoSetup($id)
    {
        $page = SeoSetting::find($id);
        return response()->json(["page" => $page], 200);
    }

    public function updateSeoSetup(Request $request, $id)
{
    $page = SeoSetting::find($id);
    if (!$page) {
        return response()->json(['error' => 'SEO page not found.'], 404);
    }

    $request->validate([
        'seo_title' => 'required|string',
        'seo_description' => 'required|string',
        'keywords' => 'nullable|string', // Validate keywords as a string
    ]);

    $page->seo_title = $request->input('seo_title');
    $page->seo_description = $request->input('seo_description');

    // Convert keywords from comma-separated string to JSON array
    $keywords = $request->input('keywords');
    $page->keywords = $keywords ? json_encode(array_map('trim', explode(',', $keywords))) : null;

    $page->save();

    return response()->json(['success' => 'SEO updated successfully.']);
}
}
