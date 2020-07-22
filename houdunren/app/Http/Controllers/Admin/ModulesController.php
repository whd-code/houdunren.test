<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Account\Controller;
use App\models\Module;
use App\Services\ModuleService;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ModuleService $moduleService)
    {
       $modules= $moduleService->getAllModules();

        return view('module.index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function install($name,ModuleService $moduleService )
    {
        $module=$moduleService->find($name);
        // dd($module);
        Module::create($module);
        return back()->with('success','安装成功');
    }
    public function uninstall( Module $module)
    {
        // dd($modules);
        $module->delete();
        return response()->json(['message' => '删除成功']);

    }
}
