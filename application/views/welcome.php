<!DOCTYPE html>
<html>
<head>
    <!-- ==========================
    	Meta Tags 
    =========================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ==========================
    	Title 
    =========================== -->
    <title>Billboard</title>

    <!-- ==========================
    	Favicons 
    =========================== -->
    <link rel="shortcut icon" href="Countdown/icons/favicon.ico">
    <link rel="apple-touch-icon" href="Countdown/icons/icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Countdown/icons/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Countdown/icons/icon-114x114.png">

    <!-- ==========================
    	Fonts 
    =========================== -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
    <!-- ==========================
    	CSS 
    =========================== -->
    <link href="Countdown/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Countdown/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="Countdown/css/animate.css" rel="stylesheet" type="text/css">
    <link href="Countdown/plugins/creative-brands/creative-brands.css" rel="stylesheet" type="text/css">
    <link href="Countdown/css/custom.css" rel="stylesheet" type="text/css">
    <link href="Countdown/plugins/time-circles/TimeCircles.css" rel="stylesheet" type="text/css">
    <link href="Countdown/plugins/vegas/css/jquery.vegas.css" rel="stylesheet" type="text/css">
    <!-- ==========================
    	JS 
    =========================== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<h1>Billboard</h1>

<!-- ==========================
    MODALS - START
=========================== -->
<section id="modal">
    <!-- ==========================
        MODAL SUBSCRIBE - START
    =========================== -->
    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribe" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>Subscribe email</h3>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <img src="Countdown/image/icon1.png" class="img-responsive" alt="" />
                        </div>

                        <div class="col-md-4 col-sm-3 col-xs-8">
                            <p>Want to know when we make progress? Subscribe here for all the latest and greatest!</p>
                        </div>

                        <div class="col-md-6 center-block"><!-- Subscribe form -->
                            <div class="subscribe-wrap">
                                <form class="form-inline" role="form">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                                    </div>
                                    <button type="submit" class="btn btn-submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================
      MODAL SUBSCRIBE - END
       =========================== -->

    <!-- ==========================
     MODAL CONTACT - START
 =========================== -->

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="contact" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>Contact</h3>
                        </div>

                        <div class="col-md-18 col-sm-8"><!-- Google Map -->

                            <section class="" id="google-map">
                                <div id="map-canvas"></div>
                            </section>

                        </div>

                        <div class="col-md-4 col-sm-4"><!-- Address -->
                            <address>
                                <h4>Simon Meurs</h4><br>
                                Henri Regastraat 25<br>
                                3000 Leuven<br>
                                +32(0) 489 326 606
                            </address>

                            <address>
                                <a href="Countdown/mailto:#">simon@simonmeurs.be</a>
                            </address>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========================
       MODAL CONTACT  - END
        =========================== -->

    <!-- ==========================
     MODAL WORK - START
     =========================== -->

    <div class="modal fade" id="work" tabindex="-1" role="dialog" aria-labelledby="work" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-body">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3>About our work</h3>
                        </div>
                        <!-- about our work 1. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="Countdown/image/icon5.png" class="img-responsive" alt="" />
                            <h4>Fancy features</h4>
                            <p class="center-block">Kom in contact met getallenteerde koks.</p>
                        </div>
                        <!-- about our work 2. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="Countdown/image/icon3.png" class="img-responsive" alt="" />
                            <h4>Fully responsive</h4>
                            <p class="center-block">Eender welk device gaat gebruik kunnen maken van de serviced.</p>
                        </div>
                        <!-- about our work 3. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="Countdown/image/icon4.png" class="img-responsive" alt="" />
                            <h4>Pictures</h4>
                            <p class="center-block">Take pictures and post them. We will get on Instagram to relay your hipster-work</p>
                        </div>
                        <!-- about our work 4. column  -->
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <img src="Countdown/image/icon2.png" class="img-responsive" alt="" />
                            <h4>Map integratie</h4>
                            <p class="center-block">Wordt gemakkelijk gevonden door mensen in je buurt, zodat je samen lekker kan tafelen.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========================
       MODAL WORK - END
        =========================== -->

</section>

<!-- ==========================
    MODALS - END
=========================== -->
<!-- ==========================
    CONTENT - START
=========================== -->

<div class="container">
    <div class="row" id="text"><!-- start of row text -->
        <div class="col-md-12">
            <h2>Coming soon</h2>
            <p>In this exact moment we <span class="highlight">working really hard</span> on our new project.
                You can look forward to an amazing service, which completely <span class="highlight">rock your world</span>.
                It's going to literally turn your world upside down. <span class="highlight">So stay tuned</span>.
                For more information visit our website or you can check our <span class="highlight"><i class="fa fa-facebook-square"></i> Facebook</span></p>

            <a class="btn btn-primary" data-toggle="modal" data-target="#subscribe">Subscribe</a>

        </div>
    </div><!-- end of row text -->

    <div class="row countdown"><!-- start of row countdown -->

        <div class="col-md-12"><!-- Line Separator -->
            <div class="line"><h3>How much longer</h3></div>
            <div id="DateCountdown" data-date="2015-12-07 16:00:00"></div><!-- Circle Countdown here you can set up time to countdown just simply change atribute data-date="yyyy-mm-dd time" -->
        </div>

    </div><!-- end of row countdown -->

</div><!-- end of container -->


<!-- ==========================
    FOOTER - START
=========================== -->


<footer class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" href="#">Billboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="brands brands-inline navbar-left">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>



            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#subscribe">Subscribe</a></li>
                <li><a href="#" data-toggle="modal" data-target="#work">Our Work</a></li>
                <li><a href="#" data-toggle="modal" data-target="#contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</footer>

<!-- ==========================
   FOOTER - END
=========================== -->

<!-- ==========================
 JS 
=========================== -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="Countdown/js/bootstrap.min.js"></script>
<script src="Countdown/js/custom.js"></script>
<script src="Countdown/plugins/vegas/js/jquery.vegas.js"></script>
<script src="Countdown/plugins/creative-brands/creative-brands.js"></script>
<script src="Countdown/plugins/time-circles/TimeCircles.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true"></script>


</body>
</html>
