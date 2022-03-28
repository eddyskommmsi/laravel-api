<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;
use Auth;
use Session;
use Redirect;

class UserController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $data['title'] = 'User Profile';
        $data['q'] = $request->q;
        $data['rows'] = User::where('email', 'like', '%' . $request->q . '%')->get();
        return view('user.index', $data);


    }
    // public function index(Request $request)
    // {
    //     $data['title'] = 'User Profile';
    //     return view('user.index')->with('users', User::all());
    // }


    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $data['title'] = 'Edit Data User';
        $data['row'] = $user;
        return view('user.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
    
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();
        return redirect('user')->with('success', 'Data Updated Successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
