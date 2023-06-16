<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index($class)
    {
        // Use the $class parameter in your logic
        // For example, you can pass it to the view
        return view('schedule.index', ['class' => $class]);
    }

}
