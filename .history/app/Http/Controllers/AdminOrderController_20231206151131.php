<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    function manage_order(){
        $all_order = DB::table('orders')->join('customers','orders.customer_id','=','customers.customer_id')
        ->select('')
    }
}
