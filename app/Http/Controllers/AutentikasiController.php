<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Admin;

class AutentikasiController extends Controller
{
    public function login(Request $request){
        
        $client = new Client(); //GuzzleHttp\Client


        $result = $client->post('https://cis-dev.del.ac.id/api/authentication/do-auth', [
            'form_params' => [
            'username' => $request->username,
            'password' => $request->password,
            ],
            'headers' => [
                'Accept'     => 'application/json'
            ],
            'decode_content' => false
        ]);
        
        $json = json_decode($result->getBody()->getContents(), true);
        //var_dump($result->getBody()->getContents());
        //var_dump($json['result']);
        if($json['result'] == 1){
            return view('homecivitas');
        }

        die();
        return $result;
    }
}