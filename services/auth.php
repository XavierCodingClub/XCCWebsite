<?php
// Quite useful
// https://phppot.com/php/php-google-oauth-login/

require_once '../vendor/autoload.php';
// ob_start();
// var_dump($_POST);
// error_log(ob_get_clean(), 4);

$id_token = $_POST['ID_TOKEN'];

//Filling up some data
$CLIENT_ID = '406060550580-jn7q6rgafrpbjs3fgnb287u4oo9onr4v';
// $client_secret = 'OzGaArE5D3kvJ_A77pbcBceA';
// $redirect_uri = 'localhost:8000';
// $simple_api_key = 'AIzaSyAEEVEC0fPnmcgwsPmZlU3TwjDrIJzyFE8';


//Create Client Request to access Google API


$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$client->addScope("email");
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
    // If request specified a G Suite domain:
    //$domain = $payload['hd'];
} else {
    // Invalid ID token
}




?>.