<?php
//récupération du json dans la variable file
$file = '../assets/js/market.json';
//données du json
$data = json_decode(file_get_contents($file));
?>
<!DOCTYPE html>
<html> 
  <head>
    <link rel="icon" type="icon" href="assets/img/prpx.png" />
    <meta charset="UTF-8">
    <title>market</title> 
  </head>

  <body> 
    <h1>Magasin patenaire</h1> 
    <?php for($i=0;$i<=count($data)-1;$i++){ 
        $product = $data[$i]->product;?>
        <h2><?php echo($data[$i]->name); ?></h2>
        <p>Marque proposé</p>
        <ul>
        <?php for($p=0;$p<=count($product)-1;$p++){ ?>
        <li><?php echo($product[$p]) ?></li>
        <?php }; ?>
        </ul>
        <p>Ou nous joindre?</p>
        <p>Numéro de téléphone : <?php echo($data[$i]->phoneNumber) ?></p>
        <p>Par mail : <?php echo($data[$i]->mail) ?></p>
        <p>site web du partenaire : <?php echo($data[$i]->website) ?></p>
   <?php }; ?>
  </body>
</html>
