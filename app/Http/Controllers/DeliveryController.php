<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Inventory;
use App\Models\MeetupPoint;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{

// START FOR CASHIER SECTION

    //view history delivery cashier
    public function DeliveryInfo()
    {
        $historys = Delivery::all();
        
        return view('managedelivery.cashieractivity', compact('historys'));
    }
    

    public function StatusDelivery($id)
    {
        $delivery = Delivery::find($id);
        return response ()->json([
            'status'=> $delivery,
            'totalprice'=> $delivery,
        ]);
    } 
    public function UpdateStatusDelivery(Request $request)
    {
        $status_id=$request->input('status_id');
        $history = Delivery::find($status_id);
        $history->status = $request->input('status');
        $history->totalprice = $request->input('totalprice');

        $history->update();
        return redirect('managedelivery/cashieractivity')->with('success', 'Meetup point added');
    } 
// END OF CASHIER SECTION



// START FOR CUSTOMER SECTION

    // view page for customer delivery
    public function OrderInfo()
    {
        $locations = MeetupPoint::all();
        $deliveries = Delivery::all();
        $products = Inventory::all();
        $history = $deliveries->where('show_history', false);
        $itemList = $products->where('show_history', false);
        $listloc = $locations->where('show_history', false);

        return view('managedelivery.customeractivity', compact('deliveries', 'products', 'history', 'itemList','listloc'));
    }

    //add order item for customer
    public function AddOrder(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required|integer|min:1|max:10',
            'meetup_point_id' => 'required',
        ]);

        // Create a new instance of the Delivery model
        $delivery = new Delivery();
        $delivery->product_id = $validatedData['product_id'];
        $delivery->quantity = $validatedData['quantity'];
        $delivery->meetup_point_id = $validatedData['meetup_point_id'];

        // Save the new order
        $delivery->save();

        // Redirect back to the view or show a success message
        return redirect()->back()->with('success', 'Item added to cart successfully');
    }

// END OF CUSTOMER SECTION


// START FOR ADMIN SECTION

    //view meeetup location and order for admin
    public function CashierInfo()
{
    $meetupPoints = MeetupPoint::all();
    $orders = Delivery::all();
    $orders = $orders->where('show_history', false);
    $meetupPoints = $meetupPoints->where('show_history', false);
    
    return view('managedelivery.adminactivity', compact('meetupPoints', 'orders'));
    // return view('admin.delivery', compact('meetupPoints', 'employees', 'orders'));
} 

        // add assigned cashier
        public function Cashier($id)
    {
        $name = Delivery::find($id);
        return response ()->json([
            'name'=> $name,
        ]);
    } 
    public function AddCashier(Request $request)
    {
        $order_id=$request->input('order_id');
        $order = Delivery::find($order_id);
        $order->name = $request->input('name');

        $order->update();
        return redirect('managedelivery/adminactivity')->with('success', 'Meetup point added');
    } 


    //add meetup location for admin
    public function AddMeetupPoint(Request $request)
    {
        $meetupPoint = new MeetupPoint;
        $meetupPoint->location = $request->input('location');
        $meetupPoint->save();

        // return redirect('/admin/delivery')->with('success', 'Meetup point added');
        return redirect('managedelivery/adminactivity')->with('success', 'Meetup point added');
        
    }

    //delete meetup location for admin
    public function DeleteMeetupPoint($id)
    {
        $meetupPoint = MeetupPoint::find($id);
        if ($meetupPoint) {
            $meetupPoint->delete();
            return redirect('/managedelivery/adminactivity')->with('success', 'Meetup point deleted successfully');
        } else {
            return redirect('/managedelivery/viewcashier')->with('error', 'Meetup point not found');
        }
    }

}
// END OF ADMIN SECTION