<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginmcp extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:mcp')->except('logoutmcp');
    }

    public function showMcplogin()
    {
        return view('mcplogin');
    }

    public function processLoginMcp(Request $req)
    {
        $req->validate([
            'email' => 'required|email|max:100',
            'password' => 'required|min:8|max:100'
        ]);

        $input = $req->input();
        $credentials = array(
            'email' => trim($input['email']),
            'password' => trim($input['password'])
        );
        if (Auth::guard('mcp')->attempt($credentials)) {
            $msg = array('status' => 'success');
        } else {
            $msg = array('status' => 'fail');
        }
        return response()->json(json_encode($msg));
    }

    public function logoutmcp()
    {
        if (Auth::guard('mcp')->check()) {
            Auth::guard('mcp')->logout();
        }
        return redirect()->route('index');
    }
}
