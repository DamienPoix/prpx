</div>
<!-- Modal -->
<div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactFormLabel">Formulaire de contacte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="selectObject">Objet de votre requête :<span class="text-danger">*</span></label>
                        <select class="form-control" name="object" id="selectObject" required>
                            <option value="0" disabled selected>--Objet de votre requête--</option>
                            <option value="DEVIS">Devis</option>
                            <option value="MORE_INFORMATION">Plus d'informations</option>
                            <option value="DOCS">Demande d'un document</option>
                            <option value="DIFFICULTIES">Problèmes avec le site</option>
                            <option value="OTHER">Autre</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="contactSecondName">Nom :</label>
                            <input type="text" class="form-control" id="contactSecondName" placeholder="Dubois">
                        </div>
                        <div class="form-group col-6">
                            <label for="contactFirstname">Prenom :</label>
                            <input type="text" class="form-control" id="contactFirstname" placeholder="Pierre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contactMail">Adresse mail : <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="contactMail" placeholder="prenom@exemple.com" required>
                    </div>
                    <div class="form-group">
                        <label for="contactContent">Votre requêtes : <span class="text-danger">*</span></label>
                        <textarea name="contactContent" class="form-control" id="contactContent" cols="30" rows="5" placeholder="Écrivez votre demande ici.."></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="contactAccepted">
                        <label class="form-check-label" for="contactAccepted">Accepter que pose robot px utilise ses informations afin de vous recontacter <span class="text-danger">*</span></label>
                        
                    </div>
                    <p>(<span class="text-danger">*</span>) Champs Obligatoire</p>
                    <button type="submit" class="btn btn-primary">Envoyé sa demande</button>
                </form>
            </div>
            <div class="modal-footer clearfix">
                <button type="button" class="btn btn-secondary text-start float-left" data-dismiss="modal">fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
<footer class="text-center relative-bottom ">
    <div class="container-fluid text-center border bg-lightgreen">
        <div class="row mt-3">
            <div class="col-3">
                <h3 class="fw-semibold tex-uppercase moderno text-success ">pose robot px</h3>
                <p>POSE ROBOT PX est une entreprise de pose de robot de tonte.Fondé en 2022 nous agissons principalement dans les hauts-de-france. </p>
            </div>
            <div class="col-2">
                <h3 class="fw-semibold tex-uppercase moderno text-success">Informations</h3>
                <p><a href="#!" class="text-reset">Offres Promotionnel</a></p>
                <p><a href="/www/prpx/views/hivernageInfo.php" class="text-reset">Hivernage</a></p>
                <p><a href="/www/prpx/views/serviceInfo.php" class="text-reset">Services</a></p>
            </div>
            <div class="col-3">
                <h3 class="fw-semibold tex-uppercase moderno text-success">utilitaire 2</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactForm">Formulaire de contact</button>
                <p><a href="#!" class="text-reset">Lien 2</a></p>
                <p><a href="#!" class="text-reset">Lien 3</a></p>
            </div>
            <div class="col-4">
                <h3 class="fw-semibold tex-uppercase moderno text-success">contact</h3>
                <p><i class="fa-solid fa-phone me-3"></i>06 33 06 29 01</p>
                <p><i class="fa-solid fa-envelope me-3"></i>poserobotpx@gmail.com</p>
                <p><i class="fa-brands fa-facebook-f me-3"></i><a href="https://www.facebook.com/PoseRobotPX" class="text-reset">PoseRobotPX</a></p>
            </div>
        </div>
        <div class="row border-top moreDarker">
            <p class="col-12 black mt-3 text-success"><i class="fa-regular fa-copyright me-1 cr-footer"></i>POSE ROBOT PX</p>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/www/prpx/assets/js/script.js"></script>
</body>

</html>