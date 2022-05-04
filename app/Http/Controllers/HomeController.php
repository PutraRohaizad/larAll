<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'customers' => Customer::all(),
            'orders' => Order::all()
        ]);
    }
}
