<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/authstyle.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="{{route('index.home')}}" class="js-logo-clone">BeBuy</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  @guest
                  <li><a href="{{route('inscription')}}"><span class="icon icon-person"></span></a></li>
              
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  @endguest
                  @auth
                  <li>
                    <a href="{{route('afficher.panier')}}" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count"></span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                
        <li><form action="{{route('deconnxione')}}" method="post">
            @csrf
            Bonjour {{auth()->user()->name}}
            <button type="submit" class="btn btn-danger">log out</button>
        </form></li>
        <p></p>
        @endauth
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="active">
              <a href="{{route('index.home')}}">Home</a>
            </li>
            <li >
              <a href="{{route('index.about')}}">About</a>
            
            </li>
            <li ><a href="{{route('index.shop')}}">Shop</a></li>
            <li class="has-children">
                {{-- <a href="#">Categorie</a> --}}
                {{-- <ul class="dropdown">
                <li><a href="#">Women</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Children </a></li>
                </ul> --}}
                <div style="display: flex">
                  <form action="{{route('index.shop')}}" id="myfo" method="post" >
                    @csrf
                    <div>
                     <select name="cat" id="" >
                       
                       
                       <option value="women">Women</option>
                       <option value="man">Man</option>
                       <option value="children">Children</option>
                       
   
                     </select>
                    </div>
                    <div>
                     <button type="submit" class="btn btn-primary">Recherch</button>
                    </div>
                   </form> 

                </div>
                
            </li>
            
            <li><a href="{{route('index.contact')}}">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('content')

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Privacy policy</a></li>
                  <li><a href="#">Terms of service</a></li>
                  <li><a href="#">Shipping information</a></li>
                  <li><a href="#">Returns and refunds policy</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Payment Options</a></li>
            
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2024</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">30, bd hay ladarissa - ex Alex. 1°, fes, MA</li>
                <li class="phone"><a href="tel://212588001122">+212 588001122</a></li>
                <li class="email">BeBuy@contact.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
      
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>