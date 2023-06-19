<?php

namespace App\Http\Controllers;

use App\Models\PaymentTotalModel;
use Illuminate\Http\Request;

class PaymentTotalController extends Controller
{
    //
    public function index()
    {
        $payment_total = PaymentTotalModel::all();
        // dd($payment_total);
        return view('manageSales.sales', ['payment_total' => $payment_total]);
    }
}
