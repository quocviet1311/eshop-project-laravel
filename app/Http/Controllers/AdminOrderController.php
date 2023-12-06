<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    function index()
    {
        $all_order = DB::table('orders')->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('orders.*', 'customers.name')->orderBy('orders.id', 'desc')->latest()->cursorPaginate(5);
        return view('admin.order.index', compact('all_order'));
    }
}
