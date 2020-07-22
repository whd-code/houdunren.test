<?php

namespace App\Model;

use App\models\Module ;

use Illuminate\Database\Eloquent\Model;


class Package extends Model
{
    protected $fillable = ['title'];
    public function modules(){
        return $this->belongsToMany(Module::class)->withTimestamps();
    }
}
