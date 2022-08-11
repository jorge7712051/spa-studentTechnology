<?php
require_once dirname(__FILE__, 3) . '/config/config.php';
require_once dirname(__FILE__, 3) . '/vendor/autoload.php';
require_once dirname(__FILE__, 3) . '/controllers/loginController/loginFacebook.php';
require_once dirname(__FILE__, 3) . '/controllers/loginController/loginGoogle.php';
session_start();
#creacion URl Facebook

if (isset($_SESSION['logueo'])) {
  require_once dirname(__FILE__, 2) . '/quiz/quizForm.php';
} elseif (isset($_GET['code'])) {
  
  try {
    if (isset($_SESSION['logueo'])) {
      require_once dirname(__FILE__, 2) . '/quiz/quizForm.php';
    } else {
      if (isset($_GET['state'])) {
        $sdkFacebook = new LoginFacebook();
        $sdkFacebook->setToken($sdkFacebook->getHelper()->getAccessToken());
        $sdkFacebook->auth2Token();
      } else {
        $sdkGoogle = new LoginGoogle();

        $sdkGoogle->setToken($sdkGoogle->getClient()->fetchAccessTokenWithAuthCode($_GET['code']));
        $sdkGoogle->getClient()->setAccessToken($sdkGoogle->getToken());
        $sdkGoogle->auth2Token();
      }

      require_once dirname(__FILE__, 2) . '/quiz/quizForm.php';
    }
  } catch (Facebook\Exceptions\facebookResponseException $e) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
} else {
  $sdkFacebook = new LoginFacebook();
  $sdkGoogle = new LoginGoogle();
?>
  <link href="<?php echo ROOTMODULE . "/public/css/login.css"; ?>" rel="stylesheet">

  <dv class="container">
    <div class="row valign-wrapper login">
      <div class="col l4 offset-l4 s12">
        <div class="col l4 offset-l4 s12" style="margin-top: 8px;">
          <img class="responsive-img" src="<?php echo ROOTMODULE . "/public/img/logo.png"; ?>">
        </div>
        <div class="col l12 s12 no-padding" style="margin-bottom: 8px;">
          <a href="<?php echo htmlspecialchars($sdkFacebook->getUrl()) . '&app=facebook' ?>" class="waves-effect blue accent-4 btn" style="width:100%;">
            <i class="fa-brands fa-square-facebook"></i> Iniciar sesión con Facebbok</a>
        </div>
        <div class="col l12 s12 no-padding googleBtn" style="margin-bottom: 20px;">
          <a href="<?php echo htmlspecialchars($sdkGoogle->getUrl()) ?>" class="waves-effect grey lighten-5 btn" style="width:100%; color:black">
              <i class="material-icons prefix fa-brands fa-google" style="color: #bdbdbd  ;"></i> Iniciar sesión con Google</a>
        </div>
        <form class="col l12 s12 z-depth-2">
          <div class="row">
            <div class="input-field col s12 ">
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
          <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-bottom: 20px; width:100%">Iniciar Sesión
          </button>
          
        </form>
        <div class="col l12 s12 center-align">
        <a href="#">Politica de tratamiento de datos</a> | No tienes cuenta <a href="#">registrate</a>  
        </div> 
        
               
      </div>
    </div>
    </div>
  <?php
}

/* Cambiar según la ubicación de tu directorio*/





/* Link a la página de login*/

  ?>