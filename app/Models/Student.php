<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = array('first_name', 'second_name', 'third_name', 'email');

    public function grade()
    {
        return $this->hasOne('App\Models\Grade');
    }

}
