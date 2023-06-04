<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class CashierController extends Controller
{


    //view cashier
    public function index()
    {
        $data = Schedule::all(); // Retrieve all schedules from the database
        return view('admin.delivery', compact('data'));
    }


    //add cashier
    public function save(Request $request)
    {
        $schedules = new Schedule;

        $schedules->matric_no = $request->input('matric_no');
        $schedules->name = $request->input('name');


        $schedules->save();
        return redirect('/admin/delivery')->with('success', 'Data added');
    }

    
//delete cashier
    public function delete($id)
{
    $cashier = Schedule::find($id);
    if ($cashier) {
        $cashier->delete();
        return redirect('/admin/delivery')->with('success', 'Cashier deleted successfully');
    } else {
        return redirect('/admin/delivery')->with('error', 'Cashier not found');
    }
}

    
    
}
