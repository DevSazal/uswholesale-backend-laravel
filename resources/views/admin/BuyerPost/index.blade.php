@extends('layouts.admin')
@section('title', 'Buyer Product Request List- ')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    All Buyer Request
    <small>preview of buyers request</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">BuyerRequest</a></li>
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
          <h3 class="box-title">Buyer Request List</h3>

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
              <th>Request Title</th>
              <th>Quantity</th>
              <th>Expire</th>
              <th>Left:</th>

              <th>Category</th>
              <th>Image</th>
              <th>Created</th>
              <th>Action</th>
            </tr>
            @forelse($posts as $p)
            <tr>
              <td>{{ $p->id }}</td>
              <td>{{ $p->title }}</td>
              <td>
                {{$p->quantity}} {{$p->qtype}}
              </td>
              <td>{{ $p->expire }}</td>
              <td>
              <?php
              // $date1 = new DateTime($p->created_at);
              $date1 = new DateTime(date('Y-m-d H:i:s'));
              $date2 = new DateTime($p->expire);
              echo $date1->diff($date2)->format("%d Day %h Hour");
               ?></td>

              <td>{{ $p->subcategory->name }}</td>
              <td><img src="{{ asset('storage/ProductImg/'.$p->img) }}" alt="" style="height: 30px;"/></td>
              <td>{{ $p->created_at }}</td>
              <td>
                    <a href="{{ route('admin.request.edit', $p->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-sm">Delete</a>
                    <form method="POST" action="{{ route('admin.request.destroy', $p->id) }}">

                    @method('DELETE')
                    @csrf

                    </form>
              </td>
            </tr>
            @empty
            <tr>
              <td class="text-center" colspan="8">- No buyer requests found. Click <a href="{{ url('/dashboard/request/create') }}">here</a> to create your first request -</td>
            </tr>
            @endforelse

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      {{ $posts->links() }}
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
