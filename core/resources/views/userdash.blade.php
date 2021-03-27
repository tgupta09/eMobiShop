@extends('layoutcp')

@section('title','UserDashboard')

@section('content')
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 p-1 text-center text-primary">
                <div style="border: 2px solid black;">
                <h1>{{$is_submit}}<br>Submitted</h1></div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 p-1 text-center text-success">
                <div style="border: 2px solid black;">
                    <h1>{{$is_publish}}<br>Published</h1></div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 p-1 text-center text-danger">
                <div style="border: 2px solid black;">
                    <h1>{{$is_reject}}<br>Rejected</h1></div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 p-1 text-center text-secondary">
                <div style="border: 2px solid black;">
                    <h1>{{$is_draft}}<br>Draft</h1></div>
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
                            <th>Sku</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyid"></tbody>
                </table>
            </div>
        </div>
        
        <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div id="editalertmsg"></div>
            <form id="editproductformid" name="editproductform">
                @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Name" id="editnameid" name="editname">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Brand</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Brand" id="editbrandid" name="editbrand">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Category</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Category" id="editcategoryid" name="editcategory">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Sku</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Sku" id="editskuid" name="editsku">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Price</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter Price" id="editpriceid" name="editprice">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Description</span>
                  </div>
                  <textarea id="editdescriptionid" name="editdescription" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                </div>
              </form>
                <form id="imgform">
                <img id="imgthumbid" style="height: 350px; width:350px;border:2px solid grey;" class="mb-3">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Image Upload</span>
                  </div>
                  <input type="file" class="form-control" id="editimageid" name="editimage">
                </div>
                </form>
              <button class="btn btn-primary btn-block" id="editdraftid">Save Draft</button>
              <button class="btn btn-success btn-block" id="editsubmitproductid">Submit Product</button>
        </div>
        
      </div>
    </div>
  </div>
@endsection