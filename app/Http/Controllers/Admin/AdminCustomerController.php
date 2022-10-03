<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;

class AdminCustomerController extends Controller
{
    public function index(Request $request): View | JsonResponse {
        if ($request->ajax()) {
            return DataTables::of(User::query()->role('customer'))
                ->addColumn('actions', function (User $user) {
                    return '<div>
                        <a href="'. route('admin.customer.edit', $user) .'" class="btn btn-secondary btn-sm">View</a>
                        <button type="button" onclick="document.getElementById('. "'deleteForm'". ').submit()" class="btn btn-dark btn-sm">Delete</button>
                        <form action="' . route('admin.customer.destroy', $user) . '" method="POST" id="deleteForm">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                '. method_field('DELETE') .'
                        </form>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('admin.customer.index');
    }


    public function store(StoreCustomerRequest $request) : RedirectResponse {
        User::create($request->validated() + ['name' => $request->first_name. ' '. $request->last_name, 'password' => bcrypt('password')])
            ->assignRole('customer');

        return redirect()->route('admin.customer.index');
    }


    public function edit(User $customer) : View {
        return view('admin.customer.edit', compact('customer'));
    }


    public function update(UpdateCustomerRequest $request, User $customer) : RedirectResponse {
        $customer->update($request->validated());

        return redirect()->back();
    }


    public function destroy(User $customer) : RedirectResponse {
        $customer->delete();

        return redirect()->back();
    }
}
