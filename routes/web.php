<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use TheNetworg\OAuth2\Client\Provider\Azure;

Route::get('/', function () {

    if(empty($token)){
        return redirect("/oauth");
    }

    return redirect("/results"); 
});


Route::get('/oauth', function (Request $request, Azure $provider) {
   
    if (!$request->has('code')) {
        return redirect($provider->getAuthorizationUrl());
    } else {
        // Try to get an access token (using the authorization code grant)
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $_GET['code']
        ]);
        
        session(['token' => $token]);

        return redirect("/results");
    }
});

Route::get('/results', function (Request $request, Azure $provider) {

    $token = session('token');

    if(empty($token)){
        return redirect("/oauth");
    }

    $data = $provider->get("me/insights/trending", $token);

    return view("results", ['title'=>'trending', 'items'=>$data]);

});