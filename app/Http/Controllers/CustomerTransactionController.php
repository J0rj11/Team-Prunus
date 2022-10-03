<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CustomerTransactionController extends Controller
{
    public function index() : View {
        return view('cashier.customer-transaction');
    }
}
