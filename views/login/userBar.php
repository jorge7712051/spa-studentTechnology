<script src="<?php echo ROOTMODULE . "/public/js/login.js" ; ?>"></script>
<div class="col l12 z-depth-1 valign-wrapper">
    <div class="col l2">
        <img class="responsive-img circle " src="<?php echo $_SESSION['photo'] ?>">
    </div>
    <div class="col l4 valign-wrapper">
        <strong class="truncate"><?php echo $_SESSION['email'] ?></strong>
    </div>
    <div class="col l4">
    
        <button id="close-sesion" data-url="<?php echo ROOTMODULE . "/controllers/loginController/logout.php" ; ?>" 
            class="waves-effect red accent-2 btn" style="width:100%;">
             Cerrar sesión
             <i class="material-icons right">exit_to_app</i>
</button>
    </div>
</div>