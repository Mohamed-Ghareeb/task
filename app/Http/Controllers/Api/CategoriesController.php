<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __invoke()
    {
        $categories = Category::where('active', 'show')->get();

        return new CategoryResource($categories);
    }
}
