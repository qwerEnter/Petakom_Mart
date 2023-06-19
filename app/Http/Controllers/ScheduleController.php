<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('manageschedule.schedule', ['schedules' => $schedules]);
    }

    public function index2() //page schedule at admin
    {
        $schedules = Schedule::all();
        return view('admin.schedule', ['schedules' => $schedules]);
    }

    public function index1() //display list of schedule
    {
        $schedules = Schedule::all();
        return view('manageschedule.displayschedule', ['schedules' => $schedules]);
    }
    
    public function indexcashier()
    {
        $schedules = Schedule::all();
        return view('manageschedule.schedule-cashier', ['schedules' => $schedules]);
    }

    public function create(Request $request)
    {
        Schedule::create($request->all());
        return redirect('/schedule')->with('success', 'Success Create');
    }

    public function createcashier(Request $request)
    {
        Schedule::create($request->all());
        return redirect('/schedule-cashier')->with('success', 'Success Create');
    }

    public function edit($id)
    {
        $schedules=Schedule::find($id);
        return view('manageschedule.schedule-edit', ['schedules'=>$schedules]);
    }

    public function update(Request $request, $id)
    {
        $schedules=Schedule::find($id);
        $schedules->update($request->all());
        return redirect('/schedule')->with('success', 'Success Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $schedules=Schedule::find($id);
        $schedules->delete($schedules);
        return redirect('/schedule')->with('delete', 'Success Delete');
    }

}
