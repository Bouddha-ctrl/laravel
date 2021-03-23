<!DOCTYPE html>
<html>

  <head> 

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">

  </head>
  @include('inc.loading')

  <body>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">COVID-19<em> Tracker</em></a>
                        <!-- ***** Logo End ***** -->
                         <!-- ***** Menu Start ***** -->
                       <ul class="nav">
                            <li><a href="/"  >Accueil</a></li>
                            <li><a href="/statistiques" >Statistiques</a></li>
                            <li><a href="/nouvelles" class="active">Nouvelles</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">À propos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/aproposdenous">À propos de nous</a>
                                    <a class="dropdown-item" href="/aproposducorona">À propos du coronavirus</a>
                                </div>
                            </li>
                            <li><a href="/contact" >Contact</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <title>COVID-19 | Dernières nouvelles</title>

<section class="section section-bg" id="call-to-action" style="background-image: url(/frontend/images/vaccin.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Les dernières <em>nouvelles</em></h2>
                        <p>Restez au courant. Vous pouvez consulter les prochaines informations officielles à propos de la COVID-19.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- ***** Footer Start ***** -->
  <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                    Copyright © 2021 Covid-19 - par une équipe de: <a href="https://www.ensah.ma/">Ensah.ma</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

      <!-- jQuery -->
      <script src="{{asset('/frontend/js/jquery-2.1.0.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('/frontend/js/popper.js')}}"></script>
<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('/frontend/js/scrollreveal.min.js')}}"></script>
<script src="{{asset('/frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('/frontend/js/imgfix.min.js')}}"></script> 
<script src="{{asset('/frontend/js/mixitup.js')}}"></script> 
<script src="{{asset('/frontend/js/accordions.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('/frontend/js/custom.js')}}"></script>
  </body>
</html>