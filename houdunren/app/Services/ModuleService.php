<?php
 namespace App\Services;

use App\models\Module as Model;

class ModuleService
 {
     public function getAllModules(){
        $modules =\Module::toCollection();
        return $modules->map(function ($module){
            $name=$module->getName();
             return  $module= $this->find($name);

        });
    }
    public function AllInstall(){
        return $this->getAllModules()->filter(function($module){
            return $module['isinstaller'];
        });
    }
    public function find(string $name){
       $module = \Module::find($name);
        $config=include $module->getPath() . "/config/config.php";
        $model=Model::where('name',$name)->first();
       return $config+[
           'preview' =>'/Modules/'. $name . '/static/preview.jpg',
           'id'=>$model['id'] ?? 0,
        'isinstaller'=>(bool)$model,
        'module'=>$module
       ];
    }
 }
