<?php 
  $cnx = new PDO('mysql:host=localhost;dbname=autositedb', 'root', '');
?>
<!-- icon list--><!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <head>
    <!-- Site Title-->
    <title>Voitures neuves</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="text-center page">
      <!-- Page preloader-->
      <div class="page-loader">
        
      </div>
      <!-- Page Header-->
      <header class="page-header" style="padding-bottom: 24px">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-top-panel rd-navbar-collapse">
              <div class="rd-navbar-top-panel-inner">
                <div class="left-side">
                  <div class="dropdown">
                    <button type="button" class="btn btn-outline--primary dropdown-toggle" data-toggle="dropdown">
                    Langages <i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#"><i class=""></i>Français</a><br>
                      <a class="dropdown-item" href="#"><i class=""></i>English</a><br>
                      <a class="dropdown-item" href="#"><i class=""></i> Néerlandais</a>
                    </div>
                  </div>
                </div>
                <div class="center-side">
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand fullwidth-brand"><a class="brand-name" href="index.php"><img src="images/logo-default-314x48.png" alt="" width="314" height="48"/></a></div>
                </div>
                <div class="right-side">
                  <!-- Contact Info-->
                  <div class="contact-info">
                    <div class="unit unit-middle unit-horizontal unit-spacing-xs">
                      <div class="unit__left"><span class="icon icon-primary text-middle mdi mdi-phone"></span></div>
                      <div class="unit__body"><a class="text-middle" href="tel:#">+1 (409) 987–5874</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar collapse toggle-->
                <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand mobile-brand"><a class="brand-name" href="index.php"><img src="images/logo-default-314x48.png" alt="" width="314" height="48"/></a></div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-nav-scroll-holder">
                    <ul class="rd-navbar-nav">
                      <li><a href="occasions.php">VOITURES<br> D'OCCASION</a>
                      </li>
                      <li><a href="neuves.php">VOITURES<br> NEUVES</a>
                      </li>
                      <!--<li><a href="direction.php">VEHICULES<br> DE DIRECTION</a>
                      </li>-->
                      <li><a href="he.php">HYBRIDES ET<br> ELECTRIQUES</a>
                      </li>
                      <!--<li><a href="typography.php">FINANCEMENT<br> VOITURE</a>
                      </li>-->
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- Breadcrumbs & Page title-->
      <section class="section-md text-center bg-image breadcrumbs-01">
        <div class="shell shell-fluid">
          <div class="range range-xs-center">
            <div class="cell-xs-12 cell-xl-11">
              <h2 class="text-white">DÉCOUVREZ NOS OFFRES DE VOITURES NEUVES</h2>
              <ul class="breadcrumbs-custom">
                <li><a href="index.php">ACCUEIL</a></li>
                <li class="active">VOITURES NEUVES</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

    <div class="cars_board">  
      <div class="col-md-2">
        <h6><i class="fa-angle-double-right">Toutes nos marques de voitures neuves</i></h6>
      </div>

      <div class="col-md-10 cars_board_board">
        
        <section class="">
          <div class="shell">
            <div class="range range-30" data-lightgallery="group">
              <?php
                $sql= $cnx->prepare("SELECT * FROM cars WHERE categorie = 'neuf'");
                $req = $sql->execute();
                while($data = $sql->fetch()){
              ?>
              <!--div class="col-sm-6 col-md-4" style="border: 1px solid gray; padding: 5px;"><a class="thumbnail-classic" href="cardetail.php?id=<?php //echo $data['id'] ?>">
                  <img src="<?php //echo $data['imgp']?>" alt="" width="200" height="200"/>
                  <div class="caption">
                    <p class="caption-title"><?php //echo $data['marque']; ?> <?php //echo $data['modele']; ?></p>
                    <p class="caption-text"><?php //echo utf8_encode($data['couleur']); ?></p>
                    <p class="caption-text"><?php //echo utf8_encode($data['boitevitesse']); ?></p>
                  </div>                
                  <h6><?php //echo $data['marque']; ?></h6>
                  <p><?php //echo utf8_encode($data['carburant']) ?>/ <?php //echo utf8_encode($data['boitevitesse']) ?>/ <?php //echo utf8_encode($data['vitessemax']) ?> |  Couleur: <?php //echo utf8_encode($data['couleur']) ?></p>
                  <div class="carac-i"><i class="fa-bluetooth"></i><span><i class="fa-bluetooth"></i></span><i class="fa-bluetooth"></i><i class="fa-bluetooth"></i><i class="fa-bluetooth"></i></div>
                  <p>Prix catalogue: </p>
                  <a href="cardetail.php?id=<?php //echo $data['id'] ?>">EN SAVOIR +</a>
                  </a>
              </div>-->
              <div class="col-sm-6 ol-md-3 carac-box">
                <a href="cardetail.php?id=<?php echo $data['id'] ?>">
                <div class="thumbnail-classic">
                  <img src="<?php echo $data['imgp']?>" alt="" width="200" height="150"/>
                  <div class="caption" style="padding-right: 20px; padding-left: 20px; padding-top: 50px;padding-bottom: 20px;">
                      <p class="caption-title"><?php echo $data['marque']; ?> <?php echo $data['modele']; ?></p>
                      <p class="caption-text"><?php echo utf8_encode($data['couleur']); ?></p>
                  </div>
                </div>
                <div class="col-md-12 carac-div"><h5><?php echo $data['marque']; ?></h5><span class="to-right backgrounded-1 very-small">NEUF</span><h6><?php echo $data['modele'];?></h6>
                <p></p>
                </div>
                <div class="col-md-12 carac-div very-small"><p><?php echo utf8_encode($data['carburant']) ?>/ <?php echo utf8_encode($data['boitevitesse']) ?>/ <?php echo utf8_encode($data['puissancereelle']) ?></p></div>
                <div class="col-md-12 carac-div price-info">Prix catalogue: <?php echo utf8_encode($data['prixcat']) ?>€<br>
                Notre offre: <span class="to-right">À partir de:</span><br><span class="very-big"><?php echo utf8_encode($data['prixttc']) ?>€</span><span class="to-right backgrounded"><?php echo utf8_encode($data['prixmois']) ?>€/ mois</span></div>
                
                <div class="carac-div-end"><hr>EN SAVOIR +</div>
                </a>
              </div>
                <?php } ?>
              
            </div>
          </div>
        </section>
      </div>
    </div>
      
    <section class="section section-md bg-secondary-1 text-center text-sm-left">
      <h3>Nos Engagements</h3>
      <img src="images/bande_engagement.jpg" class="img-responsive">
    </section>
<!-- Page Footer-->
<footer class="page-footer text-left text-sm-left">
  <div class="shell-wide">
    <div class="footer-banner section-sm"><a class="banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid_big.jpg" alt="" height="0"></a></div>
    <div class="page-footer-minimal">
      <div class="shell-wide">
        <div class="range range-50">
          <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
            <div class="page-footer-minimal-inner-subscribe">
              <h4>Autosite.com</h4>
              <ul class="list-unstyled">
                <li class="active"><a href="index.php">Qui sommes nous?</a>
                </li>
                <li><a href="about-us.html">Nos engagements</a>
                </li>
                <li><a href="contacts.html">Nos services</a>
                </li>
                <li><a href="typography.html">Contactez-nous</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
            <div class="page-footer-minimal-inner">
              <h4>Liens Rapides</h4>
              <ul class="list-unstyled">
                <li class="active"><a href="index.php">Voitures d'occasion</a>
                </li>
                <li><a href="about-us.html">Voitures neuves</a>
                </li>
                <li><a href="contacts.html">Véhicules de direction</a>
                </li>
                <li><a href="typography.html">Hybrides et Electriques</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
            <div class="page-footer-minimal-inner">
              <h4>Adresse</h4>
              <ul class="list-unstyled">
                <li>
                  <dl class="list-desc">
                    <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                    <dd><a class="link" href="#">6036 Richmond hwy., Alexandria, VA, 2230</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-desc">
                    <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                    <dd class="">Call Us: <a class="link" href="tel:#">+1 (409) 987–5874</a>
                    </dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
