<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Jobs\NewDeliveryScheduleJob;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTransactionRequest;

class CustomerTransactionController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Transaction::query()->with('purchases.product')->withCount('purchases'))
                ->addColumn('total_sum', function (Transaction $transaction) {
                    return collect($transaction->purchases)->map(fn (Purchase $value) => $value->quantity * $value->product->price)->sum();
                })
                ->addColumn('payment_method', fn (Transaction $transaction) => $transaction->payment_method == 0 ? 'Credit' : 'Cash')
                ->addColumn('actions', function (Transaction $transaction) {
                    return '<div>
                        <a href="' . route('transaction.show', $transaction) . '" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('transaction.destroy', $transaction) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.transaction.index');
    }


    public function store(StoreTransactionRequest $request): RedirectResponse
    {
        $transaction = Transaction::create($request->validated() + ['transaction_identifier' => Str::random(), 'date' => now()]);

        if ($transaction->delivery_status == Transaction::$TRANSACTION_DELIVERY_DELIVER) {
            NewDeliveryScheduleJob::dispatch($transaction);
        }
        return redirect()->route('transaction.setup', $transaction);
    }


    public function setup(Transaction $transaction)
    {
        return view('cashier.transaction.setup', compact('transaction'));
    }

    public function show(Transaction $transaction): View
    {
        $transaction->load('purchases', 'purchases.product', 'purchases.product.category')
            ->loadCount('purchases');

        return view('cashier.transaction.show', compact('transaction'));
    }



    public function destroy(Transaction $transaction): RedirectResponse
    {
        $transaction->delete();

        return redirect()->back();
    }
}
