<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class AdminCategoryController extends Controller
{
    public function index(Request $request): View | JsonResponse
    {
        if ($request->ajax()) {
            return DataTables::of(Category::query())
                ->addColumn('actions', function (Category $category) {
                    return '<div>
                                <a href="' . route('admin.category.edit', $category) . '" class="btn btn-secondary btn-sm">View</a>
                                <button type="button" onclick="document.getElementById(' . "'deleteForm'" . ').submit()" class="btn btn-dark btn-sm">Delete</button>
                                <form action="' . route('admin.category.destroy', $category) . '" method="POST" id="deleteForm">
                                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                                        ' . method_field('DELETE') . '
                                </form>
                             </div>';
                })
                ->rawColumns(['actions'])
                ->make();
        }

        return view('admin.category.index');
    }


    public function store(StoreCategoryRequest $request) : RedirectResponse {
        Category::create($request->validated());

        return redirect()->back();
    }


    public function edit(Category $category) : View {
        return view('admin.category.edit', compact('category'));
    }



    public function update(UpdateCategoryRequest $request, Category $category) : RedirectResponse {
        $category->update($request->validated());

        return redirect()->back();
    }

    public function destroy(Category $category) : RedirectResponse { 
        $category->delete();

        return redirect()->back();
    }
}
