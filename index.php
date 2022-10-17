<?php 
include 'classes/path.php'; 
include_once path::getViewsPath().'header.php';
?>
    <h1 class="row">POSE ROBOT PX</h1> 

    <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="assets/img/test-robots.png" class="img-fluid rounded-start" alt="robot tondeuse">
    </div>
    <div class="col-md-8 lightgreen">
      <div class="card-body">
        <h3 class="card-title">Présentation</h3>
        <p class="card-text">texte de présentation de ce que l'on propose</p>
        <p class="card-text"><small class="text-muted">lien vers un bouton pour plus d'info?</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-1">
      <div class="col-md-8 ">
          <div class="card-body">
              <h3 class="card-title">Hivernage et maintenance</h3>
              <p class="card-text">texte de présentation de ce que l'on propose</p>
              <p class="card-text"><small class="text-muted">lien vers un bouton pour plus d'info?</small></p>
            </div>
        </div>
        <div class="col-md-4">
          <img src="assets/img/nettoyage.jpg" class="img-fluid rounded-end" alt="machine à froid">
        </div>
  </div>
</div>


<?php
 include_once path::getViewsPath().'footer.php';
?>
