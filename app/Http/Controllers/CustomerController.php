<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customerList = Customer::whereBetween('customer_id', [41, 60])->get();

        return view('welcome', compact('customerList'));
    }
}
