<?php

namespace App\Http\Controllers\Admin;

use App\Models\Delivery;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class AdminDeliveryController extends Controller
{

    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Delivery::query()->where('status', Delivery::$DELIVERY_STATUS_IDLE)->with('transaction')->select('deliveries.*'))
                ->addColumn('actions', function (Delivery $delivery) {
                    return '<div>
                        <a href="' . route('delivery.show', $delivery) . '" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('delivery.destroy', $delivery) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
                      </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('admin.delivery.index');
    }



    public function show(Delivery $delivery): View
    {
        $delivery->load([
            'transaction',
            'transaction.transactionItems',
            'transaction.transactionItems.product',
            'transaction.transactionItems.product.category'
        ]);

        return view('admin.delivery.show', compact('delivery'));
    }
}
