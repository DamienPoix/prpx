<?php 
include '../classes/path.php';
include_once 'header.php';
?>
<div class="moderno">
    <h1 class="text-success text-center title">Hivernage et maintenance</h1>
    <h2>Nos différentes formules</h2>
    <table class="table table-bordered text-center container ">
        <thead class="moreDarker">
            <tr>
                <th scope="col">Service inclus</th>
                <th scope="col">Formule ECO</th>
                <th scope="col">Formule BASIQUE</th>
                <th scope="col" class="bg-warning">Formule PREMIUM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Mise à jour logiciel</th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th class="bg-warning"><i class="fa-solid fa-circle-check text-success "></i></th>
            </tr>
            <tr>
                <th scope="row">hivernage*</th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
            </tr>
            <tr>
                <th scope="row">remplacement pièces garantie</th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
            </tr>
            <tr>
                <th scope="row">nettoyage simple</th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
            </tr>
            <tr>
                <th scope="row"><a href="#" class="noStyle">nettoyage premium*</a></th>
                <th><i class="fa-solid fa-circle-xmark text-danger"></i></th>
                <th><i class="fa-solid fa-circle-xmark text-danger"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
            </tr>
            <tr>
                <th scope="row">remise en route au domicile</th>
                <th><i class="fa-solid fa-circle-xmark text-danger"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
                <th><i class="fa-solid fa-circle-check text-success"></i></th>
            </tr>
            <tr>
                <th scope="row bolder">Tarif 2022</th>
                <th>111€</th>
                <th>111€</th>
                <th>111€</th>
            </tr>
        </tbody>
    </table>
</div>
<?php include_once 'footer.php';?>