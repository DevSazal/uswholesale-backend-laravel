
  @extends('layouts.master')

  @section('title')
  <title>
    Home
  </title>
  @endsection

  @section('content')

       <section id="header-ads">
          <div class="container">
              <div class="row">
                  <div class="banner-image-container">
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
                      <img id="bnr-035785149" title="Wholesale Refurbished Products" border="0" src="{{ asset('asset/img/1.jpg')}}"  class="banner" alt="Wholesale Refurbished Products" />
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
                            <li class="side-nav__item"><a href="category.html"><i class="fas fa-tshirt"></i></i>Apparel</a></li>
                            <li class="side-nav__item">
                              <a href="category.html" class="sf-with-ul"><i class="fas fa-box-open"></i>
                                Dropshipers</a>
                              <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                  <div class="col-lg-8">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <div class="menu-title">
                                          <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                        </div>
                                        <ul>
                                          <li><a href="category.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                          <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                          <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                          <li><a href="category.html">Left Sidebar</a></li>
                                          <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                          <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                          <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                          <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                        </ul>
                                      </div><!-- End .col-lg-6 -->
                                      <div class="col-lg-6">
                                        <div class="menu-title">
                                          <a href="#">Variations 2</a>
                                        </div>
                                        <ul>
                                          <li><a href="#">Product List Item Types</a></li>
                                          <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                          <li><a href="category.html">3 Columns Products</a></li>
                                          <li><a href="category-4col.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                          <li><a href="category-5col.html">5 Columns Products</a></li>
                                          <li><a href="category-6col.html">6 Columns Products</a></li>
                                          <li><a href="category-7col.html">7 Columns Products</a></li>
                                          <li><a href="category-8col.html">8 Columns Products</a></li>
                                        </ul>
                                      </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                  </div><!-- End .col-lg-8 -->
                                  <div class="col-lg-4">
                                    <div class="banner">
                                      <a href="#">
                                        <img src="{{asset('vendor/images/menu-banner-2.jpg')}}" alt="Menu banner">
                                      </a>
                                    </div><!-- End .banner -->
                                  </div><!-- End .col-lg-4 -->
                                </div>
                              </div><!-- End .megamenu -->
                            </li>
                            <li class="megamenu-container side-nav__item">
                              <a href="product.html" class="sf-with-ul"><i class="fas fa-tag"></i>Closeouts</a>
                              <div class="megamenu megamenu-fixed-width">
                                <div class="row">
                                  <div class="col-lg-8">
                                    <div class="row">
                                      <div class="col-lg-4">
                                        <div class="menu-title">
                                          <a href="#">Variations</a>
                                        </div>
                                        <ul>
                                          <li><a href="product.html">Horizontal Thumbnails</a></li>
                                          <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                          <li><a href="product.html">Inner Zoom</a></li>
                                          <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                          <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                        </ul>
                                      </div><!-- End .col-lg-4 -->
                                      <div class="col-lg-4">
                                        <div class="menu-title">
                                          <a href="#">Variations</a>
                                        </div>
                                        <ul>
                                          <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                          <li><a href="product-simple.html">Simple Product</a></li>
                                          <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                        </ul>
                                      </div><!-- End .col-lg-4 -->
                                      <div class="col-lg-4">
                                        <div class="menu-title">
                                          <a href="#">Product Layout Types</a>
                                        </div>
                                        <ul>
                                          <li><a href="product.html">Default Layout</a></li>
                                          <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                          <li><a href="product-full-width.html">Full Width Layout</a></li>
                                          <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                          <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                          <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                        </ul>
                                      </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                  </div><!-- End .col-lg-8 -->
                                  <div class="col-lg-4">
                                    <div class="banner">
                                      <a href="#">
                                        <img src="{{ asset('asset/vendor/images/menu-banner.jpg')}}" alt="Menu banner" class="product-promo">
                                      </a>
                                    </div><!-- End .banner -->
                                  </div><!-- End .col-lg-4 -->
                                </div><!-- End .row -->
                              </div><!-- End .megamenu -->
                            </li>
                            <li class="side-nav__item">
                              <a href="#" class="sf-with-ul"><i class="fas fa-shopping-bag"></i>Handbags</a>
              
                              <ul>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="#">Checkout</a>
                                  <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                  </ul>
                                </li>
                                <li><a href="#">Dashboard</a>
                                  <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                  </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="#">Blog</a>
                                  <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Post</a></li>
                                  </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#" class="login-link">Login</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                              </ul>
                            </li>
                            <li class="side-nav__item"><a href="#" class="sf-with-ul"><i class="fas fa-ring"></i>Jwelery</a>
                              <ul>
                                <li><a href="#">Header Types</a></li>
                                <li><a href="#">Footer Types</a></li>
                              </ul>
                            </li>
                            <li class="side-nav__item"><a href="#"><i class="fas fa-money-bill-wave"></i>Doller Store Items</a></li>
                            <li class="side-nav__item"><a href="#"><i class="fas fa-shoe-prints"></i>Shoes</a></li>
                            <li class="side-nav__item"><a href="#"><i class="fas fa-mobile-alt"></i>Consumer Electronics</a></li>
                            <li class="side-nav__item"><a href="#"><i class="fas fa-shopping-cart"></i>General Merchendise</a></li>
                          </ul>
                        </nav>
                      </div><!-- End .side-menu-container -->
              
                    </aside><!-- End .col-lg-3 -->
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
                      </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
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
                      </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
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
                      </div><!-- End .home-slide-content -->
                    </div><!-- End .home-slide -->
                  </div>
                </div>
        
              </div>
              <div class="col-lg-3">
                <div class="main-add-container">
                    <div class="add__card">
                      <div class="add__card--image-container">
                          <img class="img-responsive add__card--image" src="{{asset('asset/vendor/images/add-1.jpg')}}" alt="">  
                      </div>
                      <h3 class="add__card--heading">Walmart Liquidations | Pallets + Truckloads</h3>  
                      <p class="add__card--paragraph">
                        Buy Wholesale Inventory Direct from Walmart
                        70-90% OFF Retail | All Product Categories
                      </p>
                    </div>
                    <div class="add__card">
                        <div class="add__card--image-container">
                            <img class="img-responsive add__card--image" src="{{asset('asset/vendor/images/add-1.jpg')}}" alt="">  
                        </div>
                        <h3 class="add__card--heading">Walmart Liquidations | Pallets + Truckloads</h3>  
                        <p class="add__card--paragraph">
                          Buy Wholesale Inventory Direct from Walmart
                          70-90% OFF Retail | All Product Categories
                        </p>
                      </div>
                </div>
              </div>
            </div><!-- End .row -->
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
                              <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and dropship items, we have you covered.</p>
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
                            <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and dropship items, we have you covered.</p>
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
                              <p>Save on wholesale purchases at TopTenWholesale Deals! Now your business can make more profit on wholesale products offered by our verified wholesale suppliers. From apparel to consumer electronics, closeout and dropship items, we have you covered.</p>
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
              <div class="row text-center u-margin-bottom-medium">
                <div class="col-md-2 col-sm-2">
                    <div class="feature-box">
                        <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-1.jpg')}}" alt="">
                        <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                        <a href="#" class="feature-box__link">V-k wholesale</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="feature-box">
                        <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-4.jpg')}}" alt="">
                        <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                        <a href="#" class="feature-box__link">V-k wholesale</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="feature-box">
                        <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-2.jpg')}}" alt="">
                        <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                        <a href="#" class="feature-box__link">V-k wholesale</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="feature-box">
                        <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-3.jpg')}}" alt="">
                        <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                        <a href="#" class="feature-box__link">V-k wholesale</a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <div class="feature-box">
                        <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-5.jpg')}}" alt="">
                        <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                        <a href="#" class="feature-box__link">V-k wholesale</a>
                    </div>
                </div>
              </div>
              <div class="row text-center u-margin-bottom-medium">
                  <div class="col-md-2 col-sm-2">
                      <div class="feature-box">
                          <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-6.jpg')}}" alt="">
                          <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                          <a href="#" class="feature-box__link">V-k wholesale</a>
                      </div>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <div class="feature-box">
                          <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-7.jpg')}}" alt="">
                          <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                          <a href="#" class="feature-box__link">V-k wholesale</a>
                      </div>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <div class="feature-box">
                          <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-8.jpg')}}" alt="">
                          <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                          <a href="#" class="feature-box__link">V-k wholesale</a>
                      </div>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <div class="feature-box">
                          <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-9.jpg')}}" alt="">
                          <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                          <a href="#" class="feature-box__link">V-k wholesale</a>
                      </div>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <div class="feature-box">
                          <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-10.jpg')}}" alt="">
                          <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                          <a href="#" class="feature-box__link">V-k wholesale</a>
                      </div>
                  </div>
                </div>
                <div class="row text-center u-margin-bottom-medium">
                    <div class="col-md-2 col-sm-2">
                        <div class="feature-box">
                            <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-11.jpg')}}" alt="">
                            <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                            <a href="#" class="feature-box__link">V-k wholesale</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="feature-box">
                            <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-12.jpg')}}" alt="">
                            <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                            <a href="#" class="feature-box__link">V-k wholesale</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="feature-box">
                            <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-13.jpg')}}" alt="">
                            <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                            <a href="#" class="feature-box__link">V-k wholesale</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="feature-box">
                            <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-14.jpg')}}" alt="">
                            <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                            <a href="#" class="feature-box__link">V-k wholesale</a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="feature-box">
                            <img class="img-responsive feature-box__image" src="{{asset('asset/vendor/images/products/product-15.jpg')}}" alt="">
                            <h3 class="heading-tertiary u-margin-bottom-small feature-box__title">C-store Supply</h3>
                            <a href="#" class="feature-box__link">V-k wholesale</a>
                        </div>
                    </div>
                  </div>
                  <div class="u-center-text u-margin-top-big">
                      <a href="#" class="btn btn--green">Discover all suppliers !!</a>
                  </div>
          </div>
         
        </div>
      </section>
      
      
      <section id="apparel">
        <div class="container">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Apparel
                </h2>
            </div>
            <div class="apparel">
                <div class="row">
                  <div class="row">
                    <div class="col-md-3 ap">
                      <div class="apparel-image">
                        <img src="{{asset('asset/img/apparel_featured.jpg')}}" alt="" height="260" width="260">
                      </div>
                    </div>
                    <div class="col-md-9 product-inner">
                      <div class="row">
                        <div class="col-md-3 col-xs-6 inner inner1">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner inner1">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
          
                        <div class="col-md-3 col-xs-6 inner inner1">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner inner1">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-xs-6 inner">
                          <div class="apparel-inner">
                            <h3>Dresses</h3>
                            <div class="inner-image">
                              <img src="{{asset('asset/img/shirt.jpg')}}" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </section>
      
      <section id="news"> 
        <div class="container">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Wholesale News & Videos
                </h2>
            </div>
          <div class="row">
             <div class="col-md-6">
                <div class="wholesale-news">
                  <p>Supplier profiles, trade show coverage, product trends and industry coverage for B2B professionals, sourcing tips and more... <a href="" class="more-news">more news »</a></p>
                  <div class="slide">
                    <div class="owl-carousel owl-theme" id="slide-inner">
                      <div class="item">
                        <a href=""><img src="{{asset('asset/img/slide-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                        <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                      </div>
                      <div class="item">
                        <a href=""><img src="{{asset('asset/img/slide-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                        <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                      </div>
                      <div class="item">
                        <a href=""><img src="{{asset('asset/img/slide-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                        <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                      </div>
                      <div class="item">
                        <a href=""><img src="{{asset('asset/img/slide-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                        <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="wholesale-news">
                    <p>The only video hub dedicated to the wholesale industry. Watch videos from suppliers, manufacturers, and more <a href="" class="more-news">more videos »</a></p>
                    <div class="slide">
                      <div class="owl-carousel owl-theme" id="slide-inner">
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
                        <div class="item">
                          <a href=""><img src="{{asset('asset/img/video-wholesale.jpg')}}" alt="" height="100" width="300"></a>
                          <h3><a href="">FACIAL RECOGNITION IN STORES THREATENS</a></h3>
                        </div>
        
                      </div>
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
                  <p >
                    TopTenWholesale produces the <a href="more-link">Apparel Textile Sourcing</a> international trade shows, the fastest growing trade shows in Canada, U.S.A., and Europe. ATS shows are a Global Industry Destination that provide a platform
                      for the world's apparel and textile executives to connect, learn and create opportunities to grow their business.
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
