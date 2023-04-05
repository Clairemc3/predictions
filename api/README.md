# Authentication

The Api uses [Laravel SANCTUM's Mobile App Authentication](https://laravel.com/docs/10.x/sanctum#mobile-application-authentication) method to authenticate requests.

Please note, that this method has been chosen in preparation for the migration of the app onto mobile

The authentication is a token based authenication:
 - A request is made to /api/login with user credentials
 - A payload including an 'access_token' is returned
 - All subsequent requests should pass the access_token in the Authorization header as a Bearer token.


To experiment with the api, use the Postman collection here https://www.postman.com/predictions-api.

A pre-request script has been setup so there is no need to authenticate before using the endpoints
