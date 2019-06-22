@extends('layouts.admin')
@section('title', 'Dashboard - ')
<?php
use Illuminate\Support\Facades\DB;
 ?>
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php
                  if(auth()->user()->role ==1 && auth()->user()->payment > 0){
                    echo $x = App\Product::where('sid', Auth::user()->supplier->id)->count();
                  }else {
                    echo 0;
                  }
               ?>
              </h3>

              <p>Your Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $y = Auth::user()->plan['products'];
              if($y==NULL){
                echo 0;
              }else {
                if(date('Y-m-d') > auth()->user()->membership->end){
                  echo 0;
                }else {
                  echo $y;
                }

              } ?><sup style="font-size: 20px"></sup></h3>

              <p>Product Limit</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ $z = App\BuyerPost::count() }}</h3>

              <p>Buyer Request</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ $b = App\User::where('role','>', 0)->count() }}</h3>

              <p>Unique Users</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->

          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->

          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          @if(auth()->user()->role ==1  && auth()->user()->payment == 0)
          <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Success!</strong> you successfully logged as buyer.</center>
          </div>
          <div class="alert alert-info alert-dismissible" style="background-color: #7c96a2 !important;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Please!</strong> <a href="{{ url('/dashboard/request') }}" class="alert-link">click here</a> to visit your buyer request panel.</center>
          </div>
          @elseif(auth()->user()->role ==1 && auth()->user()->payment > 0)
          <div class="alert alert-warning alert-dismissible" style="background-color: #05c56a !important; border-color: #00c569;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Success!</strong> you successfully logged as supplier.</center>
          </div>
            @if(date('Y-m-d') > auth()->user()->membership->end)
              <div class="alert alert-warning alert-dismissible" >
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <center>Your membership plan is not actived. <strong>Please!</strong> renew your plan by <a href="{{ url('/premium-signup/payment/') }}" class="alert-link">Paying here</a>.</center>
              </div>
            @endif
          @else
          <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <center><strong>Success!</strong> you successfully logged as admin.</center>
          </div>
          @endif


          @if(session('errorSupplier'))
            <div class="alert alert-warning alert-dismissible" >
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <center><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <strong>{{ session('errorSupplier') }}</strong></center>
            </div>
          @endif

          <!-- /.box -->

          <!-- quick email widget -->
          @if(auth()->user()->role ==2)
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-money"></i>

              <h3 class="box-title">Financial Board</h3>

              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>

            </div>
            <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Today</label>

                  <div class="col-sm-10">
                    <label class="col-sm-2 control-label">= <?php

                    $date1 = \Carbon\Carbon::today()->toDateString();
                    $date2 = \Carbon\Carbon::today()->toDateString();

                    $model = \App\Membership::whereBetween('created_at', [$date1, $date2])->sum('price');
                    echo $model." USD";

                    ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Monthly</label>

                  <div class="col-sm-10">
                    <label class="col-sm-2 control-label">= <?php

                    $date1 = \Carbon\Carbon::now()->subMonths(1)->toDateString();
                    $date2 = \Carbon\Carbon::today()->toDateString();

                    $model = \App\Membership::whereBetween('created_at', [$date1, $date2])->sum('price');
                    echo $model." USD";

                    ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Yearly</label>

                  <div class="col-sm-10">
                    <label class="col-sm-2 control-label">= <?php

                    $date1 = \Carbon\Carbon::now()->subYears(1)->toDateString();
                    $date2 = \Carbon\Carbon::today()->toDateString();

                    $model = \App\Membership::whereBetween('created_at', [$date1, $date2])->sum('price');
                    echo $model." USD";

                    ?></label>
                  </div>
                </div>



            </div>
            <div class="box-footer clearfix">
              <span class="pull-right ">Total = <?php

              $model = \App\Membership::sum('price');
              echo $model." USD";

              ?>
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
          <!-- <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>

              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>

            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div> -->
          @endif

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->

          <!-- /.box -->

          <!-- solid sales graph -->

          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection
