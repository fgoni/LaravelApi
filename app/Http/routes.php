<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// BLADE DELIMITERS CHANGE
// This way we can use AngularJS delimiters without conflicts in our files.

Blade::setContentTags('<%', '%>'); // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); // for escaped data

// HOME PAGE ===================================
// we dont need to use Laravel Blade
// we will return a PHP file that will hold all of our Angular content
// see the "Where to Place Angular Files" below to see ideas on how to structure your app return
Route::get('/', function() {
    return view()->file('views/index.php');
});
// API ROUTES ===================================
Route::group(array('prefix' => 'api'), function() {

    Route::resource('marcas', 'MarcaController');
    Route::resource('programas', 'ProgramaController');
    Route::resource('personajes', 'PersonajeController');

});


//OAUTH ROUTES
Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});

//SECURE ROUTE EXAMPLE
Route::get('protected-resource', ['before' => 'oauth', function() {
   return "ok";
}]);

// CATCH ALL ROUTE =============================


// // all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
Route::any('{path?}', function()
{
    return view()->file('views/index.php');
});