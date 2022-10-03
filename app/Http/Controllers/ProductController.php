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
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('product.destroy', $product) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
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
