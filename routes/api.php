<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!

1) Login: Verb:GET, URL:http://localhost:8000/oauth/token

2) Register: Verb:GET, URL:http://localhost:8000/api/register

3) List: Verb:GET, URL:http://localhost:8000/api/products

4) Create: Verb:POST, URL:http://localhost:8000/api/products

5) Show: Verb:GET, URL:http://localhost:8000/api/products/{id}

6) Update: Verb:PUT, URL:http://localhost:8000/api/products/{id}

7) Delete: Verb:DELETE, URL:http://localhost:8000/api/products/{id}
|
*/

Route::post('register', 'App\Http\Controllers\API\RegisterController@register');
  
Route::middleware('auth:api')->group( function () {
	Route::resource('products', 'App\Http\Controllers\API\ProductController');
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

