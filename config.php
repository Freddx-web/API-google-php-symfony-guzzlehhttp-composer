<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('227471344625-00lul0h4i4bas11it3v11uv8oltg7jef.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('5zefjdDcFIRVfMAhwMFgujwq');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/WWW/PHP%20-%20METODOS%20Y%20FUNCIONES/PHP%20-%20API%20Gmail%20-%20Google/PHP%20-%20Login-con-la-API-de-google-master/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>