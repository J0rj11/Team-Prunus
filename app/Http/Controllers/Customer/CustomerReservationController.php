<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CustomerReservationController extends Controller
{

    public function index(): View
    {
        return view('customer.reservationForm');
    }
}
