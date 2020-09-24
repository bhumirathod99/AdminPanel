<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        //return view('layouts/adminPanel');
    }
    public function freelancerCategories()
    {
         
        /* $skill = DB::select('select * from skills');
        return view('admin.freelancerCategories')->with('skill', $skill);
        //return view('admin/freelancerCategories');*/
        
    }
     public function userProfile()
    {
        //return view('admin/userProfile');
    }
}
