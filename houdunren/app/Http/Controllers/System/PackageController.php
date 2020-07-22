<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ApiController;
use App\Http\Requests\packageRequest;
use App\Model\Package;
use Illuminate\Http\Request;

class PackageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "index";
        return $this->json(package::all());
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
    public function store(packageRequest $packageRequest)
    {
        // $this->validateForm($request);

        $package=new Package ;
        $package->name=$packageRequest->name;
        $package->save();

        //  return $request->name;
        // return $package;
        return $this->success('添加成功' , $package->toArray());
    }
    // protected function validateForm($request){
    //     $request->validate([
    //         'name'=>['required','min:3','max:10'],
    //     ] ,['name.min'=>'套餐名称不能少于三字符','name.max'=>'套餐名称不能多于十个字符']);
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
        // return $package;
        // return response()->json($package);
        // return $this->success('套餐',compact('package'));
        return $this->json($package);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(packageRequest $packageRequest, Package $package)
    {
        $package->name=$packageRequest->name;
        $package->save();
        return $this->success('更新成功');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $data=$package;
        $package->delete();

        return $this->success('删除成功',$data->toArray());
    }
}
