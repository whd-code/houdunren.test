<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller ;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    
    public function index()
    {
        $groups=Group::all();
        return view('group.index',compact('groups'));
        
    }

 
    public function create()
    {
        return view('group.create');
    }

    public function store(Request $request,Group $group)
    {
      
    }

   
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
