@extends('layouts.admin')



@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>SUPPLIER: {{ $supplier->supplier_code }}</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" value="1" checked
                                    class="csstab-switch">
                                <label for="tab-1" class="csstab-label"><span
                                        x-text="id != null ? 'Edit' : 'Add'"></span> Supplier</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="ml-3 py-4 py-4" action="{{ route('admin.supplier.update', $supplier) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Supplier Code</label>
                                                        <div class="col-sm-9">
                                                            <input name="supplier_code" value="{{ old('supplier_code', $supplier->supplier_code) }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Contact</label>
                                                        <div class="col-sm-9">
                                                            <input name="contact" value="{{ old('contact', $supplier->contact) }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Supplier Name</label>
                                                        <div class="col-sm-9">
                                                            <input name="supplier_name" value="{{ old('supplier_name', $supplier->supplier_name) }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Address</label>
                                                        <div class="col-sm-9">
                                                            <input name="address" value="{{ old('address', $supplier->address) }}"
                                                                type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="pt-4 center">
                                                <button type="submit" class="btn btn-primary btn-md">Edit supplier</button>
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