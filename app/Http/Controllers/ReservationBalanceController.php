<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Reservation;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateReservationBalanceRequest;

class ReservationBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $query = Reservation::query()
            ->where('payment_type', Reservation::$RESERVATION_PAYMENT_TYPE_PARTIAL)
            ->where('remaining_balance', '!=', 0)
            ->with('user', 'purchases.product')
            ->withCount('purchases');
        return DataTables::of($query)
            ->addColumn('total_sum', function (Reservation $reservation) {
                return collect($reservation->purchases)->map(fn (Purchase $purchase) => $purchase->quantity * $purchase->product->price)->sum();
            })
            ->addColumn('name', fn (Reservation $reservation) => $reservation->user->first_name . ' ' . $reservation->user->last_name)
            ->addColumn('actions', function (Reservation $reservation) {
                return '<div>
                            <a href="' . route('reservation-balance.show', $reservation) . '" class="btn btn-secondary btn-sm">View</a>
                            <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                            <form action="' . route('reservation-balance.destroy', $reservation) . '" method="POST" id="deleteForm">
                                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                                    ' . method_field('DELETE') . '
                            </form>
                          </div>';
            })
            ->rawColumns(['actions'])
            ->make();
    }

    /**
     * Display the specified resource.
     *
     * @param  Reservation  $reservationBalance
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservationBalance): View
    {
        $reservationBalance->load('purchases', 'user', 'purchases.product', 'purchases.product.category')
            ->loadCount('purchases');
        return view('cashier.balance.reservation-show', compact('reservationBalance'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Reservation  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReservationBalanceRequest $request, Reservation $reservationBalance): RedirectResponse
    {
        if ($request->amount > $reservationBalance?->remaining_balance) {
            return redirect()->back()->withErrors(['message' => 'Cannot deposit larger than remaining balance.']);
        }
        $reservationBalance->update(['remaining_balance' => ($reservationBalance->remaining_balance - $request->amount)]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Reservation $reservationBalance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservationBalance): RedirectResponse
    {
        $reservationBalance->delete();

        return redirect()->back();
    }
}
