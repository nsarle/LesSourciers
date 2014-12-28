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
<?php include('header.php') ?>
<?php include('navbar.php') ?>

    <!--Formulario de contacto--> 
    <section class="texto2">
        <div class="container">
            <div class="row col-xs-12 col-sm-6 col-md-8 col-lg-12">
                <p align="justify">
                    <?php if(isset($message) && $message != "") { echo $message; } ?><br>
                    <p>Pour commander <a href="Nos_Produits.php">nos produits</a></p>
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

<?php include('footer.php') ?>