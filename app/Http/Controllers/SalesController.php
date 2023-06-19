<?php

namespace App\Http\Controllers;

use App\Models\PaymentTotal;
use App\Models\Sale;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Http\Request;


class SalesController extends Controller
{
    public function index()
    {
        $sales = PaymentTotal::all();

        return view('manageSales.salesFlow', ['sales' => $sales]);
    }

    public function create()
    {
        return view('manageSales.sales');
    }

    public function store(Request $request)
    {
        $total = PaymentTotal::create([
            'paymentTotal' => $request->input('paymentTotal'),
        ]);

        return redirect(route('manageSales.salesFlow'));
    }

    public function reportSale()
    {
        $chart_options = [
            'chart_title' => 'No. of Customers',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\PaymentTotal',
            'group_by_field' => 'subtotal',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('manageSales.reportSales', compact('chart1'));
    }
    public function delete($id)
    {
        // $total = PaymentTotal::destroy([
        //     'paymentTotal' => $id->input('paymentTotal'),
        // ]);

        // return redirect(route('manageSales.salesFlow'));
        $total=\App\Models\PaymentTotal::find($id);
        $total->delete($total);
        return redirect('/sales')->with('delete', 'Success Delete');
    }

}
