@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>PRODUCT FORM</h4>
                <p class="pl-2">Add Product</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add Product</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="pt-4 pl-5" action="{{ route('admin.product.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Product Code</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="product_code">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Category</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-control" name="category_id">
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Product Name</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="product_name">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Quantity</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="quantity">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="description">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" name="price">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            </div>
                                            <div class="mt-5 pb-2 center">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-md mr-2">Cancel</button>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Product List</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                     
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="productTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Product Name</th>
                                                            <th>Description</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody> 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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



@push('scripts')
    <script type="text/javascript">
        $(() => {
            $('#productTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('admin.product.index') }}",
                columns: [
                    {
                        data: 'product_code',
                        name: 'product_code'
                    },
                    {
                        data: 'product_name',
                        name: 'product_name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'price',
                        name: 'price'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    }
                ],
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all"
                }]
            })
        })
    </script>
@endpush