<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\View\View;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\UpdateReservationRequest;

class ReservationController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Reservation::query()->with('user', 'purchases', 'purchases.product'))
                ->addColumn('name', fn (Reservation $reservation) => $reservation->user->first_name . ' ' . $reservation->user->last_name)
                ->addColumn('total', fn (Reservation $reservation) => $reservation->purchases->map(fn (Purchase $purchase) => $purchase->quantity * $purchase->product->purchase_price)->sum())
                ->addColumn('actions', function (Reservation $reservation) {
                    return '<div>
                        <a href="' . route('reservation.show', $reservation) . '"class="btn btn-secondary btn-sm">Process Order</a>
                        <form action="' . route('admin.reservation.approve', $reservation) . '" method="POST" id="approveForm">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            ' . method_field('PUT') . '
                        </form>
                      </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.reservation.index');
    }


    public function show(Reservation $reservation): View
    {
        $reservation->load('user', 'purchases', 'purchases.product');
        return view('cashier.reservation.edit', compact('reservation'));
    }


    public function update(UpdateReservationRequest $request, Reservation $reservation): RedirectResponse
    {
        $reservation->update($request->validated());

        return redirect()->back();
    }
}
