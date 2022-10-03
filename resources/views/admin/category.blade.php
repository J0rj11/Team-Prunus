@extends('layouts.admin')

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
                  <form class="ml-5 py-4">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Code</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" >
                    </div>
                  </div>
                  <center class="mt-5 mb-5">
                      <button type="button" class="btn btn-outline-primary btn-md mr-5">Cancel</button>
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
                  <form class="form-group row py-4 pl-5">
                    <div class="col">
                      <label>Search by</label>
                      <select class="form-control">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
                    <div class="col">
                      <label>Value</label>
                      <input class="typeahead" type="text" placeholder="">
                    </div>
                    <div class="col pt-4">
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                  </form>

                  <div class="card-body bg-transparent">
                    <div class="table-responsive">
                      <table class="table table-hover table-striped">
                        <thead class="color">
                          <tr>
                            <th>Code</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          <tr> 
                            <td>A1</td>
                            <td>Pipes</td>
                            <td>"Lorem ipsum dolor sit amet"</td>
                            <td>
                              <label class="btn btn-secondary btn-sm">View</label>
                              <label class="btn btn-dark btn-sm">Delete</label>
                            </td>
                          </tr>
                          
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

