<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Auto Express Site</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="build/css/intlTelInput.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <?php if(isset($_GET['id'])){ ?>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page-->
    <div class="text-center page"><a class="banner banner-top" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid.jpg" alt="" height="0"></a>
      <!-- Page preloader-->
      <div class="page-loader">
        <div>
          
        </div>
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
                      <li><a href="direction.php">VEHICULES<br> DE DIRECTION</a>
                      </li>
                      <li><a href="typography.php">HYBRIDES ET<br> ELECTRIQUES</a>
                      </li>
                      <li><a href="typography.php">FINANCEMENT<br> VOITURE</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


    <?php
        $cnx = new PDO('mysql:host=localhost;dbname=autositedb', 'root', '');
        $sql= $cnx->prepare("SELECT * FROM cars WHERE id = ?");
        $req = $sql->execute(array($_GET['id']));
        $data = $sql->fetch()
    ?>

    <section class="section section-sm bg-white text-center text-sm-left col-md-9">
            <h3>Fiche technique <?php echo $data['marque'];?> <?php echo $data['modele']; ?> </h3>
            <div class="shell-wide">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stagePadding" data-items="1" data-sm-items="1" data-xl-items="1" data-dots="false" data-nav="true" data-stage-padding="0" data-lg-stage-padding="100" data-xl-stage-padding="0" data-loop="true" data-margin="150" data-mouse-drag="false" data-nav-class="[&quot;owl-button-prev fl-budicons-free-left161&quot;,&quot;owl-button-next  fl-budicons-free-right163&quot;]">
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image">
                    <figure><img src="<?php echo $data['img1']?>" alt="" width="460" height="369"/>
                    </figure></a>
                
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image">
                    <figure><img src="<?php echo $data['img2']?>" alt="" width="460" height="369"/>
                    </figure></a>
                
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image">
                    <figure><img src="<?php echo $data['img3']?>" alt="" width="460" height="369"/>
                    </figure></a>
                
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image">
                    <figure><img src="<?php echo $data['img4']?>" alt="" width="460" height="369"/>
                    </figure></a>
                
                </div>
                <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image">
                    <figure><img src="<?php echo $data['img5']?>" alt="" width="460" height="369"/>
                    </figure></a>
                
                </div>
            </div>
            </div>
        </section>

        <section class="section section-sm bg-white text-center text-sm-left col-sm-6 col-md-3 price-box">
              <div class="col-md-12 carac-div"><h5><?php echo $data['marque']; ?></h5><span class="to-right backgrounded-1"><?php if($data['categorie'] == 'neuf'){?>NEUF<?php } ?></span><h6><?php echo $data['modele'];?></h6>
              <p></p>
            </div>
              <div class="col-md-12 carac-div very-small"><p><?php echo utf8_encode($data['carburant']) ?>/ <?php echo utf8_encode($data['boitevitesse']) ?>/ <?php echo utf8_encode($data['puissancereelle']) ?></p></div>
              <div class="col-md-12 carac-div price-info">Prix catalogue: <br>
              Notre offre: <span class="to-right">À partir de:</span><br><span class="very-big"><?php echo utf8_encode($data['prixttc']) ?>€</span><span class="to-right backgrounded"><?php echo utf8_encode($data['prixmois']) ?>€/ mois</span></div>
            <div class="carac-div" style="text-align:center;"><a class="backgrounded-1-button button button-effect-ujarak button-lg button-margin-top" type="button" data-toggle="modal" data-target="#exampleModalLong"><span>Commander</span></a> <p style="text-align:center;">ou</p> <a class="backgrounded-2-button button button-effect-ujarak  button-lg button-margin-top" type="button" data-toggle="modal" data-target="#example2ModalLong"><span>Appelez-nous</span></a>
            <img class="clipart" src="images/clipart.png" width="150" height="150" >
            </div>
            </div>
            
            <div class="col-md-10 carac-div"></div>
            </div>
        </section>

        <div class="cell-sm-10 cell-md-8 cell-lg-8 ">
              <div class="col-md-12 wrapcontent">
                <div class="">
                  <div class="row">
                  <div class="col-md-8"><h4><?php echo $data['modele'] ?></h4></div>
                  
                  </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Formulaire de commande</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="bat/rd-mailform.php" method="post" id="order_form">
                          <div class="col-md-12">
                          <label for="a_marque">Marque</label>
                          <input id="a_marque" type="text" class="form-control" value="<?php echo $data['marque'] ?>" required>
                          </div>
                          <div class="col-md-12">
                          <label for="a_modele">Modele</label>
                          <input id="a_modele" type="text" class="form-control" value="<?php echo $data['modele']?>" required>
                          </div>
                          <div class="col-md-12">
                          <label for="a_prix">Prix TTC</label>
                          <input id="a_prix" type="text" class="form-control" value="<?php echo $data['prixttc']?>" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_nom">Nom</label>
                          <input id="a_nom" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_prenom">Prénom</label>
                          <input id="a_prenom" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_email">Email</label>
                          <input id="a_email" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="phone">Téléphone</label>
                          <input id="phone" name="phone" type="tel" class="form-control" required>
                          </div>
                          <div class="col-md-12">
                          <label for="phone">Adresse de livraison</label>
                          <input id="addr_livr" name="addr_livr" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-12" style="margin-top:10px;">
                          <input type="submit" class="btn btn-primary form-control" value="Valider">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="example2ModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Contactez-nous</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="bat/rd-mailform.php" method="post" id="order_form">
                          <div class="col-md-12">
                          <label for="a_marque">Marque</label>
                          <input id="a_marque" type="text" class="form-control" value="<?php echo $data['marque'] ?>" required>
                          </div>
                          <div class="col-md-12">
                          <label for="a_modele">Modele</label>
                          <input id="a_modele" type="text" class="form-control" value="<?php echo $data['modele']?>" required>
                          </div>
                          <div class="col-md-12">
                          <label for="a_prix">Prix TTC</label>
                          <input id="a_prix" type="text" class="form-control" value="<?php echo $data['prixttc']?>" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_nom">Nom</label>
                          <input id="a_nom" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_prenom">Prénom</label>
                          <input id="a_prenom" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="a_email">Email</label>
                          <input id="a_email" type="text" class="form-control" required>
                          </div>
                          <div class="col-md-6">
                          <label for="phone">Téléphone</label>
                          <input id="phone" name="phone" type="tel" class="form-control" required>
                          </div>
                          <div class="col-md-12">
                          <label for="phone">Message</label>
                          <textarea id="addr_livr" name="addr_livr" type="text" class="form-control" required></textarea>
                          </div>
                          <div class="col-md-12" style="margin-top:10px;">
                          <input type="submit" class="btn btn-primary form-control" value="Valider">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row caracteristiques" style="color:black;">
                    <div class="col-md-4" style="margin-top: 25px; text-align: justify;">
                      <h6>Marque: <span style="color:gray;"><?php echo utf8_encode($data['marque']) ?></span></h6>
                      <h6>Modele: <span style="color:gray;"><?php echo utf8_encode($data['modele']) ?></span></6>
                      <h6>Couleur: <span style="color:gray;"><?php echo utf8_encode($data['couleur']) ?></span></h6>
                      <h6>Boite de vitesse: <span style="color:gray;"><?php echo utf8_encode($data['boitevitesse']) ?></span></h6>
                      <h6>Kilométrage: <span style="color:gray;"><?php echo utf8_encode($data['kilometrage']) ?></span></h6>
                      <h6>Certificat Crit'air: <span style="color:gray;"><?php echo utf8_encode($data['critair']) ?></span></h6>
                      <h6>Émission CO2: <span style="color:gray;"><?php echo utf8_encode($data['coo']) ?></span></h6>
                    </div>
                    <div class="col-md-4" style="margin-top: 25px; border-left: 1px solid gray;text-align: justify;">
                      <h6>Puissance fiscale: <span style="color:gray;"><?php echo utf8_encode($data['puissancefiscale']) ?></span></6>
                      <h6>Puissance réelle: <span style="color:gray;"><?php echo utf8_encode($data['puissancereelle']) ?></span></h6>
                      <h6>Carosserie: <span style="color:gray;"><?php echo utf8_encode($data['carosserie']) ?></span></h6>
                      <h6>Carburant: <span style="color:gray;"><?php echo utf8_encode($data['carburant']) ?></span></h6>
                      <h6>Ville: <span style="color:gray;"><?php echo utf8_encode($data['ville']) ?></span></h6>
                      <h6>Garantie: <span style="color:gray;"><?php echo utf8_encode($data['garantie']) ?></span></h6>
                    </div>
                    <div class="col-md-4" style="margin-top: 25px; border-left: 1px solid gray;text-align: justify;">
                      <h6>Type: <span style="color:gray;"><?php echo utf8_encode($data['type_']) ?></span></h6>
                      <h6>Portes: <span style="color:gray;"><?php echo utf8_encode($data['portes']) ?></span></h6>
                      <h6>Places: <span style="color:gray;"><?php echo $data['places'] ?></span></h6>
                      <h6>Prix TTC: <span style="color:gray;"><?php echo utf8_encode($data['prixttc']) ?>€</span></h6>
                      <h6>Mise en circulation: <span style="color:gray;"><?php echo utf8_encode($data['mec']) ?></span></h6>
                      <h6>Référence: <span style="color:gray;"><?php echo utf8_encode($data['reference']) ?></span></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <!-- Page Footer-->
    <footer class="page-footer text-left text-sm-left">
        <div class="shell-wide">
          <div class="footer-banner section-sm"><a class="banner banner-margin" href="https://www.templatemonster.com/website-templates/monstroid2.html" target="_blank"><img src="images/monstroid_big.jpg" alt="" height="0"></a></div>
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
                          <dd><a class="link link-gray-darker" href="#">6036 Richmond hwy., Alexandria, VA, 2230</a></dd>
                        </dl>
                      </li>
                      <li>
                        <dl class="list-desc">
                          <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>
                          <dd class="text-gray-darker">Call Us: <a class="link link-gray-darker" href="tel:#">+1 (409) 987–5874</a>
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
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__cent"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
      var input = document.querySelector("#phone");
      window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        preferredCountries: ['fr'],
        // separateDialCode: true,
        utilsScript: "build/js/utils.js",
      });
    </script>
    <?php } else{ ?>
      <script>alert('Cette page n\'existe pas');</script> <?php
    } ?>
  </body>
</html>