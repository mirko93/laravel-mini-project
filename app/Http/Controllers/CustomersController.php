<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {

        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('customer.create', compact('companies'));
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        Customer::create($data);

        return redirect('customers');

    }
}
