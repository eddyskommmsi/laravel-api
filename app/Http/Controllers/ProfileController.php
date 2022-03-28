<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('user.edit_user', [
            'user' => $request->user()
        ]);
    }
}