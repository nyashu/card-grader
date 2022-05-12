<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $customer = Customer::latest()->paginate(5);
        return view('backend.dashboard', compact('customer'));
    }
}
