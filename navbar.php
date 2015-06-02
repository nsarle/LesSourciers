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
	
	<?php $currentPage = $_SERVER['REQUEST_URI']; ?>
	
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Les Sourciers<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li <?php if (strstr($currentPage, 'Lessourciers')) { echo 'class="active"'; } ?>><a href="Lessourciers.php">Qui sommes-nous?</a></li>
                    <li <?php if (strstr($currentPage, 'Videoblog')) { echo 'class="active"'; } ?>><a href="Videoblog.php">Video Blog</a></li>
                    <li <?php if (strstr($currentPage, 'Presse')) { echo 'class="active"'; } ?>><a href="Presse.php">Presse</a></li>
                    <li <?php if (strstr($currentPage, 'Partenaires')) { echo 'class="active"'; } ?>><a href="Partenaires.php">Partenaires</a></li>
                </ul>
                </li>
            <li <?php if (strstr($currentPage, 'Nos_Produits')) { echo 'class="active"'; } ?>><a href="Nos_Produits.php">Nos Produits</a></li>
            <li <?php if (strstr($currentPage, 'APropos')) { echo 'class="active"'; } ?>><a href="APropos.php">A Propos de Notre Ferme</a></li>
            <li <?php if (strstr($currentPage, 'Visites')) { echo 'class="active"'; } ?>><a href="Contacter.php">Visites</a></li>
            <li <?php if (strstr($currentPage, 'Contacter')) { echo 'class="active"'; } ?>><a href="Contacter.php">Nous contacter</a></li>
         </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php if (strstr($currentPage, 'Cours')) { echo 'class="active"'; } ?>><a href="Cours.php">Cours d'Hydroponie</a></li>
          </ul>   
    </div>
    </nav><br>