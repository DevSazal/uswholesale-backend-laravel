@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    All Business Type
    <small>preview of business type</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">BusinessType</a></li>
    <li class="active">All</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Type List</h3>

          <!-- <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div> -->
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Business Type Title</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Action</th>
            </tr>
            @foreach($btypes as $b)
            <tr>
              <td>{{ $b->id }}</td>
              <td>{{ $b->name }}</td>
              <td>{{ $b->created_at }}</td>
              <td>{{ $b->updated_at }}</td>
              <td>
                    <a href="{{ route('admin.btype.edit', $b->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-sm">Delete</a>
                    <form method="POST" action="{{ route('admin.btype.destroy', $b->id) }}">

                    @method('DELETE')
                    @csrf

                    </form>
              </td>
            </tr>
            @endforeach

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      {{ $btypes->links() }}
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
