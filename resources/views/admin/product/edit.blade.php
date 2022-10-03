@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>PRODUCT: {{ $product->product_code }}</h4>
                <p class="pl-2">Add Product</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add/Edit Product</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="py-4 pl-5" action="{{ route('admin.product.update', $product) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Product Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="{{ old('product_code', $product->product_code) }}" name="product_code">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="{{ old('product_name', $product->product_name) }}" name="product_name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Price</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" value="{{ old('price', $product->price) }}" name="price">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="category_id">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : null }}>
                                                                {{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Quantity</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" value="{{ old('quantity', $product->quantity) }}" name="quantity" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="{{ old('description', $product->description) }}" name="description">
                                                </div>
                                            </div>
                                            <center class="mt-5 mb-5">
                                                <a href="{{ route('admin.product.index') }}" class="btn btn-outline-primary btn-md mr-5">
                                                    Cancel
                                                </a>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
                                            </center>
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