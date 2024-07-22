<?php

namespace App\Services;

use Google\Client as Google_Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;
use Illuminate\Http\Request;

class GoogleService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setClientId(env('GOOGLE_CLIENT_ID'));
        $this->client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $this->client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $this->client->addScope('https://www.googleapis.com/auth/userinfo.email');
        $this->client->addScope('https://www.googleapis.com/auth/userinfo.profile');
        $this->client->setHttpClient(new \GuzzleHttp\Client(['verify' => false])); // Disable SSL verification
        // Set custom CA bundle path for Windows
        // $this->client->setHttpClient(new \GuzzleHttp\Client([
        //     'verify' => 'C:\certificates\cacert.pem' // Adjust this path to where you saved cacert.pem
        // ]));
    }

    public function getAuthUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function getUser(Request $request)
    {
        if ($request->has('code')) {
            $token = $this->client->fetchAccessTokenWithAuthCode($request->input('code'));

            if (isset($token['error'])) {
                throw new \Exception($token['error_description']);
            }

            $this->client->setAccessToken($token['access_token']);
            
            $oauth2 = new Google_Service_Oauth2($this->client);
            return $oauth2->userinfo->get();
        }

        return null;
    }
}
