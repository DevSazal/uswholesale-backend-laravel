@extends('layouts.admin')
@section('title', 'Users - ')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    All Users
    <small>list of users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Users</a></li>
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
          <h3 class="box-title">User List</h3>

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
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              
              <th>Location</th>
              <th>Phone</th>
              <th>Actived Plan</th>
              <th>Joined</th>
              <!-- <th>Updated</th> -->
              <!-- <th>Action</th> -->
            </tr>
            @forelse($users as $u)
            <tr>
              <td>{{ $u->id }}</td>
              <td>
                {{ $u->name }}

              </td>
              <td>{{ $u->email }}</td>
              <td>
                @if($u->role == 2)
                <span class="label" style="background: #000;">admin</span>
                @elseif($u->role == 1 & $u->payment > 0)
                <a href="{{ url('/company/'.$u->id) }}" target="_blank"><span class="label" style="background: #ef42e0;" title="{{ $u->company }}">supplier</span></a>
                @else
                <span class="label" style="background: #00a65a;">buyer</span>
                @endif
              </td>

              <td title="{{ $u->address }}">{{ $u->city }}, {{ $u->country->name }}</td>
              <td>{{ $u->phone }}</td>
              <td>
                @if($u->role == 2)
                <span class="label label-default">No Plan</span>
                @elseif($u->role == 1 & $u->payment > 0)
                <span class="label label-primary">supplier</span>
                  @if(
                    $u->subscribed('Basic')
                  )
                  <span class="label label-success">Basic</span>
                    @if(date('Y-m-d') > $u->membership->end)
                      <span class="label label-warning">Expired</span>
                    @else
                      <span class="label" style="background: #ef42e0;" title="{{ \Carbon\Carbon::parse($u->membership->end)->format('j F Y') }}">Actived</span>
                    @endif

                  @elseif(
                    $u->subscribed('Standard')
                  )
                  <span class="label label-success">Standard</span>
                    @if(date('Y-m-d') > $u->membership->end)
                      <span class="label label-warning">Expired</span>
                    @else
                      <span class="label" style="background: #ef42e0;" title="{{ \Carbon\Carbon::parse($u->membership->end)->format('j F Y') }}">Actived</span>
                    @endif

                  @elseif(
                    $u->subscribed('Premium')
                  )
                  <span class="label label-success">Premium</span>
                    @if(date('Y-m-d') > $u->membership->end)
                      <span class="label label-warning">Expired</span>
                    @else
                      <span class="label" style="background: #ef42e0;" title="{{ \Carbon\Carbon::parse($u->membership->end)->format('j F Y') }}">Actived</span>
                    @endif

                  @else
                  <span class="label label-default" title="{{ $u->payment }}">Not Actived</span>
                  @endif
                @else
                <span class="label label-default">No Plan</span>
                @endif
              </td>

              <td>{{ $u->created_at }}</td>
              <!-- <td>{{ $u->updated_at }}</td> -->
              <!-- <td>
                    <a href="{{ route('admin.subcategory.edit', $u->id) }}" class="btn btn-info btn-sm">Edit</a>
                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-sm">Delete</a>
                    <form method="POST" action="{{ route('admin.subcategory.destroy', $u->id) }}">

                    @method('DELETE')
                    @csrf

                    </form>
              </td> -->
            </tr>
            @empty
            <tr>
              <td class="text-center" colspan="8">- No users found. Click <a href="{{ route('admin.product.create') }}">here</a> to create your first product -</td>
            </tr>
            @endforelse

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      {{ $users->links() }}
    </div>
  </div>
</section>
<!-- /.content -->

@endsection
