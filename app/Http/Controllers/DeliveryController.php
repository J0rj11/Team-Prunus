<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateDeliveryRequest;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            $query = Delivery::query()
                ->when(
                    $request->has('status'),
                    fn (Builder $query) => $query->where('status', $request->status),
                    fn (Builder $query) => $query->where('status', Delivery::$DELIVERY_STATUS_IDLE),
                )
                ->with('transaction');
            return DataTables::of($query)
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
        return view('cashier.delivery.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        $delivery->load('transaction', 'transaction.purchases', 'transaction.purchases.product');
        return view('cashier.delivery.show', compact('delivery'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Delivery $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        $delivery->update($request->validated());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();

        return redirect()->back();
    }
}
