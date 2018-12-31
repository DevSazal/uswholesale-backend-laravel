@extends('layouts.master')
@section('content')


  <div class="container">
    <section id="profile">
      <div class="profile-header">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-img text-center">
                <img src="{{ asset('asset/img/profile.png')}}" alt="" width="175">
            </div>
          </div>
          <div class="col-md-9">
            <div class="banner-img">
                <img src="{{ asset('asset/img/p-banner.jpg')}}" alt="" width="848" height="277">
            </div>
          </div>
        </div>
      </div>
      <!-- profile nav -->
      <div class="profile-nav">
        <div class="logo-name" style="float:left;">
          <p>Shopping cart</p>
        </div>
        <div class="profile-navbar text-right">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">profile</a></li>
            <li><a href="#">products</a><span id="p-number">(2500)</span></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">photos</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </div>
      </div>
    </section>

      <!-- profile description -->
      <div class="profile-container" id="profile">
        <div class="decription">
          <div class="row">
            <div class="col-md-2">
              <div class="d-col1">
                <span class="d-title">Company</span>
                <div class="d-info">
                  <p>ShoppingCart.com</p>
                  <p>129 shantibag</p>
                  <p>129 shantibag</p>
                  <p>Malibag shantinogor</p>
                  <p>Dhaka</p>
                  <span>
                    <p>Phone: <span>01685558993</span></p>
                    <p>Website: <span>ShoppingCart.com</span></p>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="d-col1">
                <span class="d-title">About</span>
                <div class="d-info">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="d-col1">
                <span class="d-title">Company</span>
                <div class="d-info">
                  <p>ShoppingCart.com</p>
                  <p>129 shantibag</p>
                  <p>129 shantibag</p>
                  <p>Malibag shantinogor</p>
                  <p>Dhaka</p>
                  <span>
                    <p>Phone: <span>01685558993</span></p>
                    <p>Website: <span>ShoppingCart.com</span></p>
                  </span>
                </div>
              </div>
            </div>
          </div>

          
        </div>
      </div>
  </div>

@endsection
