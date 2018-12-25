@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Add New Sub Category
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">SubCategory</a></li>
      <li class="active">New</li>
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
            <h3 class="box-title">Child Category</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.subcategory.update', $subcategory->id) }}">
            @csrf
            @method('PATCH')
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">SubCategory Name</label>

                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" value="{{ $subcategory->name}}" required >
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select A Parent Category</label>

                <div class="col-sm-10">
                  <select name="main_category" class="form-control" required>
                    @foreach($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <!-- radio -->
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  @if($subcategory->status == 1)
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
                  @else
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios1" value="1">
                      Publish
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value="0" checked>
                      Disable
                    </label>
                  </div>
                  @endif
                </div>
              </div>
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
