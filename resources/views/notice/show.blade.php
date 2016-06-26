@extends('layouts.template')

@section('content')

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <!-- block content -->
                    <div class="block-content">

                        <!-- single-post box -->
                        <div class="single-post-box">

                            <div class="title-post">
                                <h1>{{ $noticia->title }} </h1>
                                <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ $noticia->created_at  }}</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">{{ $noticia->author->name }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>0</span></a></li>
                                    <li><i class="fa fa-eye"></i>{{ $noticia->view_counter }}</li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a>
                                    </li>
                                    <li><a class="twitter" href="#"><i
                                                    class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a>
                                    </li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="post-gallery">
                                <div class="bx-wrapper" style="max-width: 100%;">
                                    <div class="bx-viewport"
                                         style="width: 100%; overflow: hidden; position: relative; height: 375px;">
                                        <ul class="bxslider" style="width: auto; position: relative;">
                                            <li style="float: none; list-style: none; position: absolute; width: 750px; z-index: 50; display: block;">
                                                <img src="{{ $root }}upload\news-posts\single1.jpg" alt=""></li>
                                            <li style="float: none; list-style: none; position: absolute; width: 750px; z-index: 0; display: none;">
                                                <img src="{{ $root }}upload\news-posts\single2.jpg" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="bx-controls bx-has-pager bx-has-controls-direction">
                                        <div class="bx-pager bx-default-pager">
                                            <div class="bx-pager-item"><a href="" data-slide-index="0"
                                                                          class="bx-pager-link active">1</a></div>
                                            <div class="bx-pager-item"><a href="" data-slide-index="1"
                                                                          class="bx-pager-link">2</a></div>
                                        </div>
                                        <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a
                                                    class="bx-next" href="">Next</a></div>
                                    </div>
                                </div>
                                <span class="image-caption">Cras eget sem nec dui volutpat ultrices.</span>
                            </div>

                            <div class="post-content">

                                {!! $noticia->body !!}

                            </div>


                            <div class="post-tags-box">
                                <ul class="tags-box">
                                    <li><i class="fa fa-tags"></i><span>Tags:</span></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Politics</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </div>

                            <div class="share-post-box">
                                <ul class="share-box">
                                    <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i>Share on Facebook</a>
                                    </li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i>Share on Twitter</a>
                                    </li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i><span></span></a>
                                    </li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i><span></span></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="prev-next-posts">
                                <div class="prev-post">
                                    <img src="{{ $root }}upload\news-posts\listw4.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm" title="prev post">Pellentesque odio nisi, euismod
                                                in, pharetra a, ultricies in, diam. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="next-post">
                                    <img src="{{ $root }}upload\news-posts\listw5.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm" title="next post">Donec consectetuer ligula
                                                vulputate sem tristique cursus. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                            <li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="about-more-autor">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#about-autor" data-toggle="tab">About The Autor</a>
                                    </li>
                                    <li>
                                        <a href="#more-autor" data-toggle="tab">More From Autor</a>
                                    </li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="about-autor">
                                        <div class="autor-box">
                                            <img src="{{ $root.'/uploaded/'.$noticia->author->image->name_file }}" alt="">
                                            <div class="autor-content">
                                                <div class="autor-title">
                                                    <h1><span>{{ $noticia->author->name }}</span><a href="autor-details.html">18 Posts</a>
                                                    </h1>
                                                    <ul class="autor-social">
                                                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                                        </li>
                                                        <li><a href="#" class="twitter"><i
                                                                        class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#" class="youtube"><i
                                                                        class="fa fa-youtube"></i></a></li>
                                                        <li><a href="#" class="instagram"><i
                                                                        class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                        </li>
                                                        <li><a href="#" class="dribble"><i
                                                                        class="fa fa-dribbble"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam
                                                    sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem.
                                                    Nullam quis massa sit amet nibh viverra malesuada.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="more-autor">
                                        <div class="more-autor-posts">

                                            <div class="news-post image-post3">
                                                <img src="{{ $root }}upload\news-posts\gal1.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.htm">Donec odio. Quisque volutpat mattis
                                                            eros.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{ $root }}upload\news-posts\gal2.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.htm">Nullam malesuada erat ut turpis. </a>
                                                    </h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{ $root }}upload\news-posts\gal3.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.htm">Suspendisse urna nibh.</a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="news-post image-post3">
                                                <img src="{{ $root }}upload\news-posts\gal4.jpg" alt="">
                                                <div class="hover-box">
                                                    <h2><a href="single-post.htm">Donec nec justo eget felis facilisis
                                                            fermentum. Aliquam </a></h2>
                                                    <ul class="post-tags">
                                                        <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- carousel box -->
                            <div class="carousel-box owl-wrapper">
                                <div class="title-section">
                                    <h1><span>You may also like</span></h1>
                                </div>
                                <div class="owl-carousel owl-theme" data-num="3" style="opacity: 1; display: block;">

                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper"
                                             style="width: 2024px; left: 0px; display: block; transition: all 1000ms ease; transform: translate3d(0px, 0px, 0px);">
                                            <div class="owl-item" style="width: 253px;">
                                                <div class="item news-post image-post3">
                                                    <img src="{{ $root }}upload\news-posts\2.jpg" alt="">
                                                    <div class="hover-box">
                                                        <h2><a href="single-post.htm">Donec odio. Quisque volutpat
                                                                mattis eros.</a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 253px;">
                                                <div class="item news-post image-post3">
                                                    <img src="{{ $root }}upload\news-posts\3.jpg" alt="">
                                                    <div class="hover-box">
                                                        <h2><a href="single-post.htm">Nullam malesuada erat ut
                                                                turpis. </a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 253px;">
                                                <div class="item news-post video-post">
                                                    <img src="{{ $root }}upload\news-posts\4.jpg" alt="">
                                                    <a href="https://www.youtube.com/watch?v=LL59es7iy8Q"
                                                       class="video-link"><i class="fa fa-play-circle-o"></i></a>
                                                    <div class="hover-box">
                                                        <h2><a href="single-post.htm">Lorem ipsum dolor sit consectetuer
                                                                adipiscing elit. Donec odio. </a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 253px;">
                                                <div class="item news-post image-post3">
                                                    <img src="{{ $root }}upload\news-posts\2.jpg" alt="">
                                                    <div class="hover-box">
                                                        <h2><a href="single-post.htm">Donec nec justo eget felis
                                                                facilisis fermentum. Aliquam </a></h2>
                                                        <ul class="post-tags">
                                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="owl-controls clickable">
                                        <div class="owl-pagination">
                                            <div class="owl-page active"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                        <div class="owl-buttons">
                                            <div class="owl-prev"></div>
                                            <div class="owl-next"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End carousel box -->

                            <!-- contact form box -->
                            <div class="contact-form-box">
                                <div class="title-section">
                                    <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span>
                                    </h1>
                                </div>
                                <form id="comment-form">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name">Name*</label>
                                            <input id="name" name="name" type="text">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="mail">E-mail*</label>
                                            <input id="mail" name="mail" type="text">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="website">Website</label>
                                            <input id="website" name="website" type="text">
                                        </div>
                                    </div>
                                    <label for="comment">Comment*</label>
                                    <textarea id="comment" name="comment"></textarea>
                                    <button type="submit" id="submit-contact">
                                        Post Comment
                                    </button>
                                </form>
                            </div>
                            <!-- End contact form box -->

                        </div>
                        <!-- End single-post box -->

                    </div>
                    <!-- End block content -->

                </div>

                <div class="col-sm-4">

                    <!-- sidebar -->
                    <div class="sidebar">

                        <div class="widget social-widget">
                            <div class="title-section">
                                <h1><span>Stay Connected</span></h1>
                            </div>
                            <ul class="social-share">
                                <li>
                                    <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                    <span class="number">9,455</span>
                                    <span>Subscribers</span>
                                </li>
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <span class="number">56,743</span>
                                    <span>Fans</span>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <span class="number">43,501</span>
                                    <span>Followers</span>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                    <span class="number">35,003</span>
                                    <span>Followers</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget tab-posts-widget">

                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#option1" data-toggle="tab">Popular</a>
                                </li>
                                <li>
                                    <a href="#option2" data-toggle="tab">Recent</a>
                                </li>
                                <li>
                                    <a href="#option3" data-toggle="tab">Top Reviews</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="option1">
                                    <ul class="list-posts">
                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Sed arcu. Cras consequat. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Donec consectetuer ligula vulputate sem
                                                        tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Nam nulla quam, gravida non, commodo a,
                                                        sodales sit amet, nisi. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="option2">
                                    <ul class="list-posts">

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Donec consectetuer ligula vulputate sem
                                                        tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Nam nulla quam, gravida non, commodo a,
                                                        sodales sit amet, nisi.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="option3">
                                    <ul class="list-posts">

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw4.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Donec consectetuer ligula vulputate sem
                                                        tristique cursus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw1.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Pellentesque odio nisi, euismod in,
                                                        pharetra a, ultricies in, diam. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw3.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Phasellus ultrices nulla quis nibh.
                                                        Quisque a lectus. </a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw2.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Sed arcu. Cras consequat.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <img src="{{ $root }}upload\news-posts\listw5.jpg" alt="">
                                            <div class="post-content">
                                                <h2><a href="single-post.htm">Nam nulla quam, gravida non, commodo a,
                                                        sodales sit amet, nisi.</a></h2>
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="widget post-widget">
                            <div class="title-section">
                                <h1><span>Most Commented</span></h1>
                            </div>
                            <ul class="list-posts">
                                <li>
                                    <img src="{{ $root }}upload\news-posts\listw4.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm">Donec consectetuer ligula vulputate sem tristique
                                                cursus. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="{{ $root }}upload\news-posts\listw1.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm">Pellentesque odio nisi, euismod in, pharetra a,
                                                ultricies in, diam. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="{{ $root }}upload\news-posts\listw3.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm">Phasellus ultrices nulla quis nibh. Quisque a
                                                lectus. </a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="{{ $root }}upload\news-posts\listw2.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm">Sed arcu. Cras consequat.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <img src="{{ $root }}upload\news-posts\listw5.jpg" alt="">
                                    <div class="post-content">
                                        <h2><a href="single-post.htm">Nam nulla quam, gravida non, commodo a, sodales
                                                sit amet, nisi.</a></h2>
                                        <ul class="post-tags">
                                            <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="advertisement">
                            <div class="desktop-advert">
                                <span>Advertisement</span>
                                <img src="{{ $root }}upload\addsense\300x250.jpg" alt="">
                            </div>
                            <div class="tablet-advert">
                                <span>Advertisement</span>
                                <img src="{{ $root }}upload\addsense\200x200.jpg" alt="">
                            </div>
                            <div class="mobile-advert">
                                <span>Advertisement</span>
                                <img src="{{ $root }}upload\addsense\300x250.jpg" alt="">
                            </div>
                        </div>

                    </div>
                    <!-- End sidebar -->

                </div>

            </div>

        </div>
    </section>

@endsection