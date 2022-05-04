<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders.index', [
            'orders' => Order::all()
        ]);
    }

    public function create()
    {
        return view('orders.create',[
            'customers' => Customer::isActive()->get()
        ]);
    }

    public function edit(Order $order)
    {
        return view('orders.edit',[
            'order' => $order,
            'customers' => Customer::isActive()->get(),
        ]);
    }

    public function store(CreateOrderRequest $request)
    {
        $data = $request->validated();
        Order::create($data);
        return redirect()->route('orders.index')->with('success', 'Order have been created');
    }

    public function update(Order $order, UpdateOrderRequest $request)
    {
        $data = $request->validated();
        $order->update($data);
        return redirect()->back()->with('success', 'Order have been updated');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order have been deleted');
    }
}
