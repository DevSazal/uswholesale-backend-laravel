@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    All Product List
    <small>preview of supplier products</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Product</a></li>
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
          <h3 class="box-title">Product List</h3>

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
              <th>Product Name</th>
              <th>Price</th>
              <th>Category</th>
              <th>Image</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Action</th>
            </tr>
            @foreach($products as $p)
            <tr>
              <td>{{ $p->id }}</td>
              <td>{{ $p->name }}</td>
              <td>
                $p->price
              </td>
              <td>{{ $p->subcategory->name }}</td>
              <td>{{ $p->img }}</td>
              <td>{{ $p->created_at }}</td>
              <td>{{ $p->updated_at }}</td>
              <td>
                    <a href="{{ route('admin.product.edit', $p->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-sm">Delete</a>
                    <form method="POST" action="{{ route('admin.product.destroy', $p->id) }}">

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
      {{ $products->links() }}
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
