<?php
include 'classes/path.php';
include_once path::getViewsPath() . 'header.php';
?>
<nav arial-label="breadcrumb bt-2">
    <ol class="breadcrumb lightgreen">
        <li class="breadcrumb-item active" aria-current="page">Acceuil</li>
    </ol>
</nav>
<div class="moderno container  mb-5 mt-5 ">
    <div class="card noBorder bg-lightgreen p-0">
        <div class="row ">
            <img src="assets/img/test-robots.png" alt="robot tondeuse" height="350" width="350" class="borderer col-4 p-0" />
            <div class="col-8 card-body">
                <h3 class="card-title title text-center text-success">Installation et services</h3>
                <p class="card-text">
                    Nous proposons un service entierement personnalisé chaque terrain et installation sont différente nous proposons donc des devis sur mesure.
                    </br>Dans un premier temps nous fixons un rendez-vous afin de réaliser un devis de l'installation et de ce qu'il faudra potentiellement modifier dans votre terrain,
                    Suite à ça nous fixerons un autre rendez-vous pour l'installation.
                </p>
                <a href="views/serviceInfo.php" class="btn btn-lg btn-success card-text"><small class="lightgreen">plus d'infos ici</small></a>
            </div>
        </div>
    </div>
</div>
<div class="moderno container mb-5 mt-5">
    <div class="card noBorder bg-lightgreen p-0">
        <div class="row">
            <img src="assets/img/nettoyage.jpg" alt="machine nettoyage à froid" height="350" width="350" class="borderer col-4 p-0" />
            <div class="col-8 card-body">
                <h3 class="card-title title text-center text-success">Hivernage et maintenance</h3>
                <p class="card-text">
                    Pour l'hivernage nous proposons plusieurs formules que vous pourrez retrouver dans les informations supplémentaires.
                    </br>Nous possédons également une machine de nettoyage cryogénique qui nous permet de nettoyer le robot sans danger et en profondeur pour avoir un effet neuf.
                </p>
                <a href="views/hivernageInfo.php" class="btn btn-lg btn-success card-text"><small class="lightgreen">plus d'infos ici</small></a>
            </div>
        </div>
    </div>
</div>

<?php
include_once path::getViewsPath() . 'footer.php';
?>