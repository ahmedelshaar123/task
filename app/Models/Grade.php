<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{

    protected $table = 'grades';
    public $timestamps = true;
    protected $fillable = array('grade', 'seating_number', 'student_id');

    public function student()
    {
        return $this->belongsTo('App\Models\Student');
    }

}
