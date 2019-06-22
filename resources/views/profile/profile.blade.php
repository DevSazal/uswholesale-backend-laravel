@extends('layouts.master')
@section('title', ''.$user->company.' - Supplier | ' )

@section('content')


  <div class="container">
    <section id="profile">
      <div class="profile-header">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-img text-center">
                <img src="{{ asset('storage/CompanyLogo/'.$user->supplier->logo) }}" alt="" width="175">
            </div>
          </div>
          <div class="col-md-9"  id="div850">
            <div class="banner-img">
                <img src="{{ asset('storage/CoverPhoto/'.$user->supplier->img) }}" alt="" width="848" height="277">
            </div>
          </div>
        </div>
      </div>
      <!-- profile nav -->
      <div class="profile-nav">
        <div class="logo-name" style="float:left;">
          <p>{{ $user->company }}</p>
        </div>
        <div class="profile-navbar text-right">
          <ul>
            <li><a href="{{ url('/company/'.$user->id)}}">Home</a></li>
            <li><a href="{{ url('/company/'.$user->id.'/profile')}}">profile</a></li>
            <li><a href="{{ url('/company/'.$user->id.'/product')}}">products</a><span id="p-number">({{ $count = \App\Product::where('sid',$user->supplier->id)->count() }})</span></li>
            <!-- <li><a href="{{ url('/company/video')}}">videos</a></li>
            <li><a href="{{ url('/company/photos')}}">photos</a></li> -->
            <li><a href="{{ url('/company/'.$user->id.'/contact')}}">contact</a></li>
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
               <p style="color:red; font-weight:bold">{{ $user->company }}</p>
               <p>{{ $user->address }}</p>
               <p>{{ $user->city }}</p>
               <p>{{ $user->country->name }}</p>
               <hr style="padding:unset; margin:15px 0">
               <span>
                 <p>Phone: <span>{{ $user->phone }}</span></p>
                 <p>Website: <span><a href="{{ $user->supplier->website }}" target="_blank" style="color:red; font-weight:bold">{{ $user->supplier->website }}</a></span></p>
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
               <p>{{ $user->supplier->est }}</p>
               <img src="{{ asset('asset/img/supplier-pass.png')}}" alt="Supplier pass" style="width: 134px;">
             </div>
           </div>
           <div class="d-col2">
             <span class="d-title">social icons</span>
             <div class="s-info">
               @if($user->supplier->fb != NULL)
               <a href="{{ $user->supplier->fb }}" class="s-icon"><i class="fab fa-facebook fb"></i></a>
               @endif
               @if($user->supplier->twitter != NULL)
               <a href="{{ $user->supplier->twitter }}" class="s-icon"><i class="fab fa-twitter-square tw"></i></a>
               @endif
               @if($user->supplier->linkedin != NULL)
               <a href="{{ $user->supplier->linkedin }}" class="s-icon"><i class="fab fa-linkedin-in li"></i></a>
               @endif
               @if($user->supplier->google != NULL)
               <a href="{{ $user->supplier->google }}" class="s-icon"><i class="fab fa-google-plus-square go"></i></a>
               @endif
               @if($user->supplier->pinterest != NULL)
               <a href="{{ $user->supplier->pinterest }}" class="s-icon"><i class="fab fa-pinterest pi"></i></a>
               @endif
             </div>
           </div>

           <!-- <div class="d-col2">
             <span class="d-title">Market Place</span>
             <div class="d-info">
               <p>Dhaka</p>
               <p>Dhaka</p>
             </div>
           </div> -->
         </div>
         <div class="col-md-9">
           <div class="d-col2">
             <span class="d-title">About</span>
             <div class="d-info">
               <p style="font-size:14px;">
                 {{ strip_tags($user->supplier->description) }}
             </div>
           </div>
           <div class="d-col2">
             <span class="d-title">Basic Information</span>
             <div class="d-info">
               <div class="dl">
                <div class="dt">Company Name:</div>
                <div class="dd">{{ $user->company }}</div>
               </div>
              <div class="dl">
               <div class="dt">Country:</div>
               <div class="dd">{{ $user->country->name }}</div>
              </div>
              <div class="dl">
               <div class="dt">Registered Address:</div>
               <div class="dd">{{ $user->address }}<br />{{ $user->city }}</div>
             </div>
             <div class="dl">
              <div class="dt">Business Type:</div>
              <div class="dd">
                <ul>
                  <?php $types = \App\SupplierBtype::where('uid', $user->id)->get(); ?>
                  @foreach($types as $type)
                    <li>{{ $type->btype->name }}</li>
                  @endforeach
                </ul>
              </div>
             </div>
             <div class="dl">
               <div class="dt">Categories:</div>
                <div class="dd">
               <ul>
                 <?php
                     $types = DB::select('SELECT categories.name, products.price, COUNT(sub_categories.id) as total
                                         FROM products JOIN sub_categories ON products.sub_category_id = sub_categories.id JOIN categories ON sub_categories.cid = categories.id WHERE products.sid = ?
                                         GROUP BY sub_categories.id ORDER BY sub_categories.id ASC', [$user->supplier->id]);
                  ?>
                 @foreach($types as $type)
                  <li>{{ $type->name }} ({{$type->total}})</li>
                 @endforeach


                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  </div>

@endsection
