@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Select Your Business Type
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">BusinessType</a></li>
      <li class="active">Select</li>
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
            <h3 class="box-title">Select Business Type</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.sbtype.store') }}">
            @csrf
            <div class="box-body">

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Business Type Title</label>

                <div class="col-sm-10">
                  <div class="form-group">
                    @foreach($btypes as $b)
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="sbtype[]" value="{{ $b->id }}">
                          {{ $b->name }}
                        </label>
                      </div>
                    @endforeach
                    </div>
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
