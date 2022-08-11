<script src="<?php echo ROOTMODULE . "/public/js/login.js"; ?>"></script>
<div class="col l12 z-depth-0 valign-wrapper">
    <div class="col l2">
        <img class="responsive-img circle " style="width:60px ;" src="<?php echo $_SESSION['photo'] ?>">
    </div>
    <div class="col l5 valign-wrapper">
        <strong class="truncate"><?php echo $_SESSION['email'] ?> </strong>
    </div>
    <div class="col l5">

        <button id="close-sesion" data-url="<?php echo ROOTMODULE . "/controllers/loginController/logout.php"; ?>" class="waves-effect red accent-2 btn" style="width:100%;">
            Cerrar sesión
            <i class="material-icons right">exit_to_app</i>
        </button>
    </div>
</div>