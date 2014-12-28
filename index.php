<?php include('header.php') ?>
<?php include('navbar.php') ?>
<!--Carrousel--> 
<div class="container">
    <section id="myslide" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myslide" data-slide-to="0" class="active"></li>
            <li data-target="#myslide" data-slide-to="1"></li>
            <li data-target="#myslide" data-slide-to="2"></li>
            <li data-target="#myslide" data-slide-to="3"></li>
            <li data-target="#myslide" data-slide-to="4"></li> 
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="img/oseille.jpg" class="adaptar">
            </div>
            <div class="item ">
                <img src="img/pourpier.jpg" class="adaptar">
            </div>
            <div class="item ">
                <img src="img/kale.jpg" class="adaptar">
            </div>
            <div class="item ">
                <img src="img/bok_shoy.jpg" class="adaptar">
            </div>
             <div class="item ">
                <img src="img/car5.jpg" class="adaptar">
            </div>
        </div>
            <a href="#myslide" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
             <a href="#myslide" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
    </section><br><br>
</div>

<?php include('footer.php') ?>