<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Лучшие туры по Кыргызстану</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap_theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="bootstrap_theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="bootstrap_theme/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap_theme/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Лучшие туры по Кыргызстану</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Галерея</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Контакты</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Главная</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Вход</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong>Туры по Кыргызстану</strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus
                    turpis sit amet est lacinia, in laoreet nulla placerat. Ut turpis tellus, aliquam vel nunc non,
                    malesuada consequat erat.</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Узнать больше</a>
            </div>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">О турах</h2>
                <hr class="light my-4">
                <p class="text-faded mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros
                    magna, tincidunt ut malesuada eget, condimentum vitae augue. Etiam at porta leo, vel eleifend neque.
                    In semper turpis et elit malesuada, quis viverra purus dapibus. Proin arcu ipsum, maximus ac neque
                    ut, posuere mattis purus. Suspendisse potenti. Donec bibendum eleifend venenatis. Praesent maximus,
                    risus sit.</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="{{ route('new') }}">Бронировать сейчас</a>
            </div>
        </div>
    </div>
</section>

<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/hh.jpg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/hh.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/h1.jpg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/h1.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/h2.jpg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/h2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/h3.jpeg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/h3.jpeg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/5.jpg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/5.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="bootstrap_theme/img/portfolio/fullsize/h4.jpg">
                    <img class="img-fluid" src="bootstrap_theme/img/portfolio/thumbnails/h4.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Связаться с вами</h2>
                <hr class="my-4">
                <p class="mb-5">есть вопросы? Позвоните нам или отправьте нам электронное письмо, и мы свяжемся с вами в ближайшее время</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p>+996700909076</p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="mailto:your-email@your-domain.com">adi.ruslanov@gmail.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap core JavaScript -->
<script src="bootstrap_theme/vendor/jquery/jquery.min.js"></script>
<script src="bootstrap_theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="bootstrap_theme/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="bootstrap_theme/vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="bootstrap_theme/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="bootstrap_theme/js/creative.min.js"></script>

</body>

</html>
