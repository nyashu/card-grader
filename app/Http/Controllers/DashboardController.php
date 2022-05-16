<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $customer = Customer::latest()->paginate(5);
        return view('backend.dashboard', compact('customer'));
    }

    public function message(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        Message::create($validated);

        return back()->with('message', 'Message to site owner has been succesfully submitted');
    }

    public function showMessages()
    {
        $messages = Message::latest()->paginate(5);
        return view('backend.message', compact('messages'));
    }
}
