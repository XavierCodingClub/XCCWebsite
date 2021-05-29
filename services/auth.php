<?php
// Quite useful
// https://phppot.com/php/php-google-oauth-login/

require_once '../vendor/autoload.php';
ob_start();
var_dump($_POST);
error_log(ob_get_clean(), 4);

$client_id = '406060550580-jn7q6rgafrpbjs3fgnb287u4oo9onr4v';
$client_secret = 'OzGaArE5D3kvJ_A77pbcBceA';
$redirect_uri = '<Callback-URL>';
$simple_api_key = '<Your-API-Key>';


// Get $id_token via HTTPS POST.

$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    $userid = $payload['sub'];
    // If request specified a G Suite domain:
    //$domain = $payload['hd'];
} else {
    // Invalid ID token
}




?>.