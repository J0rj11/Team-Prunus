<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delivery;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\TransactionItem;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminReportsController extends Controller
{
    public function index(): View
    {
        return view('admin.report');
    }


    public function productSoldReport(): JsonResponse
    {
        return DataTables::of(Report::query()->where('type', Report::$REPORT_TYPE_PRODUCTS))
            ->addColumn('created_at', fn (Report $report) => $report->created_at->format('m-D-Y'))
            ->addColumn('actions', function (Report $report) {
                return '<button class="btn btn-primary btn-sm">View</button>
                        <a href="' . route('admin.reports.download', $report) . '" class="btn btn-dark btn-sm" target="_blank">Download</a>';
            })
            ->rawColumns(['actions'])
            ->make();
    }


    public function downloadSoldProductReport(Report $report): BinaryFileResponse
    {
        return response()->download(public_path() . '/storage/reports/' . $report->file_name);
    }


    public function deliveryCompletedReport(): JsonResponse
    {
        $query = Report::query()
            ->where('type', Report::$REPORT_TYPE_DELIVERY);

        return Datatables::of($query)
            ->addColumn('created_at', fn (Report $report) => $report->created_at->format('m-D-Y'))
            ->addColumn('actions', function (Report $report) {
                return '<button class="btn btn-primary btn-sm">View</button>
                        <a href="' . route('admin.reports.download', $report) . '" class="btn btn-dark btn-sm" target="_blank">Download</a>';
            })
            ->rawColumns(['actions'])
            ->make();
    }


    public function expenseReports(): JsonResponse
    {
        $query = Report::query()
            ->where('type', Report::$REPORT_TYPE_EXPENSES);

        return Datatables::of($query)
            ->addColumn('created_at', fn (Report $report) => $report->created_at->format('m-D-Y'))
            ->addColumn('actions', function (Report $report) {
                return '<button class="btn btn-primary btn-sm">View</button>
                        <a href="' . route('admin.reports.download', $report) . '" class="btn btn-dark btn-sm" target="_blank">Download</a>';
            })
            ->rawColumns(['actions'])
            ->make();
    }


}
