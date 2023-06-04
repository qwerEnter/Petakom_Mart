<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
  //view cashier
  public function index()
  {
      $data = Delivery::all(); // Retrieve all schedules from the database
      return view('admin.delivery', compact('data'));
  }


  //add cashier
  public function save(Request $request)
{

    $cashier = new Delivery;

    $cashier->matric_no = $request->input('matric_no');
    $cashier->name = $request->input('name');
    $cashier->work_type = $request->input('work_type');

    $cashier->save();
    return redirect('/admin/delivery')->with('success', 'Data added');
}

  
//delete cashier
  public function delete($id)
{
  $cashier = Delivery::find($id);
  if ($cashier) {
      $cashier->delete();
      return redirect('/admin/delivery')->with('success', 'Cashier deleted successfully');
  } else {
      return redirect('/admin/delivery')->with('error', 'Cashier not found');
  }
}

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //view meetup
    // public function index2()
    // {
    //     $data2 = Delivery::all(); // Retrieve all schedules from the database
    //     return view('admin.delivery', compact('data2'));
    // }


    //add meetup
    public function save2(Request $request)
{
    $meetup = new Delivery;

    $meetup->meetup_points = $request->input('meetup_points');

    $meetup->save();
    return redirect('/admin/meetup')->with('success', 'Data added');
}

    
//delete meetup

    
}
