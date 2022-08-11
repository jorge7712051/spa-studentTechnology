<?php
require_once dirname(__FILE__, 3) . '/models/technology.php';

$technology = new Technology;
$response = $technology->getTechnology();
?>
<link href="<?php echo ROOTMODULE . "/public/css/login.css"; ?>" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col l8 offset-l2">
            <div class="section">
                <?php require_once dirname(__FILE__, 2) . '/login/userBar.php'; ?>
            </div>
            <div class="section">

                <form class="col l12 formQuiz purple lighten-5">
                    <div class="row">
                        <h6>¿Qué tecnologia le gustaria que se dictara en la carrera?</h6>
                        <?php echo $response; ?>
                    </div>
                    <div class="row" style="margin-top: 50px;">
                        <h6>Otra ¿Cúal?</h6>
                        <div class="input-field col s12">
                            <input  id="first_name" type="text" class="validate">
                        </div>
                    </div>
                    <div class="row">
                        <h6>Sugerencia</h6>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>

                        </div>
                    </div>
                    <div class="row">
                        <h6>Linkedin</h6>
                        <div class="input-field col s12">
                            <i class="material-icons prefix fa-brands fa-linkedin"></i>
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-bottom: 20px; width:100%">Guardar Respuestas
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>