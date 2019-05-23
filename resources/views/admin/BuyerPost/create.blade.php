@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Create A Buyer Request
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">BuyerRequest</a></li>
      <li class="active">Create</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">

      <!-- right column -->
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Add Product Request Information</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.request.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Request Title</label>

                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>

                <div class="col-sm-5">

                        <input type="number" name="quantity" class="form-control" placeholder="0.00" >

                </div>
                <div class="col-sm-5">
                    <select name="qtype" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select Quantity Type</option>

                      <option value="Piece(s)">Piece(s)</option>
                      <option value="Pack(s)">Pack(s)</option>
                      <option value="Pair">Pair</option>
                      <option value="Pound">Pound</option>
                      <option value="Square Meter">Square Meter</option>
                      <option value="Metric Ton">Metric Ton</option>
                      <!-- <option value="Meter">Meter</option>
                      <option value="Meter">Meter</option> -->


                      <!-- <option disabled="disabled">California (disabled)</option> -->
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                <div class="col-sm-10">

                      <input type="file" name="img" id="exampleInputFile" >

                      <p class="help-block">Photo size ratio 1:1 (example: 600*200)</p>

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Expire Date</label>

                <div class="col-sm-10">
                      <!-- <div class="input-group">
                        <span class="input-group-addon">http://</span> -->
                        <input type="date" name="date" class="form-control" placeholder="" >
                      <!-- </div> -->
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Comment</label>

                <div class="col-sm-10">
                  <textarea name="comment" class="form-control" rows="5" id="comment" placeholder="looking for girl dresses and shoes." required></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select Product Category</label>

                <div class="col-sm-10">
                  <!-- /.form-group -->
                    <select name="scid" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select product Category</option>
                      @foreach($subcategories as $s)
                      <option value="{{ $s->id }}">{{ $s->name }}</option>
                      @endforeach
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                    </select>

                  <!-- /.form-group -->

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Contact Link</label>

                <div class="col-sm-10">
                  <input type="text" name="link" class="form-control" id="inputEmail3" placeholder="" required>
                </div>
              </div>


              <!-- radio -->
              <!-- <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios1" value="1" checked>
                    Publish
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="status" id="optionsRadios2" value="0">
                    Disable
                  </label>
                </div>
                </div>
              </div> -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="button" class="btn btn-default" onclick="history.back()">Cancel</button>
              <button type="submit" class="btn btn-info pull-right">Save</button>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
        <!-- /.box -->

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

@endsection
