<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vraipro: Landing Page | Med Nabouli</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Med Nabouli" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <link rel="stylesheet" href="css/vraipro.css">
  </head>

  <body>

    <!-- Navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <span class=""><img src="img/logo.png"></span>
          <span class="sr-only">Vraipro</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="https://vraipro.ca" target="_blank">Vraipro INC</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section
    ================================================== -->

    <header id="landioCarousel" class="carousel carousel-header slide bg-inverse" data-ride="carousel" data-interval="0" role="banner">
      <ol class="carousel-indicators">
        <li data-target="#landioCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#landioCarousel" data-slide-to="1"></li>
        <li data-target="#landioCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url(img/bg-header.jpg);">
          <div class="carousel-caption">
            <h1 class="display-3">TROUVEZ LE BON PRO POUR VOS TRAVAUX</h1>
            <h2 class="m-b-3 hidden-sm-down"><em>Découvrez rapidement</em> qui est disponible près de vous <a href="index.html" class="jumbolink">Vraipro</a>.</h2>
            <a class="btn btn-secondary-outline m-b-2" href="http://vraipro.ca" role="button"><span class="icon-sketch"></span>Voir les pros</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(img/bg-header-3.jpg);">
          <div class="carousel-caption">
             <h1 class="display-3">TROUVEZ LE BON PRO POUR VOS TRAVAUX</h1>
            <h2 class="m-b-3 hidden-sm-down"><em>Découvrez rapidement</em> qui est disponible près de vous <a href="index.html" class="jumbolink">Vraipro</a>.</h2>
           <a class="btn btn-secondary-outline m-b-2" href="http://vraipro.ca" role="button"><span class="icon-sketch"></span>Voir les pros</a>
          </div>
        </div>
        <div class="carousel-item" style="background-image: url(img/bg-header-2.jpg);">
          <div class="carousel-caption">
             <h1 class="display-3">TROUVEZ LE BON PRO POUR VOS TRAVAUX</h1>
            <h2 class="m-b-3 hidden-sm-down"><em>Découvrez rapidement</em> qui est disponible près de vous <a href="index.html" class="jumbolink">Vraipro</a>.</h2>
           <a class="btn btn-secondary-outline m-b-2" href="http://vraipro.ca" role="button"><span class="icon-sketch"></span>Voir les pros</a>
          </div>
        </div>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
      </div>
    </header>

    <!-- Intro
    ================================================== -->

    <section class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">COMMENT ÇA FONCTIONNE</h3>
        <img src="img/mock.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>

    <!-- Features
    ================================================== -->

    <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-pen display-1"></span>
                <h4 class="card-title">+250</h4>
                <h6 class="card-subtitle text-muted">Projets</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-thunderbolt display-1"></span>
                <h4 class="card-title">+300</h4>
                <h6 class="card-subtitle text-muted">Pros</h6>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-heart display-1"></span>
                <h4 class="card-title">1 min</h4>
                <h6 class="card-subtitle text-muted">Temps de réponse</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Videos
    ================================================== -->

    <section class="section-video bg-inverse text-xs-center wp wp-4">
      <h3 class="sr-only">Video</h3>
      <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="img/video-poster.jpg" data-setup='{}'>
        <source src="media/video.mp4" type='video/mp4'>
        <source src="media/video.webm" type='video/webm'>
      </video>
    </section>

    <!-- Pricing
    ================================================== -->

    <section class="section-pricing bg-faded text-xs-center">
      <div class="container">
        <h3>Gérer vos abonnements</h3>
        <div class="row p-y-3">
          <div class="col-md-4 p-t-md wp wp-5">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Lite
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">29.99</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
			  <form action="charge.php" method="post">
<!-- Customer Info -->
      <script src="https://checkout.stripe.com/v2/checkout.js"
              class="stripe-button"
			  data-image="img/logo.png"
			  data-name="Vraipro"
			  data-billing-address=""
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-amount="2999"
              data-description="Monthly's subscription">
      </script>
</form>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best p-x-0">
              <div class="card-header text-uppercase">
                Professional
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">280</span>
                  <small class="text-muted text-uppercase">/year</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
                <li class="list-group-item">Sed risus feugiat</li>
              </ul>
			  <form action="charge2.php" method="post">
<!-- Customer Info -->
      <script src="https://checkout.stripe.com/v2/checkout.js"
              class="stripe-button"
			  data-image="img/logo.png"
			  data-name="Vraipro"
			  data-billing-address=""
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-amount="28000"
              data-description="Year's subscription">
      </script>
</form>
            </div>
          </div>
          <div class="col-md-4 p-t-md wp wp-6">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Engager
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">117</span>
                  <small class="text-muted text-uppercase">/trimestre</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
			  <form action="charge3.php" method="post">
<!-- Customer Info -->
      <script src="https://checkout.stripe.com/v2/checkout.js"
              class="stripe-button"
			  data-image="img/logo.png"
			  data-name="Vraipro"
			  data-billing-address=""
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-amount="11700"
              data-description="trimestre's subscription">
      </script>
</form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials
    ================================================== -->

    <section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="img/face1.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Good design at the front-end suggests that everything is in order at the back-end, whether or not that is the case.</p>
                <footer>Dmitry Fadeyev</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face2.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">It’s not about knowing all the gimmicks and photo tricks. If you haven’t got the eye, no program will give it to you.</p>
                <footer>David Carson</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face3.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">There’s a point when you’re done simplifying. Otherwise, things get really complicated.</p>
                <footer>Frank Chimero</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face4.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Designing for clients that don’t appreciate the value of design is like buying new tires for a rental car.</p>
                <footer>Joel Fisher</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Every picture owes more to other pictures painted before than it owes to nature.</p>
                <footer>E.H. Gombrich</footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li class="active"><img src="img/face1.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
            <li><img src="img/face2.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
            <li><img src="img/face3.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
            <li><img src="img/face4.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
            <li><img src="img/face5.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="4" class="img-fluid img-circle"></li>
          </ol>
        </div>
      </div>
    </section>

    <!-- Footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
	            <span class="media-object display-1"><img src="img/logo.png"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Vraipro INC 2014-2017. <br>
                Developed by Med Nabouli.
                </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>
