<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    protected $dates = ['deleted_at'];
    use SoftDeletes;

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getGradeStringAttribute()
    {
        return ($this->grade > 10) ? "Greater Than 10" : "Les than 10";
    }

    public function level()
    {
        return $this->belongsTo(Level::Class); // make relation
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::Class, 'students_teacher', 'student_id');
    }
}
