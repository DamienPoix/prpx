<?php 
include 'classes/path.php'; 
include_once path::getViewsPath().'header.php';
?>
    <h1 class="row">POSE ROBOT PX</h1> 
    
    <div class="container mt-5">
         <div class="card mt-2 mb-2">
            <div class="row ">
                <div class="col-4">
                    <img src="assets/img/test-robots.png" alt="machine nettoyage à froid" height="250" width="350" class="rounded-start"/>
                </div>
                <div class="col-8 card-body">
                    <h3 class="card-title">Hivernage et maintenance</h3>
                    <p class="card-text">texte de présentation de ce que l'on propose</p>
                    <p class="card-text"><small class="text-muted">lien vers un bouton pour plus d'info?</small></p>
                </div>
            </div>
        </div>   
        <div class="card mt-2 mb-2">
            <div class="row g-0">
                <div class="col-4">
                    <img src="assets/img/nettoyage.jpg" alt="machine nettoyage à froid" height="250" width="350" class="rounded-start"/>
                </div>
                <div class="col-8 card-body">
                    <h3 class="card-title">Hivernage et maintenance</h3>
                    <p class="card-text">texte de présentation de ce que l'on propose</p>
                    <p class="card-text"><small class="text-muted">lien vers un bouton pour plus d'info?</small></p>
                </div>
            </div>
        </div>
    </div>


<?php
 include_once path::getViewsPath().'footer.php';
?>
