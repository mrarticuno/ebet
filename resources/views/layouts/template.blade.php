<!doctype html>
<html lang="pt" class="no-js">
<head>
    <title>Portal E-Sports BR</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\jquery.bxslider.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\magnific-popup.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\owl.theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\css\ticker-style.css">
    <link rel="stylesheet" type="text/css" href="assets\css\style.css" media="screen">

</head>
<body>

<!-- Container -->
<div id="container">

    <!-- Header
        ================================================== -->
    <header class="clearfix">
        <!-- Bootstrap navbar -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">

            <!-- Top line -->
            <div class="top-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="top-line-list">
                                <li>
                                    <span class="city-weather">{{ $userInfo['city'] }}, {{ $userInfo['state'] }}</span>
                                </li>
                                <li><span class="time-now">{{ (date("d/m/y")) }} &nbsp; {{ date("H:m") }}</span></li>
                                @if(Auth::check())
                                    <li><a href="./admin">Admin</a></li>
                                @else
                                    <li><a href="./login">Log In</a></li>
                                @endif
                                <li><a href="contact.htm">Contato</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="social-icons">
                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top line -->

            <!-- Logo & advertisement -->
            <div class="logo-advertisement">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./"><img src="assets\images\logo.png" alt=""></a>
                    </div>

                    <div class="advertisement">
                        <div class="desktop-advert">
                            <img src="upload\addsense\468x60.jpg" alt="">
                        </div>
                        <div class="tablet-advert">
                            <img src="upload\addsense\468x60.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Logo & advertisement -->

            <!-- navbar list container -->
            <div class="nav-list-container">
                <div class="container">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">

                            <li><a class="active" href="index-1.htm">Inicio</a></li>
                            <li><a href="game-category.htm">Notícias</a></li>
                            <li class="drop-arrow"><a href="game-category.htm">Reviews</a>
                                <div class="megadropdown">
                                    <div class="container">
                                        <div class="inner-megadropdown">

                                            <div class="owl-wrapper">
                                                <div class="owl-carousel" data-num="5">

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st1.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec odio. Quisque volutpat mattis eros. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st2.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st3.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st4.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec nec justo eget felis facilisis fermentum. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st5.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec nec justo eget felis facilisis fermentum. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="game-category.htm">Videos</a></li>
                            <li><a href="game-category.htm">Fórum</a></li>
                            <li class="drop-arrow"><a href="game-category.htm">IDM Gaming</a>
                                <div class="megadropdown">
                                    <div class="container">
                                        <div class="inner-megadropdown">

                                            <div class="owl-wrapper">
                                                <div class="owl-carousel" data-num="5">

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st1.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec odio. Quisque volutpat mattis eros. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st2.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st3.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st4.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec nec justo eget felis facilisis fermentum. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="item news-post standard-post">
                                                        <div class="post-gallery">
                                                            <img src="upload\news-posts\st5.jpg" alt="">
                                                            <div class="rate-level">
                                                                <p><span>7.4</span> Good</p>
                                                            </div>
                                                        </div>
                                                        <div class="post-content">
                                                            <h2><a href="single-post.htm">Donec nec justo eget felis facilisis fermentum. </a></h2>
                                                            <ul class="post-tags">
                                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                                <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="drop-arrow drop"><a href="games-category.html">IDM</a>
                                <ul class="dropdown">
                                    <li><a href="game-category.htm">Sobre</a></li>
                                    <li><a href="game-category.htm">Contato</a></li>
                                </ul>
                            </li>

                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <input type="text" id="search" name="search" placeholder="Pesquisar">
                            <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <!-- End navbar list container -->

        </nav>
        <!-- End Bootstrap navbar -->

    </header>
    <!-- End Header -->

    <!-- ticker-news-section
        ================================================== -->
    <section class="ticker-news">

        <div class="container">
            <div class="ticker-news-box">
                <span class="breaking-news">ultimas noticias</span>
                <span class="new-news">Novo</span>
                <ul id="js-news">
                    <li class="news-item"><span class="time-news">22:54 pm</span>  <a href="#">Infográfico: Revolta tem KDA 38 na 3ª Semana do CBLoL 2016</a> </li>
                    <li class="news-item"><span class="time-news">22:30 pm</span>  <a href="#">Gerente da Riot Brasil não descarta alterar regra de perda de pontos no CBLoL</a> </li>
                    <li class="news-item"><span class="time-news">21:36 pm</span>  <a href="#">Juíza nega segredo de justiça em processo do caso Loop </a></li>
                    <li class="news-item"><span class="time-news">20:00 am</span>  <a href="#">FORG1VEN anuncia pausa na carreira por tempo indeterminado</a> </li>
                </ul>
            </div>
        </div>

    </section>
    <!-- End ticker-news-section -->

    @yield('content')

    <!-- footer
        ================================================== -->
    <footer>
        <div class="container">
            <div class="footer-widgets-part">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget text-widget">
                            <h1>About</h1>
                            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. </p>
                            <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. </p>
                        </div>
                        <div class="widget social-widget">
                            <h1>Stay Connected</h1>
                            <ul class="social-icons">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget posts-widget">
                            <h1>Random Post</h1>
                            <ul class="list-posts">
                                <li>
                                    <img src="upload\news-posts\listw4.jpg" alt="">
                                    <div class="post-content">
                                        <a href="game-category.htm">x-box</a>
                                        <h2><a href="single-post.htm">Pellentesque odio nisi, euismod in ultricies in, diam. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="upload\news-posts\listw1.jpg" alt="">
                                    <div class="post-content">
                                        <a href="game-category.htm">PS4</a>
                                        <h2><a href="single-post.htm">Sed arcu. Cras consequat.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="upload\news-posts\listw3.jpg" alt="">
                                    <div class="post-content">
                                        <a href="game-category.htm">other</a>
                                        <h2><a href="single-post.htm">Phasellus ultrices nulla quis nibh. Quisque a lectus.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget tags-widget">
                            <h1>Popular Tags</h1>
                            <ul class="tag-list">
                                <li><a href="#">News</a></li>
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Music</a></li>
                            </ul>
                        </div>

                        <div class="widget subscribe-widget">
                            <form class="subscribe-form">
                                <h1>Subscribe to RSS Feeds</h1>
                                <input type="text" name="subscribe" id="subscribe" placeholder="Email">
                                <button type="submit">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </button>
                                <p>Get all latest content delivered to your email a few times a month.</p>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget flickr-widget">
                            <h1>Flickr Photos</h1>
                            <ul class="flickr-list">
                                <li><a href="#"><img src="upload\flickr\1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="upload\flickr\2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="upload\flickr\3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="upload\flickr\4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="upload\flickr\5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="upload\flickr\6.jpg" alt=""></a></li>
                            </ul>
                            <a href="#">View more photos...</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-last-line">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; COPYRIGHT {{ (date("Y")) }} ilhadamacacada.net by GMLYRANetwork</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="index-1.htm">Inicio</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.htm">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

</div>
<!-- End Container -->

<script type="text/javascript" src="assets\js\ads.js"></script>
<script>
    if( window.canRunAds === undefined ){
        window.location = './nope';
    }
</script>

<script type="text/javascript" src="assets\js\jquery.min.js"></script>
<script type="text/javascript" src="assets\js\jquery.migrate.js"></script>
<script type="text/javascript" src="assets\js\jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets\js\jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets\js\bootstrap.min.js"></script>
<script type="text/javascript" src="assets\js\jquery.ticker.js"></script>
<script type="text/javascript" src="assets\js\jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="assets\js\jquery.isotope.min.js"></script>
<script type="text/javascript" src="assets\js\owl.carousel.min.js"></script>
<script type="text/javascript" src="assets\js\retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets\js\plugins-scroll.js"></script>
<script type="text/javascript" src="assets\js\script.js"></script>

</body>
</html>