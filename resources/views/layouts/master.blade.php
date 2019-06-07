<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('asset/vendor/css/check.css')}}">
  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="{{asset('asset/vendor/owl/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/vendor/owl/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/vendor/css/font-awesome-4.7.0/css/font-awesome.css')}}">

  <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/bootstrap-typeahead.css')}}">
  @yield('title')
  <!-- development version, includes helpful console warnings -->
  <script src="{{asset('asset/js/vue.js')}}"></script>
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  @yield('script')

  <style>
    .dropdown-menu {
          min-width: 119px;
    }
    .dropdown-menu a{
          padding: 6px 5px;
    }
    header #cssmenu .css-ul {
      float: right;
    }
    @media only screen
    and (max-width: 768px) {
      #div850{
        display: none;
      }
    }

  </style>
</head>


<body>

  <!-- _______Starting of Navbar_________  -->
  <header >
    <div class="container" >
      <nav id='cssmenu'>
        <div class="logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('asset/img/WholesaleFinder-Logo.jpg') }}" alt="logo" width="auto">
          </a>
        </div>
        <div id="head-mobile"></div>
        <div class="button"></div>
        <ul class="css-ul">
          <li class='active'><a href="{{ url('/') }}">HOME</a></li>
          <li><a href='#'>ABOUT US</a></li>
          <li><a href='#'>COMMUNITY</a>
            <ul>
              <li><a href='#'>NEWS</a>
              </li>
            </ul>
          </li>
          <!-- <li><a href='#'>PRODUCTS</a>
            <ul>
              <li><a href='#'>Product 1</a>
                <ul>
                  <li><a href='#'>Sub Product</a></li>
                  <li><a href='#'>Sub Product</a></li>
                </ul>
              </li>
              <li><a href='#'>Community</a>
                <ul>
                  <li><a href='#'>News</a></li>
                </ul>
              </li>
            </ul>
          </li> -->
          @guest
          <li><a class="menu-btn" href="{{url('/premium-signup')}}" class="menu-join">Wholesale Registration</a></li>
          <li><a class="menu-btn" href="#" class="menu-join">Buyer Registration</a></li>
          <li><a href="{{url('/login')}}" class="menu-signin">Sign In</a></li>
          @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle menu-btn" href="{{ url('/dashboard') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <i class="fa fa-tachometer" aria-hidden="true"></i> {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/dashboard') }}">
                      <i class="fa fa-user-o" aria-hidden="true"></i> Dashboard
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out" aria-hidden="true"></i> {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          @endguest
        </ul>
        <div class="menu-right">
          <!-- <a href="{{url('/premium-signup')}}" class="menu-join">Supplier Registration</a>
          <a href="#" class="menu-join">Buyer Registration</a>
          <a href="{{url('/auth')}}" class="menu-signin">Sign In</a> -->
        </div>
      </nav>
    </div>
  </header>

  @yield('content')

  <footer class="footer">
    <div class="footer-middle">
      <div class="container">
        <div class="footer-ribbon">
          Get in touch
        </div><!-- End .footer-ribbon -->
        <div class="row">
          <div class="col-lg-3">
            <div class="widget">
              <h4 class="widget-title">Contact Us</h4>
              <ul class="contact-info">
                <li>
                  <span class="contact-info-label">Address:</span>123 Street Name, City, England
                </li>
                <li>
                  <span class="contact-info-label">Phone:</span>Toll Free <a href="tel:">(123) 456-7890</a>
                </li>
                <li>
                  <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                </li>
                <li>
                  <span class="contact-info-label">Working Days/Hours:</span>
                  Mon - Sun / 9:00AM - 8:00PM
                </li>
              </ul>
              <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </div><!-- End .social-icons -->
            </div><!-- End .widget -->
          </div><!-- End .col-lg-3 -->

          <div class="col-lg-9">
            <div class="widget widget-newsletter">
              <h4 class="widget-title">Subscribe newsletter</h4>
              <div class="row">
                <div class="col-md-6">
                  <p>Get all the latest information on Events,Sales and Offers. Sign up for newsletter today</p>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                  <form action="#">
                    <input type="email" class="form-control" placeholder="Email address" required>

                    <input type="submit" class="btn" value="Subscribe">
                  </form>
                </div><!-- End .col-md-6 -->
              </div><!-- End .row -->
            </div><!-- End .widget -->

            <div class="row">
              <div class="col-md-5">
                <div class="widget">
                  <h4 class="widget-title">My Account</h4>

                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <ul class="links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                      </ul>
                    </div><!-- End .col-sm-6 -->
                    <div class="col-sm-6 col-md-5">
                      <ul class="links">
                        <li><a href="#">Orders History</a></li>
                        <li><a href="#">Advanced Search</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                      </ul>
                    </div><!-- End .col-sm-6 -->
                  </div><!-- End .row -->
                </div><!-- End .widget -->
              </div><!-- End .col-md-5 -->

              <div class="col-md-7">
                <div class="widget">
                  <h4 class="widget-title">Main Features</h4>

                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="links">
                        <li><a href="#">Super Fast Magento Theme</a></li>
                        <li><a href="#">1st Fully working Ajax Theme</a></li>
                        <li><a href="#">20 Unique Homepage Layouts</a></li>
                      </ul>
                    </div><!-- End .col-sm-6 -->
                    <div class="col-sm-6">
                      <ul class="links">
                        <li><a href="#">Powerful Admin Panel</a></li>
                        <li><a href="#">Mobile & Retina Optimized</a></li>
                      </ul>
                    </div><!-- End .col-sm-6 -->
                  </div><!-- End .row -->
                </div><!-- End .widget -->
              </div><!-- End .col-md-7 -->
            </div><!-- End .row -->
          </div><!-- End .col-lg-9 -->
        </div><!-- End .row -->
      </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="container">
      <div class="footer-bottom">
        <p class="footer-copyright">US Wholesale &copy; 2018. All Rights Reserved. Developed by <a href="https://appsoliclab.com" style="color:green">Appsolic Lab Canada</a></p>

        <img src="{{asset('asset/img/payments.png')}}" alt="payment methods" class="footer-payments">
      </div><!-- End .footer-bottom -->
    </div><!-- End .container -->
  </footer><!-- End .footer -->


  <script type="text/javascript" src="{{asset('asset/js/js.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset/js/custom.js')}}"></script>
  <!-- Owl Carosel -->
  <script src="{{asset('asset/vendor/owl/js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript">
    var owl = $('.slide #slide-inner');
    owl.owlCarousel({
      items: 3,
      loop: true,
      margin: 15,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true
    });
  </script>
  <script type="text/javascript">
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      items: 1,
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplayHoverPause: true
    });
  </script>

  <!-- Main JS File -->
  <script src="{{asset('asset/vendor/js/main.min.js')}}"></script>
  @yield('scripts')

</body>

</html>
