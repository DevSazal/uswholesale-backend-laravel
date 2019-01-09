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
            <li><a href="{{ url('/company')}}">Home</a></li>
            <li><a href="{{ url('/company/profile')}}">profile</a></li>
            <li><a href="{{ url('/company/product')}}">products</a><span id="p-number">(2500)</span></li>
            <li><a href="{{ url('/company/video')}}">videos</a></li>
            <li><a href="{{ url('/company/photos')}}">photos</a></li>
            <li><a href="{{ url('/company/contact')}}">contact</a></li>
          </ul>
        </div>
      </div>
    </section>

      <!-- profile description -->
      <div class="profile-container" id="description">
        <div class="decription">
          <div class="row">
            <div class="col-md-2">
              <div class="d-col1">
                <span class="d-title">Company</span>
                <div class="d-info">
                  <p style="color:red; font-weight:bold">ShoppingCart.com</p>
                  <p>129 shantibag</p>
                  <p>129 shantibag</p>
                  <p>Malibag shantinogor</p>
                  <p>Dhaka</p>
                  <hr style="padding:unset; margin:15px 0">
                  <span>
                    <p>Phone: <span>01685558993</span></p>
                    <p>Website: <span><a href="#"style="color:red; font-weight:bold">ShoppingCart.com</a></span></p>
                  </span>
                  <hr style="padding:unset; margin:15px 0">
                  <a href="#"style="color:red; font-weight:bold; font-size:12px;">Share</a>
                  <a href="#"style="color:red; font-weight:bold; font-size:12px; padding-left:5px;">Favourite</a>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="d-col1">
                <span class="d-title">About</span>
                <div class="d-info">
                  <p style="font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eium ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <a href="#" style="text-decoration:underline; color:red;">more ></a></p>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="d-col1">
                <span class="d-title">Member status</span>
                <div class="d-info">
                  <a href="#">Supplier Pass® <br>
                    verified supplier
                  </a>
                  <p>2014</p>
                  <img src="{{ asset('asset/img/supplier-pass.png')}}" alt="Supplier pass">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="latest-product">
          <div class="row">
            <div class="col-md-12">
              <div class="porduct-info">
                <div class="product-title">
                  latest product<a href="#">view more</a>
                </div>
                <div class="product-img">
                  <div class="row">
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                    <div class="col-md-2  text-center">
                      <div class="item">
                        <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                        <a href="#">Flowerbomb- Fb1058</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="latest-product">
          <div class="d-col1">
            <span class="d-title">latest product</span>

              <div class="product-page-img">
                <div class="row">
                  <div class="col-md-2  text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                  <div class="col-md-2  text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                  <div class="col-md-2 text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                  <div class="col-md-2  text-center">
                    <div class="item">
                      <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>
                      <a href="#">Flowerbomb- Fb1058</a>
                    </div>
                  </div>
                </div>
              </div>
         </div>
        </div>

        <div class="message">
          <div class="row">
            <div class="col-md-12">
              <div class="message-title">
                Send Message<a href="#">Contact Info</a>
              </div>
              <div class="message-info">
                <p>You must be signed in to contact this supplier.</p>
                <p>Not a Member? <a href="">Join Now FREE </a></p>
                <p>Already a member? <a href="">Sign In </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
