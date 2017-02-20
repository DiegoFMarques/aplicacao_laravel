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

Route::group(['middleware' => 'cors'], function(){
  Route::post('oauth/access_token', function() {
      return Response::json(Authorizer::issueAccessToken());
  });
  Route::group(['prefix' => 'api', 'middleware' => 'oauth', 'as' => 'api.'], function(){

      Route::group(['prefix' => 'usuario', 'as' => 'usuario.'], function(){
          Route::get('pedido', function(){
            return [
              'id' => 'ok'
            ];
          });
      });
      Route::get('authenticated', 'Api\UserController@authenticated');
  });


});
