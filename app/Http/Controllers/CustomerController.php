<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Notifications\CustomerCreated;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::all()
        ]);
    }

    public function create()
    {
        return view('customers.create');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function store(CreateCustomerRequest $request)
    {
        $data = $request->validated();
        $customer =  new Customer();
        $customer->fill($data);
        if(!empty($data['pic'])){
            $customer->pic = $data['pic']->getClientOriginalName();
            $data['pic']->storeAs('public/customers', $data['pic']->getClientOriginalName());
        }
        $customer->save();

        $customer->notify(new CustomerCreated());
        return redirect()->route('customers.index')->with('success', 'Customer have been created');
    }

    public function update( Customer $customer, UpdateCustomerRequest $request)
    {
        $data = $request->validated();
        $customer->fill($data);
        if(!empty($data['pic'])){
            $customer->pic = $data['pic']->getClientOriginalName();
            $data['pic']->storeAs('public/customers', $data['pic']->getClientOriginalName());
        }
        $customer->save();
        return redirect()->back()->with('success', 'Customer have been updated');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer have been deleted');
    }
}
