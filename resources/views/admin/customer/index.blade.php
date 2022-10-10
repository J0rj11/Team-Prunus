@extends('layouts.admin')

@section('content')
    <div class="main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CUSTOMERS</h4>
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
                                        <form class="ml-3 pt-4" action="{{ route('admin.customer.store') }}" method="POST">
                                        @csrf
                                            <div class="row">
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">First name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('first_name') }}" name="first_name" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Middle name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('middle_name') }}" name="middle_name" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Last name</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('last_name') }}" name="last_name" type="text"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Email</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('email') }}" name="email"
                                                            type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Mobile</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('contact_number') }}" name="contact_number"
                                                            type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 row form-group">
                                                    <label class="col-md-4 col-form-label">Address</label>
                                                    <div class="col-md-8">
                                                        <input value="{{ old('address') }}" name="address" type="text"
                                                            class="form-control">
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
                                <input type="radio" name="css-tabs" id="tab-2" value="2" x-model="tab"
                                    class="csstab-switch">
                                <label for="tab-2" class="csstab-label">Customer List</label>
                                <div class="csstab-content">
                                    <div class="card white-bg">
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="customerTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>Code</th>
                                                            <th>Customer Name</th>
                                                            <th>Contact</th>
                                                            <th>Address</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <template x-for="(customer, index) in list" :key="customer.id">
                                                            <tr>
                                                                <td x-text="'C' + customer.id">C</td>
                                                                <td
                                                                    x-text="customer.last_name + ', ' + customer.first_name + ' ' + (customer.middle_name || '') ">
                                                                </td>
                                                                <td x-text="customer.mobile_number"></td>
                                                                <td x-text="customer.address"></td>
                                                                <td class="center">
                                                                    <a role="button" :href="'/customer/' + customer.id"
                                                                        class="btn btn-secondary btn-sm">View</a>
                                                                    <div role="button" class="btn btn-secondary btn-sm"
                                                                        @click.prevent="toUpdateForm(customer, index)">
                                                                        Update</div>
                                                                    <div role="button" class="btn btn-dark btn-sm"
                                                                        @click.prevent="dbDelete(customer.id, index)">
                                                                        Delete</div>
                                                                </td>
                                                            </tr>
                                                        </template>
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
