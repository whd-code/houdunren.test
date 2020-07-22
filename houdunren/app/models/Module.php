<?php

namespace App\models;

use App\Model\Package;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable=['title', 'versions','name','description'];
    public function package(){
        return $this->belongsToMany(Package::class);
    }
}
