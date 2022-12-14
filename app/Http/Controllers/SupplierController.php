<?php

namespace App\Http\Controllers;

use App\Http\Requests\Supplier\StoreSupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller
{

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Supplier::query())
                ->addColumn('actions', function (Supplier $supplier) {
                    return '<div>
                        <a href="' . route('supplier.show', $supplier) . '" class="btn btn-secondary btn-sm">View</a>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('cashier.supplier');
    }


    public function store(StoreSupplierRequest $request): RedirectResponse
    {
        Supplier::create($request->validated());

        return redirect()->back();
    }

    public function show(Supplier $supplier) : View {
        return view('admin.adminDashboard', compact('supplier'));
    }



    public function destroy(Supplier $supplier) : RedirectResponse {
        $supplier->delete();

        return redirect()->back();
    }
}
