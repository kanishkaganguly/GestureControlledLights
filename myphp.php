<?php

$curl = curl_init();
$case = $_POST['action'];
if (isset($case)) {
    switch ($case) {
        case 'right': {
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'http://192.168.0.101/?lighton',
                ));
                curl_exec($curl);
                $response = 'OKAY';
                echo $response;
            }
            break;
        case 'left': {
                $curl = curl_init('http://192.168.0.101/?lightoff');
                curl_exec($curl);
                $response = 'OKAY';
                echo $response;
            }
            break;
        case 'up': {
                $curl = curl_init('http://192.168.0.101/?fanon');
                curl_exec($curl);
                $response = 'OKAY';
                echo $response;
            }
            break;
        case 'down': {
                $curl = curl_init('http://192.168.0.101/?fanoff');
                curl_exec($curl);
                $response = 'OKAY';
                echo $response;
            }

            break;
        default: header("Location: http://www.google.com");
            break;
    }
    curl_close($curl);
}
?>