<?php 
    if (isset($_POST['email']) and isset($_POST['message'])) {
        if ($_POST['email'] != "" and $_POST['message'] != "") {
            $date = date('j/m/Y \à G:i');
        
            $headers ='From: "LesSourciers Contacter"<website@lessourciers.com>'."\n"; 
            $headers .='Reply-To: ' . stripslashes($_POST['email']) . "\n"; 
            $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n"; 
            $headers .='Content-Transfer-Encoding: 8bit'; 
            
            $sujet = "Nouvelle demande de contact " . stripslashes($_POST['email']) . " le " . $date;
            $description = "<html><head><title>" . $sujet . "</title></head><body><p>" . stripslashes($_POST['message'] . "</p></body></html>");

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

    <!--Formulario de contacto--> 
    <section class="texto2">
        <div class="container">
            <div class="row col-xs-12 col-sm-6 col-md-8 col-lg-12">
                <p align="justify">
                    <?php if(isset($message) && $message != "") { echo $message; } ?>
                    <p>Pour commander <a href="Nos_Produits.html">nos produits</a></p>
                    <p>Pour venir visiter notre serre</p>
                    <p>Pour toute autre question ou commentaire</p><br>
                    <p>N’hésitez pas à nous écrire:</p><br>
                 </p>
                    <form class="form-inline" role="form" action="./Contacter.php" method="post">
                        <div>
                            <div class="form-group">
                                <label class="sr-only" for="message">message</label>
                                <textarea name="message" type="text" class="form-control" style="width:400px;" rows="3" placeholder="Votre message :" required="required"></textarea>
                            </div><br><br>
                            <div class="form-group">
                                <label class="sr-only" for="email">email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Votre email :" required="required">
                            </div><br>
                        </div><br>
                        <div>
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                    </form><br>
                <p align="justify">
                    <p>Nous serons ravis de vous répondre</p>
                    <p>Vous pouvez aussi nous suivre sur notre page <a href="https://www.facebook.com/pages/Project-Hydroponics/203982603095898" target="_blank">Facebook</a></p>
                    <h2 class="tamtex20">Marion & Nicolas</h2>
                </p>
            </div> 
        </div>    
    </section><br>

    <!--Mapa--> 
    <section>
                <div class="container">
                <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91993.1812430617!2d0.22350493378906391!3d43.90167982687113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aa1a32ba625a65%3A0xc551a9922623b16a!2sLagraulet-du-Gers!5e0!3m2!1ses!2sfr!4v1397840502656" width="400" height="300" frameborder="0" style="border:0"></iframe>
                </div>
                </div>
    </section><br><br>

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
