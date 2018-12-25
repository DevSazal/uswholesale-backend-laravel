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
          <form class="form-horizontal" method="post" action="{{ route('admin.subcategory.store') }}">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>

                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Year Established</label>

                <div class="col-sm-10">
                    <select name="employee" class="form-control select2" style="width: 100%;">
                      <?php $year = date("Y");
                          for(;$year>=1900;$year--){
                      ?>
                      <option value="{{$year}}">{{$year}}</option>
                      <?php
                              }
                      ?>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Select A Parent Category</label>

                <div class="col-sm-10">
                  <!-- /.form-group -->
                    <select name="employee" class="form-control select2" style="width: 100%;">
                      <option value="1">1-50</option>
                      <option value="2">51-100</option>
                      <!-- <option disabled="disabled">California (disabled)</option> -->
                      <option value="3">101-500</option>
                      <option value="4">501-1000</option>
                      <option value="5">1001-2500</option>
                      <option value="6">2501-5000</option>
                      <option value="7">5001-10000</option>
                    </select>

                  <!-- /.form-group -->

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Company Logo</label>

                <div class="col-sm-10">

                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Logo size will have equal ratio. (example: 100*100)</p>

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Cover Photo</label>

                <div class="col-sm-10">

                      <input type="file" id="exampleInputFile">

                      <p class="help-block">Photo size ratio 3:1 (example: 600*200)</p>

                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Website</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="www.example.com" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Ad Summary</label>

                <div class="col-sm-10">
                  <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>

                <div class="col-sm-10">
                  <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Redirect URL</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="www.example.com" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Facebook</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="https://www.facebook.com/example" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Linkedin</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Google Plus</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="" >
                      </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Pinterest</label>

                <div class="col-sm-10">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pinterest" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="" >
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
