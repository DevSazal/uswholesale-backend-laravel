@extends('layouts.master')

@section('title')
<title>Sub Category</title>
@endsection

@section('content')
<?php
use Illuminate\Support\Facades\DB;
 ?>
 <style>
   .pagination>.active>span.page-link{
    height: 45px;
    width: 45px;
    line-height: 32px;
    border-radius: 50%;
    background-color: transparent;
    color: #55c57a;
    font-size: 20px;
    font-weight: 700;
    position: relative;
    overflow: hidden;
    letter-spacing: 1px;
    text-transform: uppercase;
    z-index: 1;
    margin: 0 8px 0 0;
    transition: all 0.4s ease 0s;
    border: 2px solid #55c57a;
}
.pagination>.disabled>span.page-link {
  border: none;
height: 45px;
width: 45px;
line-height: 32px;
border-radius: 50%;
background-color: transparent;
color: #55c57a;
font-size: 20px;
font-weight: 700;
position: relative;
overflow: hidden;
letter-spacing: 1px;
text-transform: uppercase;
z-index: 1;
margin: 0 8px 0 0;
transition: all 0.4s ease 0s;
}
.main-add-container .add__card:hover {
    transform: translateY(-2px);
    transition: all 0.2s;
}
/* .pagination li:last-child::before {
    content: "»";
    color: #55c57a;
    font-weight: 700;
    font-size: 20px;
    line-height: 32px;
} */
 </style>
    <main>
        @include('components.search')
        <section class="section__steps">
            <div class="container">
                <div class="pages">
                    <ul class="pages__list">
                        <li class="pages__item"><a href="#" class="pages__link">Home  ></a></li>
                        <li class="pages__item"><a href="#" class="pages__link">Wholesale Directory  ></a></li>
                        <li class="pages__item"><a href="#" class="pages__link">{{ $category->name }}</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section__allcategory">
            <div class="container">
                <ul class="allcategory__list">
                    <?php $sub = DB::table('sub_categories')->where('cid', $cid)->get(); ?>
                    @foreach($sub as $sc)
                      <li><a href="{{ url('category/'.$cid.'/'.$sc->id) }}">{{$sc->name}}</a></li>
                    @endforeach

                </ul>
            </div>
        </section>
        <section class="section-categories u-margin-bottom-medium">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-lg-3">
                        <form action="#">

                            <div class="section-checkbox__container">
                                <h3 class="heading-tertiary">Country</h3>
                                <div class="scrollbar">
                                    <div class="overflow">
                                    <?php $countries = DB::select('SELECT countries.id, countries.name, countries.code, COUNT(users.country_id) as total
                                                        FROM countries JOIN users ON countries.id = users.country_id WHERE users.role = ?
                                                        GROUP BY name ORDER BY countries.id ASC LIMIT 10', [1]); ?>
                                    @foreach($countries as $c)

                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-{{$c->name}}" type="checkbox" value="value1">
                                            <label for="styled-checkbox-{{$c->name}}">{{$c->name}} ({{$c->total}})
                                            </label>
                                        </div>


                                    @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="section-checkbox__container">
                                <h3 class="heading-tertiary">Business Type</h3>
                                <div class="scrollbar">
                                    <div class="overflow">
                                      <?php $types = DB::select('SELECT supplier_btypes.btid, supplier_btypes.uid, business_types.name, COUNT(supplier_btypes.btid) as total
                                                          FROM supplier_btypes JOIN business_types ON supplier_btypes.btid = business_types.id
                                                          GROUP BY name ORDER BY supplier_btypes.btid ASC LIMIT 10'); ?>
                                        @foreach($types as $t)
                                          <div class="input-group">
                                            <a href="LinkURL" target="_blank">
                                              <input class="form-control styled-checkbox" id="styled-checkbox-{{$t->name}}" type="checkbox" value="value1">
                                              <label for="styled-checkbox-{{$t->name}}">{{$t->name}} ({{$t->total}})
                                              </label>
                                            </a>
                                          </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> -->

                    <div class="col-lg-9 ">
                        <div id="exTab2">
                            <ul class="nav nav-tabs custom-tab">
                                <li class="{{ !isset(request()->sortBy) ? 'active' : '' }}">
                                    <a href="#1" data-toggle="tab">Supplier</a>
                                </li>
                                <li class="{{ isset(request()->sortBy) ? 'active' : '' }}"><a href="#2" data-toggle="tab">Products</a>
                                </li>
                                <li><a href="#3" data-toggle="tab">Buyer</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane {{ !isset(request()->sortBy) ? 'active' : '' }}" id="1">
                                    <div class="tab-checkbox-container">
                                        <!-- <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Verified" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Verified">Verified Supplier (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Premium" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Premium">Premium member (147)
                                            </label>
                                        </div> -->
                                    </div>

                                    @forelse($suppliers as $supplier)
                                    <div class="product__box">
                                      <!-- product updated daily remove -->
                                        @if($supplier->promote == 1)
                                        <div class="ribbon ribbon-top-right card-promo__side--ribbon-1"><span>UPDATED DAILY</span></div>
                                        @endif

                                        <div class="product__box--info">
                                            <a href="{{$supplier->url}}" target="_blank" class="product__box--sub-title">{{$supplier->user->company}}</a>
                                            <p class="product__box--paragraph">{{$supplier->summary}}</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h5 class="product__box--sign"><img src="{{ asset('asset/img/icon_spass.png')}}" alt=""> Verified Supplier 5YR</h5>
                                                <div class="product__list-container">
                                                    <dl class="product__box--list">
                                                        <dt>Business Type:</dt>
                                                        <?php $business_types = DB::select('SELECT * FROM supplier_btypes JOIN business_types ON supplier_btypes.btid = business_types.id WHERE supplier_btypes.uid = ?  ORDER BY supplier_btypes.id DESC LIMIT 10', [$supplier->uid]); ?>
                                                        <dd>
                                                          @foreach($business_types as $type)
                                                          {{$type->name}},
                                                          @endforeach
                                                        </dd>
                                                    </dl>
                                                    <dl class="product__box--list">
                                                        <dt>Main Products:</dt>
                                                        <dd>{{$supplier->all_product_names}}</dd>
                                                    </dl>
                                                    <dl class="product__box--list">
                                                        <dt>Location:</dt>
                                                        <dd>{{$supplier->user->city}}, {{$supplier->user->country->name}}
                                                            <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="product__box--imageContainer">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="product__box__image-box">
                                                                <img src="{{asset('asset/vendor/images/products/product-2.jpg')}}" class="img-responsive" alt="">
                                                                <a href="#" class="product__box--link">AGP  Laser Cut 2 in 1 Clutch Bag</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="product__box__image-box">
                                                                <img src="{{asset('asset/vendor/images/products/product-3.jpg')}}" class="img-responsive" alt="">
                                                                <a href="#" class="product__box--link">AGP  Laser Cut 2 in 1 Clutch Bag</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__box--button-review">
                                            <a href="{{$supplier->website}}" target="_blank" class="btn-text">Contact Supplier</a>
                                            <!-- <a href="{{$supplier->website}}" target="_blank"><i class="fa fa-info-circle icons" aria-hidden="true"></i></a>
                                            <a href="#"> <i class="fa fa-star icons" aria-hidden="true"></i></a> -->
                                        </div>
                                    </div>
                                    @empty
                                    <div class="col-xs-12">
                                      <div class="alert " role="alert" style="color: white;font-size: 17px;font-weight: 900;background: #39c395;
                                    border-color: #d6e9c6;">
                                        No information Found.
                                      </div>
                                    </div>
                                    @endforelse

                                    <!-- <div class="product__box">
                                        <div class="ribbon ribbon-top-right card-promo__side--ribbon-1"><span>UPDATED DAILY</span></div>

                                        <div class="product__box--info">
                                            <a class="product__box--sub-title">LAShowroom</a>
                                            <p class="product__box--paragraph">All apparel categories, trendy & basics, new styles daily, premium quality, product image download, fast shipping, various clothing Made in USA, rewards program, lowest price match guarantee, superior customer service</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h5 class="product__box--sign"><img src="{{ asset('asset/img/icon_spass.png')}}" alt=""> Verified Supplier 5YR</h5>
                                                <div class="product__list-container">
                                                    <dl class="product__box--list">
                                                        <dt>Business Type:</dt>
                                                        <dd>Wholesaler, Business Service</dd>
                                                    </dl>
                                                    <dl class="product__box--list">
                                                        <dt>Main Products:</dt>
                                                        <dd>Apparel, Designer Inspired Handbags, Fashion Accessories, Ladies Shoes, Luggage, Bags & Cases</dd>
                                                    </dl>
                                                    <dl class="product__box--list">
                                                        <dt>Location:</dt>
                                                        <dd>Los Angeles, CA, United States
                                                            <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="product__box--imageContainer">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="product__box__image-box">
                                                                <img src="{{asset('asset/vendor/images/products/product-2.jpg')}}" class="img-responsive" alt="">
                                                                <a href="#" class="product__box--link">AGP  Laser Cut 2 in 1 Clutch Bag</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="product__box__image-box">
                                                                <img src="{{asset('asset/vendor/images/products/product-3.jpg')}}" class="img-responsive" alt="">
                                                                <a href="#" class="product__box--link">AGP  Laser Cut 2 in 1 Clutch Bag</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product__box--button-review">
                                            <a href="#" class="btn-text">Contact Supplier</a>
                                            <a href="#"><i class="fa fa-info-circle icons" aria-hidden="true"></i></a>
                                            <a href="#"> <i class="fa fa-star icons" aria-hidden="true"></i></a>
                                        </div>
                                    </div> -->
                                    <nav class="pagination-box" aria-label="Page navigation">
                                      {{ $suppliers->links() }}

                                        <!-- <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul> -->
                                    </nav>
                                </div>
                                <div class="tab-pane {{ isset(request()->sortBy) ? 'active' : '' }}" id="2">
                                    <div class="tab-checkbox-container">
                                        @include('components.sorter')
                                        <!-- <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Verified" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Verified">Verified Supplier (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Premium" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Premium">Premium member (147)
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        @forelse($products as $product)
                                        <div class="col-md-6">
                                            <div class="product__box">
                                                @if($product->supplier->promote == 1)
                                                <div class="ribbon ribbon-top-right card-promo__side--ribbon-1"><span>UPDATED DAILY</span></div>
                                                @endif
                                                <div class="product__box--image-tab-2">
                                                    <img src="{{ asset('storage/ProductImg/'.$product->img) }}" alt="" style="max-height: 200px;">
                                                </div>
                                                <div class="product__box--info">
                                                    <a href="{{$product->purl}}" target="_blank" class="product__box--main-title">
                                  {{ $product->name }}
                                </a>
                                <div class="text-muted">$ {{ number_format($product->price,2) }}</div>
                                                    <a class="product__box--sub-title">{{ $product->supplier->user->company}}</a>
                                                    <div class="product__box--location">
                                                        {{$product->supplier->user->city}}, {{$product->supplier->user->country->name}}
                                                        <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                    </div>
                                                </div>

                                                <div class="product__box--button-review">
                                                    <a href="#" class="verify"><img src="{{ asset('asset/img/icon_spass.png')}}" alt=""> Verified Supplier <sup>5YR</sup></a>
                                                    <!-- <a href="#"><i class="fa fa-info-circle icons" aria-hidden="true"></i></a>
                                                    <a href="#"> <i class="fa fa-star icons" aria-hidden="true"></i></a> -->
                                                </div>
                                                <a href="{{$product->supplier->website}}" target="_blank" class="btn-text">Contact Supplier</a>
                                            </div>

                                        </div>
                                        @empty
                                        <div class="col-xs-12">
                                          <div class="alert " role="alert" style="color: white;font-size: 17px;font-weight: 900;background: #39c395;
                                        border-color: #d6e9c6;">
                                            No information Found.
                                          </div>
                                        </div>
                                        @endforelse
                                    </div>
                                    <nav class="pagination-box" aria-label="Page navigation">
                                      {{ $products->links() }}
                                    </nav>

                                </div>
                                <div class="tab-pane" id="3">
                                    <div class="tab-radio-container">
                                        <!-- <span class="tag">Sort By:</span>
                                        <div class="form__radio-group">
                                            <input type="radio" id="small" class="form__radio-input" name="sort">
                                            <label for="small" class="form__radio-label">
                                                <span class="form__radio-button"></span> Date posted
                                            </label>
                                        </div>
                                        <div class="form__radio-group">
                                            <input type="radio" id="large" class="form__radio-input" name="sort">
                                            <label for="large" class="form__radio-label">
                                                <span class="form__radio-button"></span> Expire date
                                            </label>
                                        </div>
                                        <div class="form__radio-group">
                                            <input type="radio" id="qty-high" class="form__radio-input" name="sort">
                                            <label for="qty-high" class="form__radio-label">
                                                <span class="form__radio-button"></span> QTY High
                                            </label>
                                        </div>
                                        <div class="form__radio-group">
                                            <input type="radio" id="qty-low" class="form__radio-input" name="sort">
                                            <label for="qty-low" class="form__radio-label">
                                                <span class="form__radio-button"></span> QTY Low
                                            </label>
                                        </div> -->
                                    </div>
                                    <div class="alert " role="alert" style="color: white;font-size: 17px;font-weight: 900;background: #39c395;
                                  border-color: #d6e9c6;">
                                      No information Found.
                                    </div>
                                    <ul class="buyer-list">
                                @foreach ($requests as $r)
                                      <li class="buyer-item">
                                          <div class="buyer-box">
                                              <div class="buyer-box__left-box">
                                                  <h3 class="buyer-box__main-title">{{ $r->title }}</h3>
                                                  <div class="box-flex">
                                                      <!-- <div class="image-box">
                                                          <img class="img-responsive" src="{{ asset('storage/ProductImg/'.$r->img) }}" alt="">
                                                        </div> -->
                                                        <div class="info-box">
                                                            <div class="buyer-box__location">
                                                                <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                                <span>{{ $r->user->country->name }}</span>
                                                            </div>
                                                            <div class="buyer-box__quantity">
                                                                <span class="grey">Quantity Required:</span>
                                                                <span>{{ $r->quantity }} {{ $r->qtype }} </span>
                                                            </div>
                                                            <p class="buyer-box__paragraph">{{ $r->comment }}</p>
                                                        </div>
                                                  </div>
                                              </div>
                                              <div class="buyer-box__right-box">
                                                <ul class="list">
                                                  <li>
                                                      <span class="grey">Time Left:</span>
                                                      <span>
                                                      <?php
                                                        $date1 = new DateTime(date('Y-m-d H:i:s'));
                                                        $date2 = new DateTime($r->expire);
                                                        echo $date1->diff($date2)->format("%dD %hH");
                                                        ?>
                                                      </span>
                                                  </li>
                                                  <li>
                                                      <span class="grey">Date Posted:</span>
                                                      <span>{{ $r->created_at->format('Y-m-d') }}</span>
                                                  </li>
                                                  <li>
                                                     <a href="{{ url($r->contact_url) }}" class="btn-text" target="_blank">Quote now</a>
                                                  </li>
                                                </ul>
                                              </div>
                                          </div>
                                      </li>
                                @endforeach

                                      <!-- <li class="buyer-item">
                                          <div class="buyer-box">
                                              <div class="buyer-box__left-box">
                                                  <h3 class="buyer-box__main-title">Slipper Socks</h3>
                                                  <div class="box-flex">

                                                        <div class="info-box">
                                                            <div class="buyer-box__location">
                                                                <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                                <span>United States</span>
                                                            </div>
                                                            <div class="buyer-box__quantity">
                                                                <span class="grey">Quantity Required:</span>
                                                                <span>10 pair</span>
                                                            </div>
                                                            <p class="buyer-box__paragraph">thick slipper socks for men, women and children</p>
                                                        </div>
                                                  </div>
                                              </div>
                                              <div class="buyer-box__right-box">
                                                <ul class="list">
                                                  <li>
                                                      <span class="grey">Time Left:</span>
                                                      <span>17D 8H</span>
                                                  </li>
                                                  <li>
                                                      <span class="grey">Date Posted:</span>
                                                      <span>2018-12-09</span>
                                                  </li>
                                                  <li>
                                                     <a href="#" class="btn-text">Quote now</a>
                                                  </li>
                                                </ul>
                                              </div>
                                          </div>
                                      </li> -->
                                    </ul>

                                    <nav class="pagination-box" aria-label="Page navigation">
                                      {{ $requests->links() }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main-add-container">
                          @foreach($ad2 as $banner)

                            <div class="add__card custom-card">
                              <a href="{{ url(''.$banner->url)}}" target="_blank">
                                <div class="add__card--image-container">
                                    <img class="img-responsive add__card--image" src="{{ asset('storage/CoverPhoto/'.$banner->img)}}" alt="" style="width: -webkit-fill-available;">
                                </div>
                                <h3 class="add__card--heading">{{$banner->company}} | {{ $banner->supplier_service_title }}</h3>
                                <p class="add__card--paragraph">
                                    {{ \Illuminate\Support\Str::words($banner->summary, 18,'....') }}
                                </p>
                              </a>
                            </div>
                            <br>
                            @endforeach
                            <!-- <div class="add__card custom-card">
                                <div class="add__card--image-container">
                                    <img class="img-responsive add__card--image" src="{{asset('asset/vendor/images/add-1.jpg')}}" alt="">
                                </div>
                                <h3 class="add__card--heading">Walmart Liquidations | Pallets + Truckloads</h3>
                                <p class="add__card--paragraph">
                                    Buy Wholesale Inventory Direct from Walmart 70-90% OFF Retail | All Product Categories
                                </p>
                            </div> -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End .row -->
            </div>
        </section>
        <section class="section-related-products">
            <div class="container">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary">
                  Related Products from AMAZON
              </h2>
                </div>
                <div class="row text-center">
                    Amazon adds
                </div>
            </div>
        </section>
        <section class="section-promo-sub">
            <div class="container">
                <div class="row">
                    <div class="promotion-container" style="    display: flex;
              justify-content: center;">
                        <div class="col-md-4">
                            <div class="card-promo">
                                <div class="card-promo__side card-promo__side--front">
                                    <div class="card-promo__detail">
                                        <p>Haven't found the right supplier?</p>
                                        <h3 class="heading-tertiary">Submit a Product Request</h3>
                                        <p>Tell manufacturers and wholesalers about the products you are looking for and we will help you connect directly with suppliers.</p>
                                        <a href="#" class="btn-text">Get Quotes Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-promo">
                                <div class="card-promo">
                                    <div class="card-promo__side card-promo__side--front">
                                        <div class="card-promo__detail">
                                            <p>Want product updates for apparel?</p>
                                            <h3 class="heading-tertiary">Set Product Alerts</h3>
                                            <p>Tell manufacturers and wholesalers about the products you are looking for and we will help you connect directly with suppliers.</p>
                                            <a href="#" class="btn-text">Subscribe Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection
