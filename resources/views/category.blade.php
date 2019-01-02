@extends('layouts.master')

@section('title')
<title>Category</title>
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
/* .pagination li:last-child::before {
    content: "»";
    color: #55c57a;
    font-weight: 700;
    font-size: 20px;
    line-height: 32px;
} */
 </style>
    <main>
        <!-- _______Starting of search_________  -->
        <section id="home-search">
            <div class="wrap">
                <form name="searchForm" method="get" action="" onsubmit="">
                    <select id="act-select" name="action" class="selectBox-dropdown">
                        <option value="search">Search Suppliers</option>
                        <option value="products">Search Products</option>
                        <option value="buyers">Search Buyers</option>
                    </select>
                    <input class="text" type="text" autocomplete="off" id="" name="" value="" placeholder="Explore millions of Wholesale Products">
                    <input type="submit" value="Search" class="sbutton">
                    <!-- <div class="suggest">
                        <span class="suggest__tag">
                Related Searches:
            </span>
                        <ul class="suggest__list u-margin-top-small">
                            <li class="suggest__item">
                                <a href="#" class="suggest__link">children's skiing apparel</a>
                            </li>
                            <li class="suggest__item">
                                <a href="#" class="suggest__link">children's skiing apparel</a>
                            </li>
                            <li class="suggest__item">
                                <a href="#" class="suggest__link">children's skiing apparel</a>
                            </li>
                            <li class="suggest__item">
                                <a href="#" class="suggest__link">children's skiing apparel</a>
                            </li>
                            <li class="suggest__item">
                                <a href="#" class="suggest__link">children's skiing apparel</a>
                            </li>
                        </ul>
                    </div> -->
                </form>
            </div>
        </section>
        <!-- _______Ending of search_________  -->
        <section class="section__steps">
            <div class="container">
                <div class="pages">
                    <ul class="pages__list">
                        <li class="pages__item"><a href="#" class="pages__link">Home  ></a></li>
                        <li class="pages__item"><a href="#" class="pages__link">Wholesale Directory  ></a></li>
                        <li class="pages__item"><a href="#" class="pages__link">Apparel</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section__allcategory">
            <div class="container">
                <ul class="allcategory__list">
                    <li><a href="">Apparel Agents</a></li>
                    <li><a href="">Apparel Design Services</a></li>
                    <li><a href="">Apparel Machinery</a></li>
                    <li><a href="">Apparel Machinery Parts</a></li>
                    <li><a href="">Apparel Processing Services</a></li>
                    <li><a href="">Apparel Projects</a></li>
                    <li><a href="">Apparel Stock</a></li>
                    <li><a href="">Baby Clothing</a></li>
                    <li><a href="">Bathrobes</a></li>
                    <li><a href="">Children's Clothing</a></li>
                    <li><a href="">Coats</a></li>
                    <li><a href="">Dresses</a></li>
                    <li><a href="">Ethnic Garments</a></li>
                    <li><a href="">Garment Accessories</a></li>
                    <li><a href="">Jackets</a></li>
                    <li><a href="">Ladies' Blouses</a></li>
                    <li><a href="">Lingerie</a></li>
                    <li><a href="">Mannequins</a></li>
                    <li><a href="">Maternity Wear</a></li>
                    <li><a href="">Men's Shirts</a></li>
                    <li><a href="">Other Apparel</a></li>
                    <li><a href="">Pajamas &amp; Sleepwear</a></li>
                    <li><a href="">Pants, Trousers &amp; Jeans</a></li>
                    <li><a href="">Party Costumes</a></li>
                    <li><a href="">Sewing Supplies</a></li>
                    <li><a href="">Skirts</a></li>
                    <li><a href="">Sock Knitting Machinery</a></li>
                    <li><a href="">Sock Knitting Machinery Parts</a></li>
                    <li><a href="">Socks &amp; Stockings</a></li>
                    <li><a href="">Special Purpose Clothing</a></li>
                    <li><a href="">Sportswear</a></li>
                    <li><a href="">Stage Wear</a></li>
                    <li><a href="">Suits &amp; Tuxedo</a></li>
                    <li><a href="">Sweaters</a></li>
                    <li><a href="">Swimwear</a></li>
                    <li><a href="">T-Shirts</a></li>
                    <li><a href="">Tag Guns</a></li>
                    <li><a href="">Tank Tops</a></li>
                    <li><a href="">Underwear</a></li>
                    <li><a href="">Uniforms &amp; Workwear</a></li>
                    <li><a href="">Used Clothes</a></li>
                    <li><a href="">Waistcoats</a></li>
                    <li><a href="">Wedding &amp; Evening Dresses</a></li>
                </ul>
            </div>
        </section>
        <section class="section-categories u-margin-bottom-medium">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <form action="#">
                            <div class="section-checkbox__container">
                                <h3 class="heading-tertiary">Region</h3>
                                <div class="input-group">
                                    <input name="america" class="form-control styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                    <label for="styled-checkbox-1">North America (247)
                                    </label>
                                </div>
                                <div class="input-group">
                                    <input class="form-control styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value1">
                                    <label for="styled-checkbox-2">America (47)
                                    </label>
                                </div>
                                <div class="input-group">
                                    <input class="form-control styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value1">
                                    <label for="styled-checkbox-3">Asia (147)
                                    </label>
                                </div>
                            </div>
                            <div class="section-checkbox__container">
                                <h3 class="heading-tertiary">Country</h3>
                                <div class="scrollbar">
                                    <div class="overflow">
                                        <div class="input-group">
                                            <input name="america" class="form-control styled-checkbox" id="styled-checkbox-usa" type="checkbox" value="value1">
                                            <label for="styled-checkbox-usa">United States America (247)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-china" type="checkbox" value="value1">
                                            <label for="styled-checkbox-china">China (47)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-uk" type="checkbox" value="value1">
                                            <label for="styled-checkbox-uk">United Kingdom (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Canada" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Canada">Canada (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Turkey" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Turkey">Turkey (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-bd" type="checkbox" value="value1">
                                            <label for="styled-checkbox-bd">Bangladesh (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-nepal" type="checkbox" value="value1">
                                            <label for="styled-checkbox-nepal">Nepal (147)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-checkbox__container">
                                <h3 class="heading-tertiary">Business Type</h3>
                                <div class="scrollbar">
                                    <div class="overflow">
                                        <div class="input-group">
                                            <input name="america" class="form-control styled-checkbox" id="styled-checkbox-reseller" type="checkbox" value="value1">
                                            <label for="styled-checkbox-reseller">Reseller (247)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Buyer" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Buyer">Buyer (47)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-iso" type="checkbox" value="value1">
                                            <label for="styled-checkbox-iso">ISO 9901 (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-sa" type="checkbox" value="value1">
                                            <label for="styled-checkbox-sa">SA800 (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Agent" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Agent">Agent (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Dropshier" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Dropshier">Dropshier (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Association" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Association">Association (147)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 ">
                        <div id="exTab2">
                            <ul class="nav nav-tabs custom-tab">
                                <li class="active">
                                    <a href="#1" data-toggle="tab">Supplier</a>
                                </li>
                                <li><a href="#2" data-toggle="tab">Products</a>
                                </li>
                                <li><a href="#3" data-toggle="tab">Buyer</a>
                                </li>
                            </ul>
                            <div class="tab-content ">
                                <div class="tab-pane active" id="1">
                                    <div class="tab-checkbox-container">
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Verified" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Verified">Verified Supplier (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Premium" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Premium">Premium member (147)
                                            </label>
                                        </div>
                                    </div>
                                    @foreach($suppliers as $supplier)
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
                                                        <dd>{{$supplier->user->city}}, {{$supplier->user->country}}
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
                                            <a href="{{$supplier->website}}" target="_blank"><i class="fa fa-info-circle icons" aria-hidden="true"></i></a>
                                            <a href="#"> <i class="fa fa-star icons" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    @endforeach

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
                                <div class="tab-pane" id="2">
                                    <div class="tab-checkbox-container">
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Verified" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Verified">Verified Supplier (147)
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input class="form-control styled-checkbox" id="styled-checkbox-Premium" type="checkbox" value="value1">
                                            <label for="styled-checkbox-Premium">Premium member (147)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @foreach($products as $product)
                                        <div class="col-md-6">
                                            <div class="product__box">
                                                @if($product->supplier->promote == 1)
                                                <div class="ribbon ribbon-top-right card-promo__side--ribbon-1"><span>UPDATED DAILY</span></div>
                                                @endif
                                                <div class="product__box--image-tab-2">
                                                    <img src="{{ asset('storage/ProductImg/'.$product->img) }}" alt="">
                                                </div>
                                                <div class="product__box--info">
                                                    <a href="{{$product->purl}}" target="_blank" class="product__box--main-title">
                                  {{ $product->name }}
                                </a>
                                                    <a class="product__box--sub-title">{{ $product->supplier->user->company}}</a>
                                                    <div class="product__box--location">
                                                        {{$product->supplier->user->city}}, {{$product->supplier->user->country}}
                                                        <img title="United States" border="0" src="https://www.toptenwholesale.com/ttw/images/flags/us.png" width="18" height="18" alt="">
                                                    </div>
                                                </div>

                                                <div class="product__box--button-review">
                                                    <a href="#" class="verify"><img src="{{ asset('asset/img/icon_spass.png')}}" alt=""> Verified Supplier <sup>5YR</sup></a>
                                                    <a href="#"><i class="fa fa-info-circle icons" aria-hidden="true"></i></a>
                                                    <a href="#"> <i class="fa fa-star icons" aria-hidden="true"></i></a>
                                                </div>
                                                <a href="{{$product->supplier->website}}" target="_blank" class="btn-text">Contact Supplier</a>
                                            </div>

                                        </div>
                                        @endforeach
                                    </div>
                                    <nav class="pagination-box" aria-label="Page navigation">
                                      {{ $products->links() }}
                                    </nav>

                                </div>
                                <div class="tab-pane" id="3">
                                    <div class="tab-radio-container">
                                        <span class="tag">Sort By:</span>
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
                                        </div>
                                    </div>
                                    <ul class="buyer-list">
                                      <li class="buyer-item">
                                          <div class="buyer-box">
                                              <div class="buyer-box__left-box">
                                                  <h3 class="buyer-box__main-title">Slipper Socks</h3>
                                                  <div class="box-flex">
                                                      <div class="image-box">
                                                          <img class="img-responsive" src="https://www.toptenwholesale.com/ttw/attachments/7308/tan%20cashmere%20poncho.jpg" alt="">
                                                        </div>
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
                                      </li>
                                      <li class="buyer-item">
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
                                      </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="main-add-container">
                            <div class="add__card custom-card">
                                <div class="add__card--image-container">
                                    <img class="img-responsive add__card--image" src="{{asset('asset/vendor/images/add-1.jpg')}}" alt="">
                                </div>
                                <h3 class="add__card--heading">Walmart Liquidations | Pallets + Truckloads</h3>
                                <p class="add__card--paragraph">
                                    Buy Wholesale Inventory Direct from Walmart 70-90% OFF Retail | All Product Categories
                                </p>
                            </div>
                            <br>
                            <div class="add__card custom-card">
                                <div class="add__card--image-container">
                                    <img class="img-responsive add__card--image" src="{{asset('asset/vendor/images/add-1.jpg')}}" alt="">
                                </div>
                                <h3 class="add__card--heading">Walmart Liquidations | Pallets + Truckloads</h3>
                                <p class="add__card--paragraph">
                                    Buy Wholesale Inventory Direct from Walmart 70-90% OFF Retail | All Product Categories
                                </p>
                            </div>
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
