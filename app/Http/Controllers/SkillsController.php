<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{

    public function index()
    {
        /*$skill = DB::table('skills')->get();
        return view('admin.freelancerCategories', ['skills',$skill]);
        //return view("freelancerCategories", [ "skill" => $skill ]);*/
        $skill = Skills::all();
        return view('admin.freelancerCategories',compact('skill',$skill));
    }

    public function create()
    {
        return view('admin.createCategories');
        return redirect('freelancerCategories');
    }

    public function store(Request $request)
    {
        $skill = new Skills();
        $skill->skill_master=$request->master_skill;
        $skill->skill=$request->sub_skill;
        $skill->image=$request->image;
        $skill->discription=$request->description;
        $skill->save();
       // Skills::create($request->all());
           return redirect('freelancerCategories');
    }

    public function show(Skills $skill)
    {
        return view('admin.freelancerCategories',compact('skill',$skill));
    }

    public function edit(Skills $skill)
    {
        /*return view('skills.edit',compact('Skills',$skill));
        return redirect('freelancerCategories');*/
       // $skill = Skills::find($id);
        return view('admin.editCategories',compact('skill', $skill));
    }

    public function update(Skills $skill)
    {
       /* $skill = Skills::find($id);
        $skill->skill_master = request('master_skill');
        $skill->skill = request('sub_skill');
        $skill->image=request('image');
        $skill->discription=request('description');
        $skill->save();

        $skill->update($request->all());*/
    }

    public function destroy(Request $request, Skills $skill)
    {
        $skill->delete();
       // $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('freelancerCategories');
    }
}
