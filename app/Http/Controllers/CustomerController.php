<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(User::query()->role('customer'))
                ->addColumn('name', fn (User $user) => $user->first_name . ' ' . $user->last_name)
                ->addColumn('actions', function (User $user) {
                    return '<div>
                        <a href="' . route('customer.show', $user) . '" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('customer.destroy', $user) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                ' . method_field('DELETE') . '
                        </form>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.customer.index');
    }



    public function show(User $customer)
    {
        $customer->load('reservations', 'reservations.purchases', 'reservations.purchases.product');
        return view('cashier.customer.show', compact('customer'));
    }



    public function destroy(User $customer): RedirectResponse
    {
        $customer->delete();

        return redirect()->back();
    }
}
