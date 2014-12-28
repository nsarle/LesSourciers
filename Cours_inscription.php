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
<?php include('header.php') ?>
<?php include('navbar.php') ?>

<?php if(isset($message) && $message != "") { echo $message; } ?><br>

<!--tabs--> 
     <section class="texto2">
            <div class="container">
                <div class="row col-xs-12 col-sm-6 col-md-8 col-lg-12">
                  <h1 class="tamtex20">Les Sourciers, première Ferme Hydroponique en France en collaboration avec General Hydroponics Europe.</h1><br>
                    <ul class="nav nav-tabs">
                      <li role="presentation" class="tamtex20"><a href="Cours.php">Presentation</a></li>
                      <li role="presentation" class="active tamtex20"><a href="Cours_inscription.php">Inscription</a></li>
                      <li role="presentation" class="tamtex20"><a href="Cours_temoignages.php">Témoignages</a></li>
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

<?php include('footer.php') ?>
     
