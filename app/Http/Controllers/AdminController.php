<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('layouts/adminPanel');
    }
    public function freelancerCategories()
    {
        return view('admin/freelancerCategories');
        
    }
     public function userProfile()
    {
        return view('admin/userProfile');
    }
}
