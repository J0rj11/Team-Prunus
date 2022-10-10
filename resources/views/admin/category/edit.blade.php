@extends('layouts.admin')



@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CATEGORY FORM</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">

                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" value="1" checked
                                    class="csstab-switch">
                                <label for="tab-1" class="csstab-label"><span></span> Category</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="ml-5 py-4" method="POST" action="{{ route('admin.category.update', $category) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Code</label>
                                                <div class="col-sm-9">
                                                    <input name="category_code"
                                                        value="{{ old('category_code', $category->category_code) }}"
                                                        type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-9">
                                                    <input name="category_name"
                                                        value="{{ old('category_name', $category->category_name) }}"
                                                        type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea name="description" class="form-control">{{ old('description', $category->description) }}</textarea>
                                                </div>
                                            </div>

                                            <div class="pt-4 center">
                                                <button type="submit" class="btn btn-primary btn-md">Add category</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
