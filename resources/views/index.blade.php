@extends('layouts.master') @section('title')
<title>
    Home
</title>
@endsection @section('content')
<?php
use Illuminate\Support\Facades\DB;
 ?>
<section id="header-ads">
    <div class="container">
        <div class="row">
            <div class="banner-image-container">
              @foreach($ad as $banner)
              <a href="{{ url(''.$banner->url)}}" target="_blank">
                <img id="bnr-035785149" title="{{$banner->company}}" border="0" src="{{ asset('storage/CoverPhoto/'.$banner->img)}} " class="banner" alt="{{$banner->company}}" />
              </a>
              @endforeach

            </div>
        </div>
    </div>
    <!-- _______ending of header ads_________  -->
</section>

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
            <div id="suggest"></div>
        </form>
        <!-- <form class="form-inline" action="index.html" method="post">
          <div class="form-group">
            <select name="">
              <option value="">Select</option>
              <option value="">Supplier</option>
              <option value="">Supplier</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" name="" value="" class="form-control" placeholder="Search...">
          </div>
          <button type="submit" name="button" class="search-btn"><i class="fas fa-search"></i></button>
        </form> -->
    </div>
</section>
<!-- _______Ending of search_________  -->

<!-- _______Starting of Main Cointainer_________  -->
<section id="categories-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <aside class="sidebar-home">
                    <div class="side-menu-container">
                        <h2>TRENDING CATEGORIES</h2>
                        <nav class="side-nav">
                            <ul class="menu menu-vertical sf-arrows">
                                @foreach($categories as $c)
                                <li class="side-nav__item">
                                    <a href="{{ url('category/'.$c->id) }}" class="sf-with-ul"><i class="far fa-folder"></i>
                                        {{$c->name}}</a>
                                    <?php $sub = DB::table('sub_categories')->where('cid', $c->id)->get(); ?>
                                    @if(count($sub) > 0)
                                    <div class="megamenu megamenu-fixed-width">
                                        <ul class="megamenu__items">

                                            @foreach($sub as $sc)
                                            <li class="megamenu__item"><a href="{{ url('category/'.$c->id.'/'.$sc->id) }}" class="megamenu__link">{{$sc->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <!-- End .megamenu -->
                                    @endif
                                </li>
                                @endforeach

                            </ul>
                        </nav>
                    </div>
                    <!-- End .side-menu-container -->

                </aside>
                <!-- End .col-lg-3 -->
                <!-- Banner part here -->
            </div>

            <div class="col-lg-6 ">
                <div class="home-banner owl-carousel owl-theme">
                    <div class="item">
                        <div class="home-slide">
                            <div class="slide-bg"></div>
                            <img src="{{ asset('asset/vendor/images/slider/slide-1.jpg')}}" alt="nai">
                            <div class="home-slide-content">
                                <h3>OVER <span>200+</span></h3>
                                <h1>GREAT DEALS</h1>
                                <p>While they last!</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div>
                            <!-- End .home-slide-content -->
                        </div>
                        <!-- End .home-slide -->
                    </div>
                    <div class="item">
                        <div class="home-slide">
                            <div class="slide-bg"></div>
                            <img src="{{asset('asset/vendor/images/slider/slide-2.jpg')}}" alt="nai">
                            <div class="home-slide-content">
                                <h3>OVER <span>200+</span></h3>
                                <h1>GREAT DEALS</h1>
                                <p>While they last!</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div>
                            <!-- End .home-slide-content -->
                        </div>
                        <!-- End .home-slide -->
                    </div>
                    <div class="item">
                        <div class="home-slide">
                            <div class="slide-bg"></div>
                            <img src="{{asset('asset/vendor/images/slider/slide-3.jpg')}}" alt="nai">
                            <div class="home-slide-content">
                                <h3>OVER <span>200+</span></h3>
                                <h1>GREAT DEALS</h1>
                                <p>While they last!</p>
                                <a href="category.html" class="btn btn-dark">Shop Now</a>
                            </div>
                            <!-- End .home-slide-content -->
                        </div>
                        <!-- End .home-slide -->
                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="main-add-container">
                  @foreach($ad2 as $banner)
                    <div class="add__card">
                      <a href="{{ url(''.$banner->url)}}" target="_blank">
                        <div class="add__card--image-container">
                            <img class="img-responsive add__card--image" src="{{ asset('storage/CoverPhoto/'.$banner->img)}}" alt="">
                        </div>
                        <h3 class="add__card--heading">{{$banner->company}} | {{ $banner->supplier_service_title }}</h3>
                        <p class="add__card--paragraph">
                            {{ \Illuminate\Support\Str::words($banner->summary, 18,'....') }}
                        </p>
                      </a>
                    </div>
                  @endforeach
                    <!-- <div class="add__card">
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
        <!-- End .row -->
    </div>
</section>

<section id="promo">
    <div class="container">
        <div class="row">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting deals for exciting people
                </h2>
            </div>
            <div class="col-md-4">
                <div class="card-promo">
                    <div class="card-promo__side card-promo__side--front">
                        <div class="ribbon ribbon-top-right card-promo__side--ribbon-1"><span>UPDATED DAILY</span></div>
                        <div class="card-promo__picture card-promo__picture--1">

                        </div>
                        <h4 class="card-promo__heading">
                            <span class="card-promo__heading--span card-promo__heading--span--1">Wholesale Deals</span>
                        </h4>
                        <div class="card-promo__detail">
                            <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and
                                dropship items, we have you covered.</p>
                            <a href="#" class="btn-text">Find Your deal</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-promo">
                    <div class="card-promo__side card-promo__side--front">
                        <div class="ribbon ribbon-top-right card-promo__side--ribbon-2"><span>FREE QUOTES</span></div>
                        <div class="card-promo__picture card-promo__picture--2">

                        </div>
                        <h4 class="card-promo__heading">
                            <span class="card-promo__heading--span card-promo__heading--span--2">Product Requests</span>
                        </h4>
                        <div class="card-promo__detail">
                            <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and
                                dropship items, we have you covered.</p>
                            <a href="#" class="btn-text">Get a quote now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-promo">
                    <div class="card-promo__side card-promo__side--front">
                        <div class="ribbon ribbon-top-right card-promo__side--ribbon-3"><span>GET VERIFIED</span></div>
                        <div class="card-promo__picture card-promo__picture--3">
                        </div>
                        <h4 class="card-promo__heading">
                            <span class="card-promo__heading--span card-promo__heading--span--3">Verified Suppliers</span>
                        </h4>
                        <div class="card-promo__detail">
                            <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and
                                dropship items, we have you covered.</p>
                            <a href="#" class="btn-text">Get your supplier pass</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Suppliers -->

<section id="suppliers">
    <div class="container">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Hot Buys from Wholesale Suppliers
            </h2>
        </div>
        <div class="row text-center ">
          @foreach($supplier as $sp)
            <div class="col-md-2 col-sm-2 u-margin-bottom-medium">
                <div class="feature-box">
                    <a href="{{$sp->url}}" class="feature-box__link" target="_blank">
                    <img class="img-responsive feature-box__image" src="{{ asset('storage/BannerImg/'.$sp->banner_img)}}" alt="">
                    <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">{{$sp->supplier_service_title}}</h3>
                    </a>
                    <a href="{{$sp->website}}" class="feature-box__link" target="_blank">{{$sp->user->company}}</a>
                </div>
            </div>
          @endforeach

        </div>

        <div class="u-center-text u-margin-top-big">
            <a href="#" class="btn btn--green">Discover all suppliers !!</a>
        </div>
    </div>

    </div>
</section>

<!-- <section id="apparel">
    <div class="container">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Apparel
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, natus.</p>
        </div>
        <div class="apparel">
            <div class="row">
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
                <div class="text-center col-md-3">
                    <div class="dresser-container">
                        <h3>Dresser</h3>
                        <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="news">
    <div class="container">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Wholesale News & Videos
            </h2>
            <p>Supplier profiles, trade show coverage, product trends and industry coverage for B2B professionals, sourcing tips and more... more news »</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('asset/img/card.png')}}" alt="Card image cap" width="360">
                    <div class="card-body">
                      <span>
                        <i class="far fa-calendar-alt"></i>December 12, 18 .
                        <i class="far fa-user"></i>John doe
                      </span>
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('asset/img/card.png')}}" alt="Card image cap" width="360">
                    <div class="card-body">
                      <span>
                        <i class="far fa-calendar-alt"></i>December 12, 18 .
                        <i class="far fa-user"></i>John doe
                      </span>
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('asset/img/card.png')}}" alt="Card image cap" width="360">
                    <div class="card-body">
                      <span>
                        <i class="far fa-calendar-alt"></i>December 12, 18 .
                        <i class="far fa-user"></i>John doe
                      </span>
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="trade-show">
    <div class="container">
        <!-- Trade shows -->
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Trade Shows
            </h2>
            <p>
                TopTenWholesale produces the <a href="more-link">Apparel Textile Sourcing</a> international trade shows, the fastest growing trade shows in Canada, U.S.A., and Europe. ATS shows are a Global Industry Destination that provide a
                platform for the world's apparel and textile executives to connect, learn and create opportunities to grow their business.
            </p>
        </div>
        <div class="trade-shows ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-4 trade-logo text-center">
                            <a href="" class="">
                                <img src="{{asset('asset/img/trade-show.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4 trade-logo text-center">
                            <a href="" class="">
                                <img src="{{asset('asset/img/trade-show.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-4 trade-logo text-center">
                            <a href="" class="">
                                <img src="{{asset('asset/img/trade-show.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row trade-image u-margin-top-medium">
                <div class="col-md-12">
                    <a href=""><img src="{{asset('asset/img/photo_show.jpg')}}" alt="nai"></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
