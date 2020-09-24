<?php

namespace App\Http\Controllers;

use App\Freelancers;
use Illuminate\Http\Request;

class FreelancersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers = Freelancers::all();
        return view('admin.freelancers', compact('freelancers','freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancers $freelancers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelancers $freelancers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancers $freelancers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Freelancers  $freelancers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelancers $freelancers)
    {
        //
    }
}
