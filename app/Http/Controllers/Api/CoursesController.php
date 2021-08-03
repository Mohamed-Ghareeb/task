<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CoursesResource;
use App\Models\Course;

class CoursesController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('active', 'show')->get([
            'name',
            'description',
            'views',
            'level',
            'hours',
            'active',
            'category_id',
            'created_at',
        ]);

        return new CoursesResource($courses);
    }
}
