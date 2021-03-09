<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function display()
    {
        $categories = Category::with('forms')->get();
        return view('display', compact('categories'));
    }
}
