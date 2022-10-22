@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CUSTOMER: {{ $customer->id }}</h4>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">

                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" value="1" checked
                                    class="csstab-switch">
                                <label for="tab-1" class="csstab-label"><span
                                        x-text="id != null ? 'Edit' : 'Register'"></span> Customer</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">

                                        <form class="ml-3 py-4" action="{{ route('admin.customer.update', $customer) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">First name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('first_name', $customer->first_name) }}"
                                                            name="first_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Middle name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('middle_name', $customer->middle_name) }}"
                                                            name="middle_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Last name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('last_name', $customer->middle_name) }}"
                                                            name="last_name" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Mobile</label>
                                                    <div class="col-md-8">
                                                        <input
                                                            value="{{ old('contact_number', $customer->contact_number) }}"
                                                            name="contact_number" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Address</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('address', $customer->address) }}"
                                                            name="address" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-4 center">
                                                <button type="submit" class="btn btn-primary btn-md">Update client</button>
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


@push('scripts')
    <script type="text/javascript">
        $(() => {
            $('#customerTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('admin.customer.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'contact_number',
                        name: 'contact_number'
                    },
                    {
                        data: 'address',
                        name: 'address'
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
