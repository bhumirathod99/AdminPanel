<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;


class SkillsController extends Controller
{

    public function index()
    {
        
        $skills = Skills::all();
        return view('admin.freelancerCategories', compact('skills','skills'));
    }

    public function create()
    {
        return view('admin.createCategories');
        //return redirect('createCategories');
    }

    public function store(Request $request)
    {
        $skill = new Skills([
            'skill_master' => $request->get('master_skill'),
            'skill' => $request->get('sub_skill'),
            'image' => $request->get('image'),
            'discription' => $request->get('description'),
                ]);
        $skill->save();
        return redirect('/freelancerCategories');
    
    }

    public function show(Skills $skill)
    {
        return view('admin.freelancerCategories',compact('skill'));
    }

    public function edit(Skills $skill)
    {
        
        return view('admin.editCategories',compact('skill'));
    }

    public function update(Request $request, $id)
    {
        
        $skill = Skills::find($id);
        $skill->skill_master = $request->get('master_skill');
        $skill->skill = $request->get('sub_skill');
        $skill->image=$request->get('image');
        $skill->discription=$request->get('description');
        $skill->update();
        return redirect('/freelancerCategories');
       
    }

    public function destroy(Skills $skill)
    {
        //$skill = Student::find($id);
        $skill->delete();
        return redirect('/freelancerCategories');
     
    }
}
