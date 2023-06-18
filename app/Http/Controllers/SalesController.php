<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;


class SalesController extends Controller
{
    public function index()
    {
        $Cashiers = Sale::all();

        return view('manageSales.sales', ['cashier' => $Cashiers]);
    }

    public function reportSale()
    {
        $chart_options = [
            'chart_title' => 'No. of Customers',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Sale',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);

        return view('manageSales.reportSales', compact('chart1'));
    }
}
