<?php
require_once dirname(__FILE__, 3) . '/models/user.php';

class LoginGoogle
{
    private $token;
    private $client;
    private $url;
    private $helper;
  
  
    function __construct()
    {
      $client = new Google\Client();
      $client->setClientId("485170235478-jdr4oc32ths48mudk3252ulbtvphub2l.apps.googleusercontent.com");
      $client->setClientSecret("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");
      $client->setRedirectUri("http://localhost/simulationPage/views/encuesta.php");
      $client->addScope("email");
      $client->addScope("profile");
  
    
      $loginUrl = $client->createAuthUrl();
      $loginUrl . '&app=google';
      $this->setUrl($loginUrl);
      $this->setClient($client);
    }
  
    public function getClient()
    {
      return $this->client;
    }
    public function setClient($client)
    {
      return $this->client = $client;
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
      $userObj=[];
      $google_oauth = new Google_Service_Oauth2($this->getClient());
      $google_account_info = $google_oauth->userinfo->get();
      
            
      
  
      if (!isset($_SESSION['access_token'])) {
        $_SESSION['access_token'] = $this->getToken();
      }
  
      if (!isset($_SESSION['email'])) {
        
        $_SESSION['email'] = $google_account_info->email;
        $userObj["username"] = $google_account_info->name;
        $userObj["userEmail"]= $_SESSION['email'];
      }
  
      if (!isset($_SESSION['photo'])) {
        $_SESSION['photo'] = $google_account_info->picture;
      }
  
      if (!isset($_SESSION['logueo'])) {
  
         $_SESSION['logueo'] = true;
      }

      $user = new User;
      $response = $user->createUser($userObj);
   
      $_SESSION['iduser'] = $response->id;
  
      // OAuth 2.0 client handler
  
  
  
  
    }
  
}

?>