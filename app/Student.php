<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['fullname', 'student_number'];

    /**
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];
}
