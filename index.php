<?php 
include 'classes/path.php'; 
include_once path::getViewsPath().'header.php';
?>
    <h1 class="row moderno">POSE ROBOT PX</h1> 
    
    <div class="container mt-5 moderno">
         <div class="card mt-2 mb-2">
            <div class="row ">
                <div class="col-4">
                    <img src="assets/img/test-robots.png" alt="machine nettoyage à froid" height="250" width="350" class="rounded-start"/>
                </div>
                <div class="col-8 card-body">
                    <h3 class="card-title text-success">Installation et services</h3>
                    <p class="card-text">
                        Nous proposons un service entierement personnalisé chaque terrain et installation sont différente nous proposons donc des devis sur mesure.
                        </br>Dans un premier temps nous fixons un rendez-vous afin de réaliser un devis de l'installation et de ce qu'il faudra potentiellement modifier dans votre terrain,
                        Suite à ça nous fixerons un autre rendez-vous pour l'installation.
                    </p>
                    <a href="#" class="btn btn-lg btn-success card-text"><small class="lightgreen">plus d'infos ici</small></a>
                </div>
            </div>
        </div>   
        <div class="card mt-2 mb-2">
            <div class="row g-0">
                <div class="col-4">
                    <img src="assets/img/nettoyage.jpg" alt="machine nettoyage à froid" height="250" width="350" class="rounded-start"/>
                </div>
                <div class="col-8 card-body">
                    <h3 class="card-title text-success">Hivernage et maintenance</h3>
                    <p class="card-text">
                        Pour l'hivernage nous proposons plusieurs formules que vous pourrez retrouver dans les informations supplémentaires.
                        </br>Nous possédons également une machine à froid pulser qui nous permet de nettoyer le robot sans danger et en profondeur pour avoir un effet neuf.
                    </p>
                    <a href="#" class="btn btn-lg btn-success card-text"><small class="lightgreen">plus d'infos ici</small></a>
                </div>
            </div>
        </div>
    </div>


<?php
 include_once path::getViewsPath().'footer.php';
?>
