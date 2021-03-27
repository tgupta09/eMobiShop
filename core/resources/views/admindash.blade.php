@extends('layoutmcp')

@section('title','AdminDashboard')

@section('content')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 p-1 text-center text-primary">
                <div style="border: 2px solid black;">
                <h1>{{$is_submit}}<br>Submitted</h1></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 p-1 text-center text-success">
                <div style="border: 2px solid black;">
                    <h1>{{$is_publish}}<br>Published</h1></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>User</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyid"></tbody>
                </table>
            </div>
        </div>

        <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Product Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div id="alertmsg"></div>
        <div class="modal-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Name" id="nameid" name="name">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Brand</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Brand" id="brandid" name="brand">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Category</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Category" id="categoryid" name="category">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Sku</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Sku" id="skuid" name="sku">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Price</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Price" id="priceid" name="price">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Description</span>
                  </div>
                  <textarea id="descriptionid" name="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="publishbtnid">Publish</button>
            <button type="button" class="btn btn-danger" id="rejectbtnid">Reject</button>
        </div>
        
      </div>
    </div>
  </div>
@endsection