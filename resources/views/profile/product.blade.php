@extends('layouts.master')
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
          <p>Shopping cart</p>
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
             <span class="d-title">product category</span>
             <div class="product-info-supplier">
               <ul>
                 <?php
                     $categories = DB::select('SELECT categories.name, products.price, COUNT(sub_categories.id) as total
                                         FROM products JOIN sub_categories ON products.sub_category_id = sub_categories.id JOIN categories ON sub_categories.cid = categories.id WHERE products.sid = ?
                                         GROUP BY sub_categories.id ORDER BY sub_categories.id ASC', [$user->supplier->id]);
                  ?>
                 @foreach($categories as $c)
                 <li><a href="#">{{ $c->name }} ({{$c->total}})</a></li>
                 @endforeach
               </ul>
             </div>
           </div>

         </div>
         <div class="col-md-9">
           <div class="d-col2">
             <span class="d-title">all product</span>

               <div class="product-page-img">
                 <div class="row">
                   <?php $products = \App\Product::where('sid',$user->supplier->id)->paginate(30); ?>

                                     @foreach($products as $p)
                                     <div class="col-md-2  text-center">
                                       <div class="item">
                                         <a href="{{ $p->purl }}" target="_blank"><img src="{{ asset('storage/ProductImg/'.$p->img) }}" alt=""></a>
                                         <a href="{{ $p->purl }}" target="_blank">{{ $p->name }} - {{ $p->subcategory->name }} ({{ $p->price }} USD)</a>
                                       </div>
                                     </div>
                                     @endforeach


                   <!-- <div class="col-md-2  text-center">
                     <div class="item">
                       <a href="#"><img src="{{ asset('asset/img/p1.jpg')}}" alt=""></a>

                     </div>
                      <a href="#">Flowerbomb- Fb1058</a>
                   </div> -->


                 </div>
                 <nav aria-label="Page navigation example">
                   {{ $products->links() }}
  <!-- <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul> -->
</nav>
               </div>

           </div>

      </div>
    </div>
  </div>
</div>


  </div>

@endsection
