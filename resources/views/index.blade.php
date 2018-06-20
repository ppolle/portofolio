@extends('layouts.base')

@section('content')

 <!-- Navigation start -->

    <header class="header">

        <nav class="navbar navbar-custom" role="navigation">

            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Peter Polle</a>
                </div>

                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">home</a></li>
                        <li><a href="#portfolio">Projects</a></li>
                        <li><a href="#services">Skills</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        
                    </ul>
                </div>

            </div><!-- .container -->

        </nav>

    </header>

    <!-- Navigation end -->

    <!-- Portfolio start -->

    <section id="portfolio" class="module paddingb-none">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="module-header wow fadeInUp">
                        <h2 class="module-title">My projects</h2>
                        <div class="module-line"></div>
                        <!-- <div class="module-subtitle">
                            He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.
                        </div>
                        <div class="module-line"></div> -->
                    </div>

                </div>

            </div><!-- .row -->

            <!-- Portfolio Filter start-->

            <div class="row">

                <div class="col-sm-12">

                    <ul id="filter">
                        <li class="active" data-group="all">All</li>
                    
                    </ul>

                </div>

            </div><!-- .row -->

            <!-- Portfolio Filter end -->

        </div>
        <!-- .contaier -->

       {{--  <ul class="portfolio-items-container">

            <li class="portfolio-item" data-groups="all slideshow">
                <figure>
                    <img src="assets/images/p1-1.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/slideshow.html" class=""></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Slideshow</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

            <li class="portfolio-item" data-groups="all video">
                <figure>
                    <img src="assets/images/p2-2.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/video.html" class="simple-ajax-popup"></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Video</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

            <li class="portfolio-item" data-groups="all image">
                <figure>
                    <img src="assets/images/p3-3.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/image.html" class=""></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Image</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

            <li class="portfolio-item" data-groups="all slideshow">
                <figure>
                    <img src="assets/images/p4-4.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/slideshow.html" class="simple-ajax-popup"></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Slideshow</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

            <li class="portfolio-item" data-groups="all video">
                <figure>
                    <img src="assets/images/p5-5.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/video.html" class="simple-ajax-popup"></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Video</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

            <li class="portfolio-item" data-groups="all image">
                <figure>
                    <img src="assets/images/p6-6.jpg" alt="">
                    <figcaption>
                        <a href="portfolio/image.html" class="simple-ajax-popup"></a>
                        <div class="caption-inner">
                            <h3 class="portfolio-item-title">Some work one</h3>
                            <div class="portfolio-item-desc">Image</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

        </ul>  --}}

     </section>

    <!-- Portfolio end -->

    <!-- Callout start -->

    <section class="callout">
        <div class="container">

            <div class="row">

                <div class="col-md-8 col-lg-6 col-lg-offset-2">
                    <h2>ARE YOU READY TO START?</h2>
                    <div class="callout-decription">
                        I'm currently available for freelance work.
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 callout-btn">
                    <a href="#contact" class="btn btn-lg btn-block btn-custom-1">Contact me</a>
                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- Callout end -->

    <!-- Services start -->

    <section id="services" class="module module-gray">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="module-header wow fadeInUp">
                        <h2 class="module-title">Skills</h2>
                        <div class="module-line"></div>
                        <div class="module-subtitle">
                            I am an experienced Software Engineer with a demonstrated history of working in the information technology and services industry.
                        </div>
                        <div class="module-line"></div>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-3">

                    <div class="iconbox wow bounceIn">
                        <div class="iconbox-icon">
                            <span class="icon-screen-desktop"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title">Front End Development</h3>
                            <div class="iconbox-desc">
                                
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow bounceIn">
                        <div class="iconbox-icon">
                            <span class="icon-directions"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title">Back-End Development</h3>
                            <div class="iconbox-desc">
                                
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow bounceIn">
                        <div class="iconbox-icon">
                            <span class="icon-user"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title">User Support</h3>
                            <div class="iconbox-desc">
                            
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-3">

                    <div class="iconbox wow bounceIn">
                        <div class="iconbox-icon">
                            <span class="icon-equalizer"></span>
                        </div>
                        <div class="iconbox-text">
                            <h3 class="iconbox-title">Search Engine Optimization</h3>
                            <div class="iconbox-desc">
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- Services end -->

    <!-- About start -->

    <section id="about">

        <div class="row position-relative margin-0">

            <div class="col-xs-12 col-md-6 side-image"></div>

            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="module-header module-header-left wow fadeInUp">
                            <h2 class="module-title">About me</h2>
                            <div class="module-subtitle">
                                Experienced Software Engineer with a demonstrated history of working in the information technology and services industry.
                            </div>
                            <div class="module-line"></div>
                        </div>

                    </div>

                </div><!-- .row -->

                <div class="row">

                    <div class="col-sm-6">

                        <div class="iconboxleft wow fadeInUp">
                            <div class="iconboxleft-icon">
                                
                            </div>
                            <div class="iconboxleft-text">
                                <h3 class="iconboxleft-title">Goal Oriented</h3>
                                <div class="iconboxleft-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="iconboxleft wow fadeInUp" data-wow-delay=".2s">
                            <div class="iconboxleft-icon">
                                
                            </div>
                            <div class="iconboxleft-text">
                                <h3 class="iconboxleft-title">Team Player</h3>
                                <div class="iconboxleft-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- .row -->

                <div class="row">

                    <div class="col-sm-6">

                        <div class="iconboxleft wow fadeInUp">
                            <div class="iconboxleft-icon">
                                
                            </div>
                            <div class="iconboxleft-text">
                                <h3 class="iconboxleft-title">Linux User</h3>
                                <div class="iconboxleft-desc">
                                    Thus, then, one of our own noble stamp, even a whaleman, is the tutelary guardian of England.
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="iconboxleft wow fadeInUp" data-wow-delay=".2s">
                            <div class="iconboxleft-icon">
                                
                            </div>
                            <div class="iconboxleft-text">
                                <h3 class="iconboxleft-title">Back-end Ninja</h3>
                                <div class="iconboxleft-desc">
                                    Thus, then, one of our own noble stamp, even a whaleman, is the tutelary guardian of England.
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- .row -->

            </div><!-- col-xs-12 -->

        </div><!-- .row -->
    </section>

    <!-- About end -->

    <!-- Google Map start-->

{{--     <section id="map-section">

        <div id="map"></div>

    </section> --}}

    <!-- Google Map end -->

    <!-- Contact start -->

    <section id="contact" class="module">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <div class="module-header">
                        <h2 class="module-title">Contact</h2>
                        <div class="module-line"></div>
                        <div class="module-subtitle">
                            Do you have any project of opportunity you think we can explore together? Use the form below to hit me up
                        </div>
                        <div class="module-line"></div>
                    </div>

                </div>

            </div><!-- .row -->

            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">

                    <form id="contact-form" role="form">
                        <div class="ajax-hidden">
                            <div class="form-group wow fadeInUp">
                                <label class="sr-only" for="c_name">Name</label>
                                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
                            </div>

                            <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                                <label class="sr-only" for="c_email">Email address</label>
                                <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
                            </div>

                            <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                                <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Your message"></textarea>
                            </div>

                            <button type="submit" class="btn btn-block btn-custom-2 wow fadeInUp" data-wow-delay=".3s">Send it
                            </button>
                        </div>
                        <div class="ajax-response"></div>
                    </form>

                </div>

            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <!-- Contact end -->


@endsection