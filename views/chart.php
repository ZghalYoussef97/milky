
<?php
session_start();  
  include_once '../core/produitC.php';
    $produit = new ProduitC();
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BBN | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="css/stat.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
<body  class="nav-md">
   <div class="container body"  >
      <div class="main_container" >
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>BBN!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION['username']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3> <?php echo $_SESSION['email']; ?></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-archive"></i> Gestion des Produits <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="afficherproduit.php"> Tous Les Produits</a></li>
                      <li><a href="ajouterproduit.php"> Ajouter Produits</a></li>
                      <li><a href="affichercategorie.php"> Tous Les Categories</a></li>
                      <li><a href="ajoutercategorie.php"> Ajouter Categories</a></li>
                      <li><a href="chart.php"> Afficher Statistiques</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-shopping-cart"></i> Gestion Commandes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="affichercommande.php"> Consulter Les Commandes</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck"></i> Conseil du Jour <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="afficherconseil.php">Afficher Conseil</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Gestion Comptes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="affichercomptes.php"> Tous Les Comptes</a></li>
                      <li><a href="ajoutercompte.php"> Ajouter Manager</a></li>
                      <li><a href="reactivation.php">Demande de Réactivation</a></li>
                      <li><a href="afficherstat.php">Visualiser Statistiques</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Gestion Marketing <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#"> Tous Les Comptes</a></li>
                      <li><a href="#"> Ajouter Manager</a></li>
                      <li><a href="index2.html">Modifier Comptes</a></li>
                      <li><a href="index3.html">Supprimer Comptes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-envelope"></i> Gestion Reclamations<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="afficherRec.php"> Tous Les Reclamations</a></li>
                      <li><a href="affichervisite.php">Afficher Les Visites</a></li>

                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck"></i> Gestion Livraisons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#"> Tous Les Livraisons</a></li>
                      <li><a href="index2.html">Régler Livraisons</a></li>
                      <li><a href="index3.html">Supprimer Livraisons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-exclamation-circle"></i> Conseil du jour <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ajouterconseil.php"> Ajouter un conseil </a></li>
                  
                      <li><a href="afficherconseil.php">Afficher les conseils  </a></li>
                    </ul>
                  </li>
                </ul>
              </div>


            </div>
            <!-- /sidebar menu -->


          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>


                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->

                <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <h1>Statistiques de rating sur les produits</h1><br><br>
          

         

           <div class="rating">


      <span class="rating-num"><?php $total=$produit->trierProduit($_GET['id']) ;
      foreach ($total as $key) {
        echo round($key['moyenne'],1);
        $moyenne=$key['moyenne'];
       } ?></span>
      <div class="rating-stars">
        <?php for ($i=0; $i <$moyenne; $i++) { 
          # code...
        ?>
        <span><i class="active icon-star"></i></span> <?php } ?>
        <?php do  { ?>

        <span><i class=" icon-star"></i></span> <?php $i++; } while($i<5);?>

      </div>
      <div class="rating-users">
        <i class="icon-user"></i> <?php $p=$produit->count($_GET['id']);
        foreach ($p as $key ) {
          $count=$key['count'];
          echo $key['count'];

         }  ?> total
      </div>
    </div>





    <div class="histo">
      <div class="five histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 5           </span>
        <span class="bar-block">
          <span id="bar-five" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],4,5);
        foreach ($c as $keyc ) {
          $countinter1= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval1=((($countinter1/$count)*100)+10);
          }else{
 $counttotalinterval1=10;

          }

          ?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="four histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 4           </span>
        <span class="bar-block">
          <span id="bar-four" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],3,4);
        foreach ($c as $keyc ) {
$countinter2= $keyc['count'];
          echo $keyc['count'];
         }if($count!=0){ $counttotalinterval2=((($countinter2/$count)*100)+10);

          }else{
 $counttotalinterval2=10;

          }?></span>&nbsp;
          </span> 
        </span>
      </div> 
      
      <div class="three histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 3           </span>
        <span class="bar-block">
          <span id="bar-three" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],2,3);
        foreach ($c as $keyc ) {
          $countinter3= $keyc['count'];
          echo $keyc['count'];
         }if($count!=0){ $counttotalinterval3=((($countinter3/$count)*100)+10);


          }else{
 $counttotalinterval3=10;

          }?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="two histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 2           </span>
        <span class="bar-block">
          <span id="bar-two" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],1,2);
                foreach ($c as $keyc ) {
        $countinter4= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval4=((($countinter4/$count)*100)+10);
 }else{
 $counttotalinterval4=10;}
          ?></span>&nbsp;
          </span> 
        </span>
      </div>
      
      <div class="one histo-rate">
        <span class="histo-star">
          <i class="active icon-star"></i> 1           </span>
        <span class="bar-block">
          <span id="bar-one" class="bar">
            <span><?php $c=$produit->countstat($_GET['id'],0,1);
                foreach ($c as $keyc ) {
        $countinter5= $keyc['count'];
          echo $keyc['count'];
         } if($count!=0){ $counttotalinterval5=((($countinter5/$count)*100)+10);
          }else{
 $counttotalinterval5=10;}?></span>&nbsp;
          </span> 
        </span>
      </div>
    </div>

   </div>
            </div>
            </div>

        <!-- /page content -->


                  
        <!-- footer content -->
        <footer>
          <div class="pull-right">
           BBN - Developped By W-Product.
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('.bar span').hide();
  $('#bar-five').animate({
     width: '<?php echo $counttotalinterval1 ?>%'}, 1000);
  $('#bar-four').animate({
     width: '<?php echo $counttotalinterval2 ?>%'}, 1000);
  $('#bar-three').animate({
     width: '<?php echo $counttotalinterval3 ?>%'}, 1000);
  $('#bar-two').animate({
     width: '<?php echo $counttotalinterval4 ?>%'}, 1000);
  $('#bar-one').animate({
     width: '<?php echo $counttotalinterval5 ?>%'}, 1000);
  
  setTimeout(function() {
    $('.bar span').fadeIn('slow');
  }, 1000);
  
});</script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>


