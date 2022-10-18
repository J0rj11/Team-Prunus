<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Purchase;
use App\Models\ReservationItem;
use App\Models\TransactionItem;

class AdminStockInventoryController extends Controller
{

    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Product::query()->with('category'))
                ->addColumn('total', fn (Product $purchaseProduct) => $purchaseProduct->quantity * $purchaseProduct->price)
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

        $monthlyPurchasedRecords = Product::selectRaw('DATE_FORMAT(created_at, "%Y") as year, DATE_FORMAT(created_at, "%M") as month')
            ->groupBy('year', 'month')
            ->get();

        return view('admin.stockInventory.index', compact('monthlyPurchasedRecords'));
    }


    public function purchasedRecords(Request $request): View
    {
        // $reservationProductsPurchased = ReservationItem::query()
        //     ->with('product', 'product.category')
        //     ->whereYear('created_at', $request->date('year')->format('Y'))
        //     ->whereMonth('created_at', $request->date('month')->format('m'))
        //     ->get();

        // $transactionProductPurchased = TransactionItem::query()
        //     ->with('product', 'product.category')
        //     ->whereYear('created_at', $request->date('year')->format('Y'))
        //     ->whereMonth('created_at', $request->date('month')->format('m'))
        //     ->get();

        $purchasedProducts = Purchase::with('product')
            ->groupBy('id')
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
