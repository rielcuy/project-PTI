<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalCategories = Category::count();
        $totalUsers = User::count();

        return view('home', compact('totalCategories', 'totalUsers'));
    }
}