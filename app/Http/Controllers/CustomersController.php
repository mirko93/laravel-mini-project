<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {

        $customers = [
            'John Doe',
        ];

        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
