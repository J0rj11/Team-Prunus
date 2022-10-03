<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class ExpenseController extends Controller
{
    public function index(Request $request): View | JsonResponse {
        if ($request->ajax()) {
            return DataTables::of(Expense::query())
               ->make();
        }
        return view('cashier.delivery');
    }
}
