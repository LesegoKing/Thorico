<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = (new Category())->subcategries();
        return view('index',['categories' => $categories]);
    }

    public function about()
    {
        $categories = (new Category())->subcategries();
        return view('about',['categories' => $categories]);
    }

    public function faq()
    {
        $categories = (new Category())->subcategries();
        return view('faq',['categories' => $categories]);
    }

    public function contactUs()
    {
        $categories = (new Category())->subcategries();
        return view('contact-us',['categories' => $categories]);
    }
}
