<!DOCTYPE html>
<html lang="en">
<head>
<title>New Age</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Latest compiled and minified CSS -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/simple-line-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/device-mockups.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link href="//fonts.googleapis.com/css?family=Lato">
<link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
<link href="//fonts.googleapis.com/css?family=Muli">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i></button>
      <a class="navbar-brand page-scroll" href="#page-top">Chaine</a></div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a class="page-scroll" href="#features">Features</a></li>
        <li><a class="page-scroll" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="header-content">
          <div class="header-content-inner">
            <h1>Almutxaset , Une Chaine Tele Tunisienne Creé en 2222 et je ne sais pas quoi</h1>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">

              <div class="screen"><img src="{{URL::asset('/image/demo-screen-1.jpg')}}" class="img-responsive" alt=""></div>
              <div class="button"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<section id="download" class="download bg-primary text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h2 class="section-heading">Mutwast Location</h2>
        <p>Site Web Pour l'administration</p>
        <div class="badges"><a class="badge-link" href="#"><img src="{{URL::asset('/image/google-play-badge.svg')}}" alt=""></a> <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a></div>
      </div>
    </div>
  </div>
</section>
<section id="features" class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="section-heading">
          <h2>Site administration</h2>
          <p class="text-muted">Text ici pour decrire l'administration</p>
          <hr>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">
              <div class="screen"><img src="{{URL::asset('/image/demo-screen-1.jpg')}}" class="img-responsive" alt=""></div>
              <div class="button"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="feature-item"><i class="icon-screen-smartphone text-primary"></i>
                <h3>Aministration</h3>
                <p class="text-muted">Text ici pour decrire l'administration</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-item"><i class="icon-camera text-primary"></i>
                <h3>Site Pour Le membre</h3>
                <p class="text-muted">We work harder for your comfortuble</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="feature-item"><i class="icon-present text-primary"></i>
                <h3>Text Ici</h3>
                <p class="text-muted">Text ici pour decrire l'administration<</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-item"><i class="icon-lock-open text-primary"></i>
                <h3>Text Ici</h3>
                <p class="text-muted">Text ici pour decrire l'administration< </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cta">
  <div class="cta-content">
    <div class="container">
      <h2>Nous Somme Ensemble Afin de ....</h2>
      <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a></div>
  </div>
  <div class="overlay"></div>
</section>
<section id="contact" class="contact bg-primary">
  <div class="container">
    <h2>We <i class="fa fa-heart"></i> new friends!</h2>
    <ul class="list-inline list-social">
      <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
      <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
      <li class="social-google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
    </ul>
  </div>
</section>
<footer>
  <div class="container">
    <p>Copyright &copy; All Rights Reserved To Watanya</p>
    <p>Developed and designed by  Nihel , Ghalia</p>
    <ul class="list-inline">
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Terms</a></li>
      <li><a href="#">FAQ</a></li>
    </ul>
  </div>
</footer>

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
