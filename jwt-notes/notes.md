# JWT NOTES

-   https://www.tutsmake.com/laravel-8-jwt-rest-api-authentication-example-tutorial/ & https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/

-   Install & Configure JWT Authentication Package:
    **composer require tymon/jwt-auth**

-   After successfully install laravel jwt, register providers. Open config/app.php . and put the bellow code :

-   Now, you need to install laravel to generate jwt encryption keys. This command will create the encryption keys needed to generate secure access tokens:
    **php artisan jwt:generate**
