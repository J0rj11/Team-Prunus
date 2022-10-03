<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Supplier\UpdateSupplierRequest;
use App\Http\Requests\Supplier\StoreSupplierRequest;

class AdminSupplierController extends Controller
{
    public function index(Request $request): JsonResponse | View
    {
        if ($request->ajax()) {
            return DataTables::of(Supplier::query())
                ->addColumn('actions', function (Supplier $supplier) {
                    return '<div>
                        <a href="' . route('admin.supplier.edit', $supplier) . '" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('admin.supplier.destroy', $supplier) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('admin.supplier.index');
    }



    public function store(StoreSupplierRequest $request) : RedirectResponse {
        Supplier::create($request->validated());

        return redirect()->back();
    }


    public function edit(Supplier $supplier) : View {
        return view('admin.supplier.edit', compact('supplier'));
    }

    public function update(UpdateSupplierRequest $request, Supplier $supplier) : RedirectResponse {
        $supplier->update($request->validated());

        return redirect()->back();
    }


    public function destroy(Supplier $supplier) : RedirectResponse {
        $supplier->delete();

        return redirect()->back();
    }
}
