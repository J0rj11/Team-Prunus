<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query()
            ->whereHas('purchases')
            ->with('category')
            ->addSelect([
                'sold_products_count' => Purchase::whereColumn('product_id', 'products.id')
                    ->selectRaw('sum(quantity) as sold_products_count')
            ])
            ->get();

        return view('cashier.inventory', compact('products'));
    }
}
