<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{

    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Product::query())
                ->addColumn('actions', function (Product $product) {
                    return '<div>
                        <a href="' . route('product.show', $product) . '" class="btn btn-secondary btn-sm">View</a>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.product', [
            'categories' => Category::all(),
        ]);
    }



    public function store(StoreProductRequest $request) : RedirectResponse {
        Product::create($request->validated());

        return redirect()->back();
    }



    public function destroy(Product $product) : RedirectResponse {
        $product->delete();

        return redirect()->back();
    }
}
