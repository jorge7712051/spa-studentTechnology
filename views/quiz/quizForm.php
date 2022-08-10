<?php


//$url = 'https://www.facebook.com/logout.php?next=http://localhost/simulationPage/views/encuesta.php' .    '&access_token=' . $_SESSION['access_token'];

//session_destroy();


https: //www.facebook.com/logout.php?next=url&access_token=token


// header("Location: http://localhost/simulationPage/views/encuesta.php");        
?>

<dv iclass="container">
    <div class="row">
        <div class="col l6 offset-l3">
            <?php  require_once dirname(__FILE__,2).'/login/userBar.php'; ?>
            <form class="col l12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Correo Electronico</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>