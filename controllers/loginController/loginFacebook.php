<?php
//session_start();

class LoginFacebook
{

  private $token;
  private $fb;
  private $url;
  private $helper;


  function __construct()
  {
    $fb = new \Facebook\Facebook([
      'app_id' => '515473163680019',
      'app_secret' => '0dc94461a5cca11eebd2d9ec404f9c98',
      'default_graph_version' => 'v2.4',
    ]);

    $this->setHelper($fb->getRedirectLoginHelper());
    $permissions = ['email']; // Permisos opcionales
    $loginUrl = $this->getHelper()->getLoginUrl('http://localhost/simulationPage/views/encuesta.php', $permissions);
    
    $this->setUrl($loginUrl);
    $this->setFb($fb);
  }

  public function getFb()
  {
    return $this->fb;
  }
  public function setFb($fb)
  {
    return $this->fb = $fb;
  }

  function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }

  function setHelper($helper)
  {
    $this->helper = $helper;
  }

  public function getHelper()
  {
    return $this->helper;
  }

  function setToken($token)
  {
    $this->token = $token;
  }

  public function getToken()
  {
    return $this->token;
  }

  public function auth2Token()
  {

    if (!isset($_SESSION['access_token'])) {
      $_SESSION['access_token'] = (string) $this->getToken();
    }

    if (!isset($_SESSION['email'])) {
      $response = $this->getFb()->get('/me?fields=name,first_name,last_name,email', $this->getToken());
      $userInfo=$response->getGraphUser();
      $_SESSION['email'] = $userInfo['email'];
    }

    if (!isset($_SESSION['photo'])) {

      $requestPicture = $this->getFb()->get('/me/picture?redirect=false&height=200', $this->getToken()); 
      $photoInfo=$requestPicture->getGraphUser();
      $_SESSION['photo'] = $photoInfo['url'];
    }

    if (!isset($_SESSION['logueo'])) {

       $_SESSION['logueo'] = true;
    }

    // OAuth 2.0 client handler




  }
}
