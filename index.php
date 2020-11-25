<?php 
  $cnx = new PDO('mysql:host=localhost;dbname=autositedb', 'root', '');
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Auto Express Site</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="#"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>

    <div class="text-center page"><a class="banner banner-top" href="#l" target="_blank"><img src="images/monstroid.jpg" alt="" height="0"></a>
      <!-- Page preloader-->
      <div class="page-loader">
        <div>
          <div class="page-loader-body">
            <div class="loader">
            </div>
          </div>
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
      <section class="section">
        <div class="shell-wide">
          <div class="range range-30 range-xs-center">
            <div class="cell-lg-12 cell-xl-9">
              <!-- Classic slider-->
              <section class="section">
                <!-- Swiper -->
                <div class="swiper-container swiper-slider swiper-style-2" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="vertical">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="images/slide-01.jpg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Offrez-vous la voiture parfaite</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Grace à nos offres</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">spéciales!</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slide-02.jpg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Obtenez votre voiture</h1>
                          <div class="slider-subtitle-group">
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">En toute</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">Sécurité</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="images/slide-03.jpg">
                      <div class="swiper-slide-caption">
                        <div class="shell text-sm-left">
                          <h1 data-caption-animate="slideInDown" data-caption-delay="100">Les meilleures voitures d'occasion</h1>
                          <div class="slider-subtitle-group"> 
                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>
                            <h4 data-caption-animate="slideInLeft" data-caption-delay="700">Très rapidement</h4>
                            <h3 data-caption-animate="slideInLeft" data-caption-delay="800">Accessibles</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </section>
            
        

      <section class="section section-md bg-white text-center text-sm-left cars_board">
      <div class="shell-wide">
      <a class="col-md-1 go-to-left to-left" onclick="slideun()"><</a>
      <a class="col-md-1 go-to-right to-right" onclick="slidedeux()">></a>
        <div class="shell-wide" id="slide-1">
          <a class="col-sm-12 col-md-2 col-lg-2" href="cardetail.php?id=1"><img src="images/occasions/AUDI Q2/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">AUDI Q2</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">33039€</span><span class="to-right backgrounded very-small">686€/ mois</span></div></a>
          <a class="col-sm-12 col-md-2" href="cardetail.php?id=34"><img src="images/occasions/FORD Fiesta/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">FORD Fiesta</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">8999€</span><span class="to-right backgrounded very-small">133€/ mois</span></div></a>
          <a class="col-sm-12 col-md-2" href="cardetail.php?id=4"><img src="images/occasions/CITROEN C3/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">CITROEN C3</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">14490€</span><span class="to-right backgrounded very-small">302€/ mois</span></div></a>
          <a class="col-sm-12 col-md-2" href="cardetail.php?id=38"><img src="images/occasions/RENAULT Twingo/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">RENAULT Twingo</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">8790€</span><span class="to-right backgrounded very-small">105€/ mois</span></div></a>
          <a class="col-sm-12 col-md-2" href="cardetail.php?id=7"><img src="images/occasions/PEUGEOT 3008/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">PEUGEOT 3008</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">30990€</span><span class="to-right backgrounded very-small">331€/ mois</span></div></a>
        </div>
        <div class="shell-wide" id="slide-2" style="display: none">
        <a class="col-sm-12 col-md-2" href="cardetail.php?id=2"><img src="images/occasions/BMW Serie 7/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">BMW Serie 7</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">67990€</span><span class="to-right backgrounded very-small">350€/ mois</span></div></a>
        <a class="col-sm-12 col-md-2" href="cardetail.php?id=9"><img src="images/occasions/VOLKSWAGEN T-Roc/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">VOLKSWAGEN T-Roc</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">20894€</span><span class="to-right backgrounded very-small">430€/ mois</span></div></a>
        <a class="col-sm-12 col-md-2" href="cardetail.php?id=5"><img src="images/occasions/CITROEN C3 Air cross/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">CITROEN C3 Air cross</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">18991€</span><span class="to-right backgrounded very-small">189€/ mois</span></div></a>
        <a class="col-sm-12 col-md-2" href="cardetail.php?id=39"><img src="images/occasions/RENAULT Twingo 2/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">RENAULT Twingo 2</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">11300€</span><span class="to-right backgrounded very-small">110€/ mois</span></div></a>
        <a class="col-sm-12 col-md-2" href="cardetail.php?id=37"><img src="images/occasions/PEUGEOT Gt/imgp.jpg" alt="Image" style="max-width:100%;" /><h6 class="backgrounded very-small text-align-center">PEUGEOT Gt</h6><div class="col-md-12 carac-div price-info">
          Notre offre: <span class="to-right">À partir de:</span><br><span class="">41900€</span><span class="to-right backgrounded very-small">863€/ mois</span></div></a>
        </div>
      </div>
      </section>

      <!-- About us-->
      <section class="section section-md bg-white text-center text-sm-left">
        <div class="shell-wide">
          <h3>Pourquoi acheter votre prochaine voiture chez Auto Express Plus ?</h3>
          <div class="container">
            <div class="col-sm-8 col-md-8 wow fadeInUp" data-wow-delay=".3s">
              <div class="section-wrap-content-var-1">
                <div class="">
                  <p>Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                  
                  <p>Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.Committed to everyone seeking energy and excitement, we offer endless possibilities to unwind and reenergize.</p>
                  <a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="about-us.html"><span>Découvrez</span></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-4 wow fadeInUp" data-wow-delay=".1s">
              <div class="post-video post-video-border">
                <div class="post-video__image"><img src="images/pkwn.jpg" alt="" width="1020" height="525"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Indoor Pool-->
      <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="row shell-wide">
          <div class="col-md-12"><h3>NOS DIFFERENTES MARQUES DE VOITURE</h3><br><br></div>
          <div class="col-xs-6 col-md-2">
            <img src="images/renault_logo.png" alt="Renault" class="img-responsive" width="120" height= "120">
          </div>
          <div class="col-xs-6 col-md-2">
            <img src="images/peugeot_logo.png" alt="Peugeot" class="img-responsive" width="120" height= "120">
          </div>
          <div class="col-xs-6 col-md-2">
            <img src="images/citroen_logo.png" alt="Citroen" class="img-responsive" width="120" height= "120">
          </div>
          <div class="col-xs-6 col-md-2">
            <img src="images/audi_logo.png" alt="Audi" class="img-responsive" width="120" height= "120">
          </div>
          <div class="col-xs-6 col-md-2">
            <img src="images/volkswagen_logo.png" alt="Volkswagen" class="img-responsive" width="120" height= "120">
          </div>
          <div class="col-xs-6 col-md-2">
            <img src="images/bmw_logo.png" alt="BMW" class="img-responsive" width="120" height= "120">
          </div>
        </div>
      </section>

      <section class="section section-md bg-secondary-3 text-center text-sm-left">
        <h3>Comment ça marche ?</h3>
        <div class="container" style="text-align: center;">
          <div class="col-md-3">Recherche du véhicule d'occasion<br>Décrivez votre projet en indiquant le véhicule que vous recherchez et la zone où vous vous trouvez.<br><img src="images/01.png"></div>
          <div class="col-md-3">Réservation du véhicule choisi<br>Contactez-nous, un conseiller transmettra votre demande à une concession.<br><img src="images/02.png"></div>
          <div class="col-md-3">Prise de rendez-vous avec le concessionaire<br>Un concessionnaire vous appelle pour fixer un rendez-vous, selon vos.<br><img src="images/03.png"></div>
          <div class="col-md-3">Achat de la voiture d'occasion<br>Le concessionnaire vous présente le véhicule et vous réalisez directement votre achat en concession.<br><img src="images/04.png"></div>
        </div>
      </section>
      
      <section class="section section-sm bg-white text-center text-sm-left">
        <div class="shell-wide">
          <h3>Nos derniers arrivages</h3>
          <hr>
          <div class="owl-carousel owl-carousel-stagePadding" data-items="1" data-sm-items="1" data-xl-items="1" data-dots="false" data-nav="true" data-stage-padding="0" data-lg-stage-padding="100" data-xl-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false" data-nav-class="[&quot;owl-button-prev fl-budicons-free-left161&quot;,&quot;owl-button-next  fl-budicons-free-right163&quot;]">
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".1s"><a class="post-box-image" href="blog-post.html">
            <figure><img src="images/neuves/BMW Serie 3 Touring/img (1).jpg" alt="" width="460" height="369"/>
                </figure></a>
              <div class="post-box-minimal-caption">
                <div class="post-box-minimal-caption-inner">
                  <h5 class="post-box-minimal-title"><a href="cardetail.php?id=10">BMW Serie 3 touring 330e xDrive 292ch BVAB</a></h5>
                  <div class="post-box-minimal-meta-bottom">
                    <time class="post-box-icon">Garantie Constructeur BMW</time>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="cardetail.php?id=11">
                <figure><img src="images/neuves/BMW X2/img (1).jpg" alt="" width="460" height="369"/>
                </figure></a>
              <div class="post-box-minimal-caption">
                <div class="post-box-minimal-caption-inner">
                  <h5 class="post-box-minimal-title"><a href="blog-post.html">BMW X2 Lounge X2 sDrive 18i 140 Ch BVM6</a></h5>
                  <div class="post-box-minimal-meta-bottom">
                    <time class="post-box-icon">Garantie Constructeur BMW</time>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-box post-box-minimal post-box-horizontal wow fadeInUp" data-wow-delay=".2s"><a class="post-box-image" href="cardetail.php?id=12">
              <figure><img src="images/neuves/BMW X5/img (1).jpg" alt="" width="460" height="369"/>
              </figure></a>
            <div class="post-box-minimal-caption">
              <div class="post-box-minimal-caption-inner">
                <h5 class="post-box-minimal-title"><a href="blog-post.html">BMW X5 Lounge X5 xDrive30d 265 Ch BVA8</a></h5>
                <div class="post-box-minimal-meta-bottom">
                  <time class="post-box-icon">Garantie Constructeur BMW</time>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </section>


      <section class="section bg-secondary-1 text-center text-sm-left">
        <div class="container">
          <h3>Découvrez <span style="color: #8f859e;">Nos Services</span></h3>
          <br><br>
          
        <div class="col-md-9" id="satisr">
          <button class="btn btn-outline-primary active" onclick="appearsr()">Garantie Satisfait ou remboursé</button>
          <button class="btn btn-outline-primary" onclick="appearfn()">Financement</button>
          <button class="btn btn-outline-primary" onclick="appearrv()">Révision</button>
          <h5>Satisfait ou remboursé</h5>
          <p>Si malheureusement votre voiture faisait defaut apres achat, nous vous reprenons le véhicule aux conditions d’achat TTC mentionnées sur la facture lors de l'acquisition du véhicule. Cette garantie doit cependant tenir compte des frais de certificat d’immatriculation, de kit de sécurité ou encore d’intérêts liés à un prêt consenti par un organisme financier.<br>
          La demande de remboursement si elle besoin se faisait doit être faite dans les 7 jours calendaires à compter de la date de réception du véhicule et ce dernier ne doit pas avoir éffectué une distance de plus de 700 km. Pour un acahat effectué entierement en ligne, la demande devra être formulée dans un délai de 14 jours à compter de la réception du véhicule. Dans le cas d’un véhicule acquis via une solution de financement, le délai de 14 jours calendaires s’applique à compter de l’acception du crédit, dans le cadre du droit de rétractation. Conformément aux conditions génerales définies par Auto Express Plus, le client ne pourra avoir parcouru plus de 700 km durant ces 14 jours. Si la distance parcourue excede la limite fixée, des pénalités seront appliquées.</p>
        </div>
        <div class="col-md-9" id="fncm" style="display:none;">
          <button class="btn btn-outline-primary" onclick="appearsr()">Garantie Satisfait ou remboursé</button>
          <button class="btn btn-outline-primary active" onclick="appearfn()">Financement</button>
          <button class="btn btn-outline-primary" onclick="appearrv()">Révision</button>
          <h5>Financement</h5>
          <p>Auto Express plus vous accompagne dans le financement de votre projet automobile en tenant compte de votre situation personnelle, du type de véhicule choisi,et de vos situations particulieres (acquisition, usage simple, reprise…).<br>
          De facon générale, notreb service client vous apporte une réponse définitive en moins de 24 heures dans le cadre d'un service simplifié, personnalisé et transparent. Nous nous occupons de tout par l'intermédiaire de conseillers commerciaux habilités, régulièrement formés et spécialisés sur le sujet. Mais n'oubliez pas que c'est bien vous qui avez le dernier mot.Par crédit, en location longue durée (LLD) ou en location avec option d'achat (LOA)… auprès d'une banque ou d'une concession automobile, nous vous aidons tout au long du processus.
          Les modes de financement proposés ne peuvent qu'être amortissables à taux fixes et mensualités fixes dans le cadre de vos capacités de remboursement mensuel. Nos offres peuvent néanmoins être évolutives afin de vous simplifier la vie : Pause ou variation des mensualités. Tout est clair et connu d'avance !</p>
        </div>
        <div class="col-md-9" id="rvsn" style="display:none;">
          <button class="btn btn-outline-primary" onclick="appearsr()">Garantie Satisfait ou remboursé</button>
          <button class="btn btn-outline-primary" onclick="appearfn()">Financement</button>
          <button class="btn btn-outline-primary active" onclick="appearrv()">Révision</button>
          <h5>Révision</h5>
          <p>Nous proposons à l'achat plusieurs véhicules d'occasion de marques variées, dans l'ensemble de nos 115 concessions partenaires et partout en Europe. Ces voitures ont fait l'objet d'un minutieux travail de sélection par nos professionnels auprès de particuliers, mais aussi d'entreprises ou directement de concessions vendeuses. Toutes nos autos d'occasion sont révisées. Cela veut dire qu'ils ont fait l'objet d'une inspection rigoureuse des principaux organes du véhicule, souvent dans le cadre des labels occasions propres aux plus grands constructeurs (Garantie Or Renault-Dacia, Occasion du Lion Peugeot, Citroën Select, Volkswagen Occasions, Audi Occasion Plus…). Tout est mis en oeuvre pour vous faciliter la vie !<br>
          Si cela est nécessaire, l'entretien est mis à jour en concession en fonction du kilométrage. Tous nos véhicules sont en etat et immédiatement disponibles. Voilà pourquoi nous vous proposons des véhicules garantis de 3 mois minimum et jusqu'à 24 mois : Garantis, révisés et immédiatement disponibles ! Satisfait ou remboursé !</p>
        </div>
        <div class="col-md-3">
          <img id="iasr" src="images/asr.jpg" alt="assurance_garantie">
          <img id="ifncm" src="images/fncm.png" alt="financement" style="display:none;">
          <img id="irvsn" src="images/rvsn.png" alt="revision" style="display:none;">
        </div>
        </div>
      </section>

      <section class="section section-md bg-secondary-1 text-center text-sm-left">
        
        <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <h3>Nos Engagements</h3>
            <img src="images/bande_engagement.jpg" class="img-responsive">
          </div>
        </div>
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
                          <dd class="">Call Us: <a class="link " href="tel:#">+1 (409) 987–5874</a>
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
    <!--Coded by Drel-->
  </body>
</html>