@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit Product
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Product</a></li>
      <li class="active">Edit</li>
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
            <h3 class="box-title">Edit Product Information</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Title</label>

                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" value="{{$product->name}}" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select Product Category</label>

                <div class="col-sm-10">
                  <!-- /.form-group -->
                    <select name="scid" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select Service Category</option>
                      @foreach($subcategories as $s)
                        @if($s->id == $product->subcatgoryid)
                        <option value="{{ $s->id }}" selected>{{ $s->name }}</option>
                        @else
                      <option value="{{ $s->id }}">{{ $s->name }}</option>
                        @endif
                      @endforeach
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                    </select>

                  <!-- /.form-group -->

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                        <input type="number" step="any" name="price" class="form-control" placeholder="0.00" value="{{ $product->price }}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Image</label>

                <div class="col-sm-5">

                      <input type="file" name="img" id="exampleInputFile" required>

                      <p class="help-block">Photo size ratio 3:1 (example: 600*200)</p>

                </div>
                <div class="col-sm-5">
                  <img src="{{ asset('storage/ProductImg/'.$product->img)}}" alt="" style="height: 250px;" class="img-responsive">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product URL (Redirect)</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" name="purl" class="form-control" placeholder="www.example.com" value="{{$product->purl}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                  <textarea name="description" class="form-control" rows="5" id="comment" required>{{$product->description}}</textarea>
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
