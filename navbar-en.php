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
                    <li <?php if (strstr($currentPage, 'Les-Sourciers-hydroponic-microfarm-france')) { echo 'class="active"'; } ?>><a href="Les-Sourciers-hydroponic-microfarm-france.php">About us</a></li>
                    <li <?php if (strstr($currentPage, 'Videoblog-hydroponic-tutorial-course-aquaponic')) { echo 'class="active"'; } ?>><a href="Videoblog-hydroponic-tutorial-course-aquaponic.php">Video Blog</a></li>
                    <li <?php if (strstr($currentPage, 'Press-lessourciers-hydroponic-microfarming')) { echo 'class="active"'; } ?>><a href="Press-lessourciers-hydroponic-microfarming.php">Press</a></li>
                    <li <?php if (strstr($currentPage, 'Partners-hydroponic-gastronomic-food-gers-france')) { echo 'class="active"'; } ?>><a href="Partners-hydroponic-gastronomic-food-gers-france.php">Our partners</a></li>
                </ul>
                </li>
            <li <?php if (strstr($currentPage, 'Our-Products-hydroponic-food-production-france')) { echo 'class="active"'; } ?>><a href="Our-Products-hydroponic-food-production-france.php">Our Products</a></li>
            <li <?php if (strstr($currentPage, 'About-our-hydroponic-micro-farm-france')) { echo 'class="active"'; } ?>><a href="About-our-hydroponic-micro-farm-france.php">About our farm</a></li>
            <li <?php if (strstr($currentPage, 'Visit-hydroponic-aquaponic-greenhouse')) { echo 'class="active"'; } ?>><a href="Visit-hydroponic-aquaponic-greenhouse.php">Visit</a></li>
            <li <?php if (strstr($currentPage, 'Contact-us-les-sourciers-hydroponic-culture')) { echo 'class="active"'; } ?>><a href="Contact-us-les-sourciers-hydroponic-culture.php">Contact us</a></li>
         </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php if (strstr($currentPage, 'Courses-hydroponic-aquaponic-school-farming-france')) { echo 'class="active"'; } ?>><a href="Courses-hydroponic-aquaponic-school-farming-france.php">Hydroponics Courses</a></li>
          </ul>   
    </div>
    </nav><br>