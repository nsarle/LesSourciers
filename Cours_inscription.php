<?php 
    if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['ville']) and isset($_POST['email'])) {
        if ($_POST['nom'] != "" and $_POST['prenom'] != "" and $_POST['ville'] != "" and $_POST['email'] != "") {
            $date = date('j/m/Y \à G:i');
        
            $headers ='From: "LesSourciers Cours"<website@lessourciers.com>'."\n"; 
            $headers .='Reply-To: ' . stripslashes($_POST['email']) . "\n"; 
            $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
            $headers .='Content-Transfer-Encoding: 8bit';
            $headers .='NIME-Version: 1.0\r\n'; 
            
            $sujet = "Nouvelle demande de cours " . stripslashes($_POST['email']) . " le " . $date;
            $message = "nom : " . $_POST['nom'];
            $message .= "<br> Prenom : " . $_POST['prenom'];
            $message .= "<br> Ville : " . $_POST['ville'];
            $message .= "<br> Email : " . $_POST['email'] . "<br><br>";

            if (isset($_POST['ch1'])) {
              $message .= "Cours théorique – Différentes sortes de systèmes hydroponiques et équipements<br>";
            }
            if (isset($_POST['ch2'])) {
              $message .= "Cours théorique - Les besoins d’une plante<br>";
            }
            if (isset($_POST['ch3'])) {
              $message .= "Cours théorique – Indoor / Outdoor<br>";
            }
            if (isset($_POST['ch4'])) {
              $message .= "Cours théorique - Gérer le PH et l’EC<br>";
            }
            if (isset($_POST['ch5'])) {
              $message .= "Cours pratique - Semis, choix du substrat<br>";
            }
            if (isset($_POST['ch6'])) {
              $message .= "Cours pratique - Transplantations en Hydro<br>";
            }
            if (isset($_POST['ch7'])) {
              $message .= "Cours pratique - Les indicateurs à suivre quotidiennement<br>";
            }

            if (isset($_POST['autre'])) {
              $message .= "Autre : " . $_POST['autre'] ;
            }

            $description = "<html><head><title>" . $sujet . "</title></head><body><p>" . $message . "</p></body></html>";

            if (mail('marion@lessourciers.com', $sujet, $description, $headers)){
                $message="<div class='alert alert-success'>Message envoyé</div>";
            }else{
               $message="<div class='alert alert-danger'>Message non envoyé</div>";
            }
        }
    }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta name="author" content="Les Sourciers">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Découvrez Les Sourciers, serre hydroponique expérimentale et écologique. Venez déguster nos produits frais dans le Gers lors d’une visite éducative autour de l’hydroponie.</title>
        <meta name="keywords" content="les Sourciers, hydroponie, potager aquatique, sourcier, hydroponique, cour d'hydroponie">
        <meta name="description" content="Découvrez Les Sourciers, serre hydroponique expérimentale et écologique. Venez déguster nos produits frais dans le Gers lors d’une visite éducative autour de l’hydroponie.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Delius|ABeeZee' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-50914218-2', 'lessourciers.com');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
           <!--Cabecera--> 
       <header>
            <div class="container adaptar" style="background-image:url(img/intro.png)" >
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 centrarlogo"><br>
                        <a href="http://www.lessourciers.com"><img src="img/Logoheader2.png" class="img-rounded img-responsive"></a>
                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                            <div class="row">
                            <a href="https://www.facebook.com/pages/Project-Hydroponics/203982603095898" class="logofb" target="_blank"><img alt="" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" width=32 height=32></a>
                            <a href="https://plus.google.com/114160380244004484415?prsrc=3" class="logog" rel="publisher" target="_blank"><img src="https://ssl.gstatic.com/images/icons/gplus-32.png" alt="" width=32 height=32/></a>
                            <a href="https://www.youtube.com/channel/UCNRcppsj-SM4FrdCgPsyrDA" class="logoy" rel="publisher" target="_blank"><img src="img/yt.png" alt="" width=32 height=32/></a>
                            <a href="http://instagram.com/lessourciers/" class="logoi" rel="publisher" target="_blank"><img src="img/ins.png" alt="" width=32 height=32/></a>
                            </div>
                    </div>
                </div>
            </div>
        </header>
       
      <!--Barra de navegacion--> 
       <nav class="navbar navbar-inverse texto1">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">cambiar navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                   <!--  <li><a href="http://www.lessourciers.com" class="navbar-brand tamtex20">Les Sourciers</a></li> -->
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Les Sourciers <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="Lessourciers.html">Qui sommes-nous?</a></li>
                            <li><a href="Videoblog.html">Video Blog</a></li>
                            <li><a href="Press.html">Press</a></li>
                            <li><a href="Partenaires.html">Partenaires</a></li>
                        </ul>
                        </li>
                    <li><a href="Nos_Produits.html">Nos Produits</a></li>
                    <li><a href="APropos.html">A Propos de Notre Ferme</a></li>
                    <li><a href="Contacter.php">Nous contacter</a></li>
                 </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="Cours.html">Cours d'Hydroponie</a></li>
                  </ul>   
            </div>
            </nav><br>

<?php if(isset($message) && $message != "") { echo $message; } ?>

<!--tabs--> 
     <section class="texto2">
            <div class="container">
                <div class="row col-xs-12 col-sm-6 col-md-8 col-lg-12">
                  <h1 class="tamtex20">Les Sourciers, première Ferme Hydroponique en France en collaboration avec General Hydroponics Europe.</h1><br>
                    <ul class="nav nav-tabs">
                      <li role="presentation" class="tamtex20"><a href="Cours.html">Presentation</a></li>
                      <li role="presentation" class="active tamtex20"><a href="Cours_inscription.php">Inscription</a></li>
                      <li role="presentation" class="tamtex20"><a href="Cours_temoignages.html">Témoignages</a></li>
                    </ul>
                </div>
            </div>
        </section>  <br>

        <!--Formulario contacto--> 
        <section class="texto2">
            <div class="container">
                <div class="row col-xs-12 col-sm-6 col-md-8 col-lg-12">
                    <p align="justify">

<p>Si vous êtes intéressés, vous pouvez vous pré-inscrire gratuitement et sans engagement afin de recevoir le tarif et le descriptif de cours,  et ainsi réserver votre place dans les prochaines sessions. </p><br>


<form class="form-inline" role="form" action="./Cours.php" method="post">
  <div>
    <div class="form-group">
        <label class="sr-only" for="nom">Nom</label>
        <input name="nom" type="text" class="form-control" id="nom" placeholder="Nom :" required="required">
           </div><br><br>
    <div class="form-group">
        <label class="sr-only" for="prenom">Prénom</label>
        <input name="prenom" type="text" class="form-control" id="prenom" placeholder="Prénom :" required="required">
           </div><br><br>
    <div class="form-group">
       <label class="sr-only" for="ville">Ville</label>
       <input name="ville" type="text" class="form-control" id="ville" placeholder="CP Ville :" required="required">
           </div><br><br>
    <div class="form-group">
       <label class="sr-only" for="email">Email</label>
       <input  name="email" type="email" class="form-control" id="email" placeholder="Email :" required="required">
           </div><br>
  </div><br>

  <p>Afin de répondre à vos besoins et de nous améliorer dans le contenu de nos cours,  veuillez nous indiquer vos champs d’intérêts:</p>
  
  <div class="form-group">
  <div class="checkbox">
    <label>
      <input name="ch1" type="checkbox"> Cours théorique – Différentes sortes de systèmes hydroponiques et équipements
    </label>
  </div><br>
  <div class="checkbox">
    <label>
      <input name="ch2" type="checkbox"> Cours théorique - Les besoins d’une plante
    </label>
  </div><br>
  <div class="checkbox">
    <label>
      <input name="ch3" type="checkbox"> Cours théorique – Indoor / Outdoor
    </label>
  </div><br>
   <div class="checkbox">
    <label>
      <input name="ch4" type="checkbox"> Cours théorique - Gérer le PH et l’EC
    </label>
  </div><br>
   <div class="checkbox">
    <label>
      <input name="ch5" type="checkbox"> Cours pratique - Semis, choix du substrat
    </label>
  </div><br>
   <div class="checkbox">
    <label>
      <input name="ch6" type="checkbox"> Cours pratique - Transplantations en Hydro
    </label>
  </div><br>
   <div class="checkbox">
    <label>
      <input name="ch7" type="checkbox"> Cours pratique - Les indicateurs à suivre quotidiennement
    </label>
  </div><br><br>
   <div class="checkbox">
    <label>
      <input name="ch8" type="checkbox"> Autre
    </label>
    <label class="sr-only" for="nous">nous préciser :</label>
    <input name="autre" type="text" class="form-control" id="nous"
           placeholder="Nous préciser :">
  </div><br><br>
  </div>
  <div>
  <button type="submit" class="btn btn-success">Envoyer</button>
  </div>
</form>
</p><br>
<a href=""><img src="img/marion.jpg" class="img-rounded img-responsive"></a><br><br>
                </div>          
            </div>
        </section>

      <!--pie de pagina-->       
           <section class="color2 texto2">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 textoblack">
                        <h5>Les Sourciers</h5>
                        <h5>Potager Aquatique</h5>
                        <h5>marion@lessourciers.com</h5>
                        <h5>Lieu dit la Berdale</h5>
                        <h5>32330 Lagraulet-du-Gers - France</h5>
                    </div>
                </div>
            </div>
        </section>

        <footer class="color4 texto2">
            <div class="container"><br>
                <p>Powered by Les Sourciers Development | Tous Droits Réservés @2014 Les Sourciers</p><br>
            </div>
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
