<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public $timestamps = false;

    // use HasFactory;
    protected $table = 'schedules';
    protected $fillable = ['matric_no','name','work_type'];
}
