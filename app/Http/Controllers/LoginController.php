<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
    //
    public function login()
    {   
        return view('login');
    }

    public function loginApi(Request $request)
    {

        $request->validate([
            'email' =>'required|email',
            'password' =>'required|max:8',
        ]);
        try{

            $http = new \GuzzleHttp\Client;
            $email = $request->email;
            $password = $request->password;
    
            $response = $http->post('http://localhost/laravel-api/public/api/login?',[
                'headers' =>[
                    'Authorization' => 'Bearer'.session()->get('token.access_token')
                ],
                'query' =>[
                    'email' =>$email,
                    'password' =>$password
                ]
    
            ]);
    
                $result = json_decode((string)$response->getBody(),true);
                return redirect()->route('user.index');
                
        }catch(\Exception $e){
            return redirect()->back()->with('error','login failed, please try again');
        }

    }

    public function logout()
    {  
        Auth::logout();
        Session::flush();
        return redirect::to('login');
  
    }


    
}