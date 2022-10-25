@extends('layouts.admin')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>USERS FORM</h4>
                <p class="pl-2">User: {{ $account->id }}</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">User</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="py-4 pl-5" action="{{ route('admin.account.update', $account) }}"
                                            method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">FirstName</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        value="{{ old('first_name', $account->first_name) }}" name="first_name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">LastName</label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                        value="{{ old('last_name', $account->last_name) }}" name="last_name"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Username</label>
                                                <div class="col-sm-9">
                                                    <input type="text" value="{{ old('username', $account->username) }}"
                                                        name="username" class="form-control">
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
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="role">
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->name }}"
                                                                {{ $account->hasRole($role->name) ? 'selected' : null }}>
                                                                {{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <center class="mt-5 mb-5">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-md mr-5">Cancel</button>
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
