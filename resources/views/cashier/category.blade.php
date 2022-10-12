@extends('layouts.app')

@section('content')
    <div class="sidebar-fixed main-panel overflow-auto">
        <div class="contentWrapper">
            <div class="row py-2">
                <h4>CATEGORY FORM</h4>
                <p class="pl-2">Category List</p>
            </div>
            <div class="col-12 grid-margin ">
                <div class="row">
                    <div class="csswrapper">
                        <div class="csstabs">
                            <div class="csstab">
                                <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                                
                                <label for="tab-2" class="csstab-label">Category List</label>
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

