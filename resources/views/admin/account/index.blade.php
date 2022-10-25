@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>USERS FORM</h4>
                <p class="pl-2">Add User</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add User</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="pt-4 pl-5" action="{{ route('admin.account.store') }}" method="POST">
                                            @csrf
                                            <div id="id01" class="delete-modal overflow-hidden">
                                                <span onclick="document.getElementById('id01').style.display='none'"
                                                    class="close-modal" title="Close Modal">×</span>
                                                <form class="delete-modal-content" action="/action_page.php">
                                                    <div class="modal-container">
                                                        <h4>Delete Account</h4>
                                                        <p>Are you sure you want to delete this account?</p>

                                                        <div class="clearfix">
                                                            <button type="button"
                                                                onclick="document.getElementById('id01').style.display='none'"
                                                                class="cancelbtn modal-button">Cancel</button>
                                                            <button type="button"
                                                                onclick="document.getElementById('id01').style.display='none'"
                                                                class="deletebtn modal-button">Delete</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">FirstName</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="{{ old('first_name') }}" name="first_name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">LastName</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="{{ old('last_name') }}" name="last_name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="{{ old('username') }}" name="username"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Role</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="role">
                                                        <option value="admin">Admin</option>
                                                        <option value="cashier">Cashier</option>
                                                        <option value="customer">Customer</option>
                                                    </select>
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
                                <label for="tab-2" class="csstab-label">User List</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="accountTable">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Role</th>
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
            $('#accountTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('admin.account.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'username',
                        name: 'username'
                    },
                    {
                        data: 'user_role',
                        name: 'user_role'
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
