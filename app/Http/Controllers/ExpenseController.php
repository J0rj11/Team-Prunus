<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Expense;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Exports\ExpenseReportExport;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreExpenseRequest;

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


    public function generateExpenseReport(Excel $excel): RedirectResponse
    {
        $expenseExcelReportName = 'ExpenseReport-' . now()->format('m-D-Y') . '.xlsx';

        $excel->store(new ExpenseReportExport, 'reports/' . $expenseExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $expenseExcelReportName, 'type' => Report::$REPORT_TYPE_EXPENSES]);

        return redirect()->back();
    }
}
