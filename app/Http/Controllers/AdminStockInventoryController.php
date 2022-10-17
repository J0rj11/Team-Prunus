<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\PurchaseProduct;

class AdminStockInventoryController extends Controller
{

    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Product::query()->with('category'))
                ->addColumn('total', fn (Product $purchaseProduct) => $purchaseProduct->quantity * $purchaseProduct->purchase_price)
                ->addColumn('actions', function (Product $purchaseProduct) {
                    return '<div>
                            <a href="' . route('admin.stock-inventory.edit', $purchaseProduct) . '" class="btn btn-secondary btn-sm">View</a>
                            <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                            <form action="' . route('admin.stock-inventory.destroy', $purchaseProduct) . '" method="POST" id="deleteForm">
                                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                                    ' . method_field('DELETE') . '
                            </form>
                          </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('admin.stockInventory.index');
    }



    public function create(): View
    {
        $categories = Category::all();
        return view('admin.stockInventory.create', compact('categories'));
    }


    public function store(StoreProductRequest $request): RedirectResponse
    {
        $product = Product::create($request->except('purchased_date'));
        $product->purchases()->create([
            'total' => $product->quantity * $product->purchase_price,
            'purchased_date' => $request->date('purchased_date'),
        ]);
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
