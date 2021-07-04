# API-google-php-symfony-guzzlehhttp-composer

Login with Google API using PHP, Symfony, Guzzlehttp, Composer

Content and files required:

- config.php -
- index.php -
- logout.php -

Step # 1 : Go to the Google developers link : https://console.developers.google.com/ In API and services click `(consengument screen)` Edit and fill in the data for the new API in the following steps:

       OAuth consent screen
       =========================================================
           App name and logo
              - Application name -
              - User support email -
              - App logo -
       
          Application domain
               - Main page of the application -
               - Link to the Privacy Policy of the Application -
               - Link to the Application Terms of Service -
       
          Authorized domain
               - Add your application domain path -
               - Developer contact information
             
       
       Permissions
       =========================================================
                - Add or remove API permissions -
             
             
             
       Test users
       =========================================================
                - Save and continue -
             
Step # 2: In Api and Service, go to `Credentials` and press` "Create Credentials" `. In `" OAuth Client ID "`, you will specify the characteristics of your App for your API

       - Tipo de Aplicación -
       - Nombre (cliente web) -
       - Orígenes autorizados de JavaScript URL -
       - URL de redireccionamiento autorizados -
       
Step # 3 : In the credeciales of your Api in Google `" Client ID "` and `" Client Secret key "` you must copy and paste it and go to the file `'config.php'`
           along with the `AUTHORIZED URL` of your app and paste it where it specifies.

    <?php

        //start session on web page
        session_start();

        // Include Google Client Library for PHP autoload file
        require_once 'vendor/autoload.php';

        // Make object of Google API Client for call Google API
        $google_client = new Google_Client();

        // Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
        $google_client->setClientId('---------> ID DE CLIENTE <---------');

        // Set the OAuth 2.0 Client Secret key
        $google_client->setClientSecret('---------> SECRET KEY <---------');

        // Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
        $google_client->setRedirectUri('---------> URL AUTORIZADO <---------');

        // to get the email and profile 
        $google_client->addScope('email');

        $google_client->addScope('profile');

    ?> 
    
Step # 4 : Login in `http://localhost/index.php`
       
       
   
Api library link for Google: https://github.com/Coyaks/Login-con-la-API-de-google

API setup instruction guide: http://www.thapatechnical.com/2020/04/login-with-google-account-using-php_4.html

for more information see the Youtube Tutorial: https://www.youtube.com/watch?v=iUpiWOh4vlE&ab_channel=MenteInform%C3%A1tica


