<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function register()
    {   
        return view('register');
    }

    public function registerApi(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
        try{

            $http = new \GuzzleHttp\Client;

            $name = $request->name;
            $email = $request->email;
            $username = $request->username;
            $phone = $request->phone;
            $password = $request->password;
            $c_password = $request->c_password;

    
            $response = $http->post('http://localhost/laravel-api/public/api/register',[
                'headers' =>[
                    'Authorization' => 'Bearer'.session()->get('token.access_token')
                ],
                'query' =>[
                    'name' =>$name,
                    'email' =>$email,
                    'username' =>$username,
                    'phone' =>$phone,
                    'password' =>$password,
                    'c_password' =>$c_password,

                ]
    
                ]);
    
                $result = json_decode((string)$response->getBody(),true);
                return redirect()->route('login'); 
                
        }catch(\Exception $e){
            return redirect()->back()->with('error','Register failed, please try again');
        }


            

    }
}
