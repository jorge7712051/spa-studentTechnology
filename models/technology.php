<?php

class Technology
{
    public function getTechnology()
    {
           
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => API.'Technology',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'GET',
            
        ));

        $response = curl_exec($curl);  
        /*if (curl_errno($curl)) {
            var_dump( curl_error($curl));
        } */     
        curl_close($curl);
        $array=json_decode($response);
        $html='';
       
        foreach ($array as $value) {
            $html .= '<div class="input-field col s3">
            <label> <input type="checkbox" value="'.$value->id.'" /><span>'.$value->technology.'</span></label>
            </div>';
           
         }
        
        return $html;
    }
}
