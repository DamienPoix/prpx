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
                    <p class="card-text">texte de présentation de ce que l'on propose</p>
                    <a class="card-text"><small class="lightgreen">lien vers un bouton pour plus d'info?</small></a>
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
                    <p class="card-text">texte de présentation de ce que l'on propose</p>
                    <a class="card-text"><small class="lightgreen">lien vers un bouton pour plus d'info?</small></a>
                </div>
            </div>
        </div>
    </div>


<?php
 include_once path::getViewsPath().'footer.php';
?>
