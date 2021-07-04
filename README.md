# API-google-php-symfony-guzzlehhttp-composer
Credential income API for google / php / symfony / guzzlehhttp / composer

Login con la API de google
Inicio de sesión con la API de Google usando PHP

Contenido y Archivos necesarios:

- config.php -
- index.php -
- logout.php -


Paso # 1 : Vallase en el enlace de developers Google : https://console.developers.google.com/ En API y servicios dale clid a (pantalla de consenguimiento) editara y llenara los datos de la nueva API en los siguientes pasos:

       Pantalla de consentimiento de OAuth 
       =============================================================
           Nombre y logo de la App 
             - Nombre de la aplicación -
             - Correo electrónico de asistencia del usuario -
             - Logotipo de la app -
       
           Dominio de la app
             - Página principal de la App - 
             - Vinculo a la Politica de Privacidad de la App -
             - Vinculo a las Condiciones del servicio de la App -
       
           Dominio Autorizado 
             - Agregar la ruta del Dominio de su App -
             - Información de contacto del desarrollador
             
       
       Permisos
       ==============================================================
             - Agregara o Quitara los permisos de la Api -
             
             
             
       Usuarios de prueba
       ==============================================================
             - Guardar y continuar - 
Paso # 2 : En Api y Servicio, vallase en "credenciales" y pulsa "Crear Credenciales". En (ID de Cliente de OAuth), especificara las caracteristicas de su App

       - Tipo de Aplicación -
       - Nombre (cliente web) -
       - Orígenes autorizados de JavaScript -
       - URI de redireccionamiento autorizados -
       
paso # 3 : Debes copiar las credeciales de Api "Client ID" y "Client Secret key" ir al archivo 'config.php'

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
       
       
       
       
enlace de libreria de Api para Google : https://github.com/Coyaks/Login-con-la-API-de-google

Guia e Instrucciones de configuraciob de Api : http://www.thapatechnical.com/2020/04/login-with-google-account-using-php_4.html

para mas informacion vease el Tutorial de Youtube : https://www.youtube.com/watch?v=iUpiWOh4vlE&ab_channel=MenteInform%C3%A1tica

Política de Privacidad - Privacy Policy Condiciones del Servicio - Terms of Service
