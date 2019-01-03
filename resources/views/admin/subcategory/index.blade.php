@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    All Sub Categories
    <small>preview of sub categories</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Sub Category</a></li>
    <li class="active">List</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- /.row -->
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Sub Category List</h3>

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
              <th>Sub Category Name</th>
              <th>Status</th>
              <th>Category</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Action</th>
            </tr>
            @foreach($subcategories as $c)
            <tr>
              <td>{{ $c->id }}</td>
              <td>{{ $c->name }}</td>
              <td>
                @if($c->status == 1)
                <span class="label label-success">Published</span>
                @else
                <span class="label label-warning">Disabled</span>
                @endif
              </td>
              <td>{{ $c->category->name }}</td>
              <td>{{ $c->created_at }}</td>
              <td>{{ $c->updated_at }}</td>
              <td>
                    <a href="{{ route('admin.subcategory.edit', $c->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-sm">Delete</a>
                    <form method="POST" action="{{ route('admin.subcategory.destroy', $c->id) }}">

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
      {{ $subcategories->links() }}
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
