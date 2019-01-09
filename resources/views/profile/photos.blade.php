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
         <div class="col-md-3" id="float">
           <div class="d-col2">
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

           <div class="d-col2">
             <span class="d-title">Member status</span>
             <div class="d-info">
               <a href="#">Supplier Pass® <br>
                 verified supplier
               </a>
               <p>2014</p>
               <img src="{{ asset('asset/img/supplier-pass.png')}}" alt="Supplier pass">
             </div>
           </div>
           <div class="d-col2">
             <span class="d-title">social icons</span>
             <div class="s-info">
               <a href="#" class="s-icon"><i class="fab fa-facebook fb"></i></a>
               <a href="#" class="s-icon"><i class="fab fa-twitter-square tw"></i></a>
               <a href="#" class="s-icon"><i class="fab fa-linkedin-in li"></i></a>
               <a href="#" class="s-icon"><i class="fab fa-google-plus-square go"></i></a>
               <a href="#" class="s-icon"><i class="fab fa-pinterest pi"></i></a>
             </div>
           </div>

           <div class="d-col2">
             <span class="d-title">Market Place</span>
             <div class="d-info">
               <p>Dhaka</p>
               <p>Dhaka</p>
             </div>
           </div>
         </div>
         <div class="col-md-9">
           <div class="d-col2">
             <span class="d-title">videos</span>
             <div class="d-info">
               <p style="font-size:14px;">
                 Member has not uploaded any photos</p>
             </div>
           </div>

      </div>
    </div>
  </div>
</div>


  </div>

@endsection
