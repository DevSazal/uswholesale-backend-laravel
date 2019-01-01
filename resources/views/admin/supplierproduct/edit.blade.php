@extends('layouts.admin')

@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Complete Your Company Profile
      <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Profile</a></li>
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
            <h3 class="box-title">Profile</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="{{ route('admin.profile.update', $sp->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>

                <div class="col-sm-10">
                  <input type="text" name="cp" class="form-control" id="inputEmail3" placeholder="" value="{{$sp->contact_person}}" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Year Established</label>

                <div class="col-sm-10">
                    <select name="est" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select Year</option>
                      <?php $year = date("Y");
                          for(;$year>=1900;$year--){
                            if($sp->est == $year){
                      ?>
                      <option value="{{$year}}" selected>{{$year}}</option>
                      <?php
                      }else{ ?>
                            <option value="{{$year}}">{{$year}}</option>
                    <?php  }
                              }
                      ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">How much employee?</label>

                <div class="col-sm-10">
                  <!-- /.form-group -->
                    <select name="employee" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select Employee Amount</option>
                      @if($sp->employee = 1)
                      <option value="1" selected>1-50</option>
                      <option value="2">51-100</option>
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>
                      @elseif($sp->employee = 2)
                      <option value="1">1-50</option>
                      <option value="2" selected>51-100</option>
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                      @elseif($sp->employee = 3)
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3" selected>101-500</option>
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>

                      @elseif($sp->employee = 4)
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3">101-500</option>
                      <option value="4" selected>501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>
                      @elseif($sp->employee = 5)
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5" selected>1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>
                      @elseif($sp->employee = 6)
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6" selected>2501-5000</option>
                      <option value="7">5001-10000</option>
                      @elseif($sp->employee = 7)
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7" selected>5001-10000</option>
                      @else
                        <option value="1">1-50</option>
                        <option value="2">51-100</option>
                        <!-- <option disabled="disabled">California (disabled)</option> -->
                        <option value="3">101-500</option>
                        <option value="4">501-1000</option>
                        <option value="5">1001-2500</option>
                        <option value="6">2501-5000</option>
                        <option value="7">5001-10000</option>
                      @endif
                    </select>

                  <!-- /.form-group -->

                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select Service Category</label>

                <div class="col-sm-10">
                  <!-- /.form-group -->
                    <select name="scid" class="form-control select2" style="width: 100%;" required>
                      <option value="">Select Service Category</option>
                      @foreach($subcategories as $s)
                        @if($s->id == $sp->subcatgoryid)
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
                <label for="inputEmail3" class="col-sm-2 control-label">Supplier Service Title</label>

                <div class="col-sm-10">
                  <input type="text" name="supplier_service_title" class="form-control" id="inputEmail3" placeholder="" value="{{$sp->supplier_service_title}}" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">All Product Name</label>

                <div class="col-sm-10">
                  <input type="text" name="all_product_names" class="form-control" id="inputEmail3" placeholder="" value="{{$sp->all_product_names}}"" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Company Logo</label>

                <div class="col-sm-5">

                      <input type="file" name="logo" id="exampleInputFile" required>

                      <p class="help-block">Logo size will have equal ratio. (example: 100*100)</p>

                </div>
                <div class="col-sm-5">
                  <img src="{{ asset('storage/CompanyLogo/'.$sp->logo)}}" alt="" style="width: 10%;" class="img-responsive">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Banner Image(Ad)</label>

                <div class="col-sm-5">

                      <input type="file" name="banner_img" id="exampleInputFile" required>

                      <p class="help-block">Banner size will have equal ratio. (example: 200*200)</p>

                </div>
                <div class="col-sm-5">
                  <img src="{{ asset('storage/BannerImg/'.$sp->banner_img)}}" alt="" style="width: 10%;" class="img-responsive">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Cover Photo</label>

                <div class="col-sm-5">

                      <input type="file" name="img" id="exampleInputFile" required>

                      <p class="help-block">Photo size ratio 3:1 (example: 600*200)</p>

                </div>
                <div class="col-sm-5">
                  <img src="{{ asset('storage/CoverPhoto/'.$sp->img)}}" alt="" style="width: 300px;" class="img-responsive">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Website</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" name="website" class="form-control" placeholder="www.example.com" value="{{$sp->website}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Fax</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-fax" aria-hidden="true"></i></span>
                        <input type="text" name="fax" class="form-control" placeholder="123-456-0000"  value="{{$sp->fax}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Ad Summary</label>

                <div class="col-sm-10">
                  <textarea name="summary" class="form-control" rows="5" id="comment" required>{{$sp->summary}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                  <textarea name="description" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{$sp->description}}</textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Redirect URL</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" name="url" class="form-control" placeholder="www.example.com" value="{{$sp->url}}" required>
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <input type="text" name="fb" class="form-control" placeholder="https://www.facebook.com/example" value="{{$sp->fb}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <input type="text" name="twitter" class="form-control" placeholder="" value="{{$sp->twitter}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Linkedin</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <input type="text" name="linkedin" class="form-control" placeholder="" value="{{$sp->linkedin}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Google Plus</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                        <input type="text" name="google" class="form-control" placeholder="" value="{{$sp->google}}">
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Pinterest</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pinterest" aria-hidden="true"></i></span>
                        <input type="text" name="pinterest" class="form-control" placeholder="" value="{{$sp->pinterest}}">
                      </div>
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
