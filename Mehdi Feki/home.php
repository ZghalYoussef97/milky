<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RedCaynne</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       
        <!--================End Footer Area =================-->
       
        
        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="img/logo-1.png" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.html">Home</a></li>
                              <li><a  href="index.php?q=product">Menu</a></li>
                            <li class="dropdown submenu">
                            </li>
                       
                            <li class="dropdown submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?q=product&category=POULET">POULET</a></li>
                                    <li><a href="index.php?q=product&category=POISSON">POISSON</a></li>
                                    <li><a href="index.php?q=product&category=VIANDE">VIANDE</a></li>
                                    <li><a href="index.php?q=product&category=VEGETARIEN">VEGETARIEN</a></li>
                                    <li><a href="index.php?q=product&category=COCKTAIL">COCKTAIL</a></li>
                                </ul>
                            </li>
                    
                               
                            </li>
                            <li><a href="index.php?q=contact">Contact US</a></li>
                            <li> <a  href="login.php"> login </a></li>
                            <?php if (isset($_SESSION['CUSID'] )) { ?>  
                                <a class="event_btn" href="logout.php"><i class="fa fa-lock"></i> Logout</a>
                                <li><a   href="index.php?q=profile" >Account</a></li>
                                
                              <?php }else{ ?> 
                              <a class="event_btn" href="login.php"><i class="fa fa-lock"></i> Login</a>
                            <?php } ?>
                            <a class="event_btn" href="index.php?q=cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a>
                        </ul>
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->
        
     


        <!--================Our Chefs Area =================-->

        <!--================End Our Chefs Area =================-->
        <section class="most_popular_item_area" >
          
            </section>
        <!--================End Our Chefs Area =================-->

   
     
        <section class="most_popular_item_area">
            <div class="container">
                <div class="s_white_title">
                    <h3>Our Products</h3>
                    <h2>Today's Menu</h2>
                </div>
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                        <div class="col-md-6 break snacks">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="index.php?q=cart">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 break coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 lunch snacks">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 lunch dinner">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 break coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 break coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-6.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 lunch coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-7.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 dinner snacks">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-8.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 dinner coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-9.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 dinner coffee">
                            <div class="media">
                                <div class="media-left">
                                    <img src="img/recype/recype-10.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h3>Vegetable Flavour</h3></a>
                                    <h4>$32</h4>
                                    <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                                    <a class="read_mor_btn" href="#">Add To Cart</a>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-half-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Our feature Area =================-->
        
        
      
        
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                    <h4>ABOUT RedCayenne</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ut.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <p>Have questions, comments or just want to say hello:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i>backpiper.com@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>+88 01911 854 378</a></li>
                                    <li><a href="#"><i class="fa fa-map-marker"></i>5001 E. Colorado Blvd. Suite 820,<br /> Pasadena, CA 91106</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget twitter_widget">
                                <div class="f_w_title">
                                    <h4>Twitter Feed</h4>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                    <li>
                                        <a href="#">@_sumonrahman:</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget gallery_widget">
                                <div class="f_w_title">
                                    <h4>Gallery On Flickr</h4>
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-1.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-2.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-3.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-4.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-5.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                    <li><a href="#"><img src="img/gallery/f-w-gallery/f-w-gallery-6.jpg" alt=""><i class="fa fa-search"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></h5>
                    </div>
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Menu</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Reservation</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="index.php?q=contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Recent Blog Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        <!--gmaps Js-->
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->
<!--        <script src="js/gmaps.min.js"></script>-->
        
        
<!--        <script src="js/video_player.js"></script>-->
        <script src="js/theme.js"></script>
    </body>
</html>