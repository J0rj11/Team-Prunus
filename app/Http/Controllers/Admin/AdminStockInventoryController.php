<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Purchase;

class AdminStockInventoryController extends Controller
{

    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Product::query()->with('category')->select('products.*'))
                ->addColumn('total', fn (Product $stockInventory) => $stockInventory->quantity * $stockInventory->price)
                ->addColumn('actions', function (Product $stockInventory) {
                    return '<div>
                            <a href="' . route('admin.stockInventory.edit', $stockInventory) . '" class="btn btn-secondary btn-sm">View</a>
                            <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                            <form action="' . route('admin.stockInventory.destroy', $stockInventory) . '" method="POST" id="deleteForm">
                                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                                    ' . method_field('DELETE') . '
                            </form>
                          </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        $monthlyPurchasedRecords = Product::selectRaw('DATE_FORMAT(created_at, "%Y") as year, DATE_FORMAT(created_at, "%M") as month')
            ->groupBy('year', 'month')
            ->get();

        return view('admin.stockInventory.index', compact('monthlyPurchasedRecords'));
    }


    public function purchasedRecords(Request $request): View
    {
        $purchasedProducts = Purchase::with('product')
            ->get();
        return view('admin.stockInventory.purchaseDetails', compact('purchasedProducts'));
    }


    public function create(): View
    {
        $categories = Category::all();
        return view('admin.stockInventory.create', compact('categories'));
    }


    public function store(StoreProductRequest $request): RedirectResponse
    {
        Product::create($request->except('purchased_date'));
        return redirect()->back();
    }


    public function edit(Product $stockInventory): View
    {
        $categories = Category::all();
        return view('admin.stockInventory.edit', compact('stockInventory', 'categories'));
    }

    public function update(UpdateProductRequest $request, Product $stockInventory): RedirectResponse
    {
        $stockInventory->update($request->validated());

        return redirect()->back();
    }


    public function destroy(Product $stockInventory): RedirectResponse
    {
        $stockInventory->delete();

        return redirect()->back();
    }
}
