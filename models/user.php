<?php

class User
{
    public function createUser($user)
    {
        $datetime_variable = date('Y-m-d H:i:s');
        $ahora = DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''));
        $formateado = $ahora->format("Y-m-d\TH:i:s");
    
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://localhost:44324/api/user',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                    "userName": "' . $user["username"] . '",
                    "userEmail": "' . $user["userEmail"] . '",
                    "userResponse": false,
                    "privacyPolicy": true,
                    "userPassword": "",
                    "userLastUpdate" : "' . $formateado .'"

        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        
        curl_close($curl);
        return json_decode($response);
    }
}
