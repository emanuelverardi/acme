<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

class ApiAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //AccessToken
        $access_token = $this->_getAccessToken();
        View::share('access_token', $access_token);
        return $next($request);
    }


    public function _getAccessToken()
    {

        //Set the oauth2 key
        $http = new \GuzzleHttp\Client;

        $arr = [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => env('ADMIN_APP_CLIENT_ID', false),
                'client_secret' => env('ADMIN_APP_CLIENT_SECRET', false),
                'username' => env('ADMIN_APP_USERNAME', false),
                'password' => env('ADMIN_APP_PASSWORD', false),
                'scope' => '',
            ]];

        if(App::environment() == 'local'){
            $url = 'http://web/oauth/token';
        }else{
            $url = URL::to('/oauth/token');
        }

        $response = $http->post($url, $arr);

        $res = json_decode((string)$response->getBody(), true);
        return $res['access_token'];
    }
}
