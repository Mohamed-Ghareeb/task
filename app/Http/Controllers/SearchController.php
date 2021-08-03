<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function courses(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->input('search');
            $courses = Course::where('name', 'LIKE', '%'. $search . '%')->paginate(6);
            return view('search-course', compact('courses'));
        }
    }

    public function categories(Request $request)
    {
        if ($request->ajax()) {
            $search = $request->input('search');
            $categories = Category::where('name', 'LIKE', '%'. $search . '%')->paginate(8);
            return view('search-category', compact('categories'));
        }
    }
}
