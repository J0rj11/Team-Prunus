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
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class AdminProductController extends Controller
{
    
    public function index(Request $request): View | JsonResponse {
        if ($request->ajax()) {
            return DataTables::of(Product::query())
                ->addColumn('actions', function (Product $product) {
                    return '<div>
                        <a href="' . route('admin.product.edit', $product) . '" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('admin.product.destroy', $product) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('admin.product.index', [
            'categories' => Category::all(),
        ]);
    }



    public function store(StoreProductRequest $request) : RedirectResponse {
        Product::create($request->validated());

        return redirect()->back();
    }


    public function edit(Product $product) : View {
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }


    public function update(UpdateProductRequest $request, Product $product) : RedirectResponse {
        $product->update($request->validated());

        return redirect()->back();
    }




    public function destroy(Product $product) : RedirectResponse {
        $product->delete();

        return redirect()->back();
    }
}
 