<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\packageRequest;
use App\Model\Package;
use App\Services\ModuleService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request){
        // dd(Package::all());
        return view('package.index',['packages'=>Package::all()]);
    }
    public function create(Request $request,ModuleService $moduleService){
        return view('package.create',['modules'=>$moduleService->AllInstall()->values()]);
    }
    public function store(packageRequest $request){
        $package= Package::create($request->input());
        $package->modules()->sync($request->input('modules'));
        return redirect()->route('admin.package.index')->with('success',"添加成功");

    }
    
    public function edit(Request $request,Package $package,ModuleService $moduleservice){

        // dd($package->modules->pluck('id')->toArray());
        // $package->modules()->sync($request->input('modules'));
        
        return view('package.edit',['modules'=>$moduleservice->AllInstall()->values(),'package'=>$package]);
    }
    public function update(packageRequest $request,Package $package){
        $package->fill($request->input())->save();
        $package->modules()->sync($request->input('modules'));
        return redirect()->route('admin.package.index')->with('success',"添加成功");

    }
    public function destroy( Package $package){
        $package->delete();
        return response()->json(['message'=>'删除成功']);
    

    }
}

