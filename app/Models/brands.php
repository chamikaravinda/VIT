<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    //Table Name
    protected $table='brands';
    //Primary Key
    public $primaryKey='id';
    //Timestamps
    public $timestamps=true;

    public function vehicles(){
        return $this->hasMany('App\Models\Vehicles','id');
    }
}
