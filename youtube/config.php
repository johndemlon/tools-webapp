<?php

// OAuth & site configuration
$oauthClientID     = '323516078592-lisimd78msq6liqfls4f278b7vn9fhs2.apps.googleusercontent.com';
$oauthClientSecret = 'AGEirJSvJjnk50efwJbLMJXU';
$baseURL           = 'http://lime.rf.gd/';
$redirectURL       = $baseURL.'upload.php';

define('OAUTH_CLIENT_ID',$oauthClientID);
define('OAUTH_CLIENT_SECRET',$oauthClientSecret);
define('REDIRECT_URL',$redirectURL);
define('BASE_URL',$baseURL);

// Include google client libraries
require_once 'google-api-php-client/autoload.php'; 
require_once 'google-api-php-client/Client.php';
require_once 'google-api-php-client/Service/YouTube.php';

if(!session_id()) session_start();

$client = new Google_Client();
$client->setClientId(OAUTH_CLIENT_ID);
$client->setClientSecret(OAUTH_CLIENT_SECRET);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$client->setRedirectUri(REDIRECT_URL);

// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube($client);
    
?>