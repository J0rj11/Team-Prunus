<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            $query = Transaction::query()
                ->where('payment_method', Transaction::$TRANSACTION_PAYMENT_CREDIT)
                ->withCount('transactionItems')
                ->withSum('transactionItems', 'price');
            return DataTables::of($query)
                ->addColumn('payment_method', fn (Transaction $transaction) => $transaction->payment_method == 0 ? 'Credit' : 'Cash')
                ->addColumn('actions', function (Transaction $transaction) {
                    return '<div>
                                <a href="' . route('balance.show', $transaction) . '" class="btn btn-secondary btn-sm">View</a>
                                <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                                <form action="' . route('balance.destroy', $transaction) . '" method="POST" id="deleteForm">
                                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                                        ' . method_field('DELETE') . '
                                </form>
                              </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('cashier.balance.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Transaction  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $balance)
    {
        $balance->load('transactionItems', 'transactionItems.product', 'transactionItems.product.category')
            ->loadCount('transactionItems')
            ->loadSum('transactionItems', 'price');
        return view('cashier.balance.show', compact('balance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Transaction  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $balance)
    {
        $balance->delete();

        return redirect()->back();
    }
}