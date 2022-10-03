<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\StoreAccountRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Role;

class AdminAccountController extends Controller
{
    public function index(Request $request) : View | JsonResponse {
        if ($request->ajax()) {
            return DataTables::of(User::query()->role(['cashier', 'admin']))
                ->addColumn('actions', function (User $user) {
                    return '<div>
                                <a href="' . route('admin.account.edit', $user) . '" class="btn btn-secondary btn-sm">View</a>
                                <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                                <form action="' . route('admin.account.destroy', $user) . '" method="POST" id="deleteForm">
                                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                                        ' . method_field('DELETE') . '
                                </form>
                             </div>';
                })
                ->addColumn('user_role', fn (User $user) => $user->roles()->first()->name)
                ->rawColumns(['actions'])
                ->make();
        }
        return view('admin.account.index');
    }


    public function store(StoreAccountRequest $request) : RedirectResponse {
        User::create($request->validated())->assignRole($request->role);

        return redirect()->back();
    }

    public function edit(User $account) : View {
        $roles = Role::all();
        return view('admin.account.edit', compact('account', 'roles'));
    }


    public function update(UpdateAccountRequest $request, User $account) : RedirectResponse {

        if ($request->has('password')) {
            $account->password = bcrypt($request->password);
        }

        $account->fill($request->except('password'))->save();

        return redirect()->back();
    }


    public function destroy(User $user) : RedirectResponse {
        $user->delete();

        return redirect()->back();
    }
}
