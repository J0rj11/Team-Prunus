<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Models\Expense;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

class ExpenseController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Expense::query())
                ->make();
        }
        return view('cashier.report.create');
    }


    public function store(StoreExpenseRequest $request): RedirectResponse
    {
        Expense::create($request->validated());

        return redirect()->route('reports.index');
    }
}
