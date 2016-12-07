<?php
if(isset($_POST['send'])) {
    $title = $_POST['title'];
    $contenu = $_POST['message'];

}

?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Titre</label>
                        <input type="text" class="form-control" placeholder="Titre" id="title" required data-validation-required-message="Entre ton pseudo">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Contenu</label>
                        <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Entre ton contenu"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default" name="send" id="send">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>