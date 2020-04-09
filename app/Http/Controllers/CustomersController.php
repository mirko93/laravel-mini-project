<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    // authentication - protect the viewing of private information
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customer.create', compact('companies', 'customer'));
    }

    public function store()
    {

        Customer::create($this->validateRequest());

        return redirect('customers');

    }

    public function show(Customer $customer)
    {
        // firstOrFail() fixed 404 | Not Found
        // $customer = Customer::where('id', $customer)->firstOrFail();

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {

        $companies = Company::all();

        return view('customer.edit', compact('customer', 'companies'));
    }

    public function update(Customer $customer) 
    {

        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }
}
