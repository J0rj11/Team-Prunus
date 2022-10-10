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
            $expenseQuery = Expense::query()
                ->when($request->has('created_at'), fn ($query) => $query->whereDate('created_at', $request->date('created_at')));
            return DataTables::of($expenseQuery)->make();
        }
        return view('cashier.delivery');
    }
}
