@extends('layouts.app')

@section('content')
    <div class="sidebar-fixed main-panel">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CATEGORY FORM</h4>
                <p class="pl-2">Add Category</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                <label for="tab-1" class="csstab-label">Add Category</label>
                                <div class="csstab-content">

                                    <div class="card-body white-bg">
                                        <form class="ml-5 py-4" action="{{ route('category.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Code</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="category_code">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="category_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="description">
                                                </div>
                                            </div>
                                            <center class="mt-5 mb-5">
                                                <button type="button" class="btn btn-outline-primary btn-md mr-5">
                                                    Cancel
                                                </button>
                                                <button type="submit" class="btn btn-primary btn-md">Save</button>
                                            </center>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
                                <label for="tab-2" class="csstab-label">List Category</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">

                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped" id="categoryTable">
                                                    <thead class="color">
                                                    <tr>
                                                        <th>Code</th>
                                                        <th>Category Name</th>
                                                        <th>Description</th>
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
            $('#categoryTable').DataTable({
                serverSide: true,
                processing: true,
                ajax: "{{ route('category.index') }}",
                columns: [
                    {
                        data: 'category_code',
                        name: 'category_code'
                    },
                    {
                        data: 'category_name',
                        name: 'category_name'
                    },
                    {
                        data: 'description',
                        name: 'description'
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

