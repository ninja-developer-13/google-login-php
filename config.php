<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('422155870214-2p09kctb319jbaan307p2j8if176ts9j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('SH9KwUfJg1-nSKJtPM51d-NQ');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/google-login-php/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
