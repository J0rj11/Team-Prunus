<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request): View|JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Category::query())
                ->addColumn('actions', function (Category $category) {
                    return '<div>
                        <a href="' . route('category.show', $category) . '" class="btn btn-secondary btn-sm">View</a>
                    </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }
        return view('cashier.category');
    }


    public function store(StoreCategoryRequest $request) : RedirectResponse {
        Category::create($request->validated());

        return redirect()->back();
    }


    public function destroy(Category $category) : RedirectResponse {
        $category->delete();

        return redirect()->back();
    }
}
