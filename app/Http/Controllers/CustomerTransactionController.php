<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTransactionRequest;

class CustomerTransactionController extends Controller
{
    public function index(Request $request) : View | JsonResponse {
        if ($request->ajax()) {
            return DataTables::of(Transaction::query())
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


    public function store(StoreTransactionRequest $request) : RedirectResponse {
        Transaction::create($request->validated());

        return redirect()->back();
    }


    public function show(Transaction $transaction) : View {
        return view('cashier.transaction.show', compact('transaction'));
    }



    public function destroy(Transaction $transaction) : RedirectResponse {
        $transaction->delete();

        return redirect()->back();
    }
}
