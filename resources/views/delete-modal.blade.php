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
                                <label for="tab-2" class="csstab-label">List User</label>
                                <div class="csstab-content">
                                    <div class="card-body white-bg">
                                        <form class="form-group row py-4 pl-5">
                                            <div class="col">
                                                <label class="mb-2">Search by</label>
                                                <select class="form-control">
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                    <option></option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label class="mb-2">Value</label>
                                                <input class="typeahead" type="text">
                                            </div>
                                            <div class="col pt-4-5">
                                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                                            </div>
                                        </form>

                                        <div class="card-body bg-transparent">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-striped">
                                                    <thead class="color">
                                                        <tr>
                                                            <th>User ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Role</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>A1</td>
                                                            <td>PVC Pipe #2</td>
                                                            <td>"Lorem ipsum dolor sit amet"</td>
                                                            <td>55</td>
                                                            <td>
                                                                <label class="btn btn-secondary btn-sm">Edit</label>
                                                                <button class="btn btn-dark btn-sm "
                                                                    onclick="document.getElementById('id01').style.display='block'">Delete</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>


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

    </div>
    </div>



    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection
