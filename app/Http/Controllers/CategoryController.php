<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function activeCategories(): Collection
    {
        return Category::where('is_active', 1)->get();
    }

    public function footerCategories(): Collection
    {
        return Category::where('is_active', 1)->get();
    }


}
