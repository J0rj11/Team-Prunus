<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delivery;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\TransactionItem;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class AdminReportsController extends Controller
{
    public function index(): View
    {
        return view('admin.report');
    }


    public function productSoldReport(): JsonResponse
    {
        return DataTables::of(TransactionItem::query()->with(['product', 'product.category'])->select('transactionItems.*'))
            ->addColumn('price', fn (TransactionItem $transactionItem) => '₱ ' . $transactionItem->price)
            ->make();
    }


    public function deliveryCompletedReport(): JsonResponse
    {
        $query = Delivery::query()
            ->with(['transaction', 'transaction.transactionItems', 'transaction.transactionItems.product']);

        return Datatables::of($query)
            ->addColumn('joinedItems', function (Delivery $delivery) {
                return collect($delivery->transaction->transactionItems)->map(
                    fn ($value) => $value->quantity . ' ' .  $value->product->product_name
                )->join(' , ');
            })
            ->addColumn('truck_number', fn (Delivery $delivery) => 'Truck # ' . $delivery->truck_number)
            ->addColumn('sum_price', fn (Delivery $delivery) => $delivery->transaction->transactionItems->sum('price'))
            ->make();
    }
}
