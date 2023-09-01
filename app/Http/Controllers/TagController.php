<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    public function filterTags(): View
    {
        return view('pages.tag-detail');
    }
}
