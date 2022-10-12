<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Reservation::query()->where('is_approved', true)->with('user'))
                ->addColumn('name', fn (Reservation $reservation) => $reservation->user->first_name . ' ' . $reservation->user->last_name)
                ->addColumn('actions', function (Reservation $reservation) {
                    return '<div>
                        <button type="button" onclick="document.getElementById(' . "'approveForm'" . ').submit()" class="btn btn-secondary btn-sm">Approve</button>
                        <button type="button" onclick="document.getElementById(' . "'declineForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('admin.reservation.decline', $reservation) . '" method="POST" id="declineForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('PUT') . '
                        </form>
                        <form action="' . route('admin.reservation.approve', $reservation) . '" method="POST" id="approveForm">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            ' . method_field('PUT') . '
                        </form>
                      </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.reservation');
    }
}
