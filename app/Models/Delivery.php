<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public $timestamps = false;

    //use HasFactory;
    
    //for view  cashier in schedlues
    protected $table = 'schedules';
    // protected $table2 = 'meetup_points';

    //for adding new cashier in schedlues
    protected $fillable = ['matric_no','name','work_type'];
    
}
