<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Userdetails;

class logincp extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:cp')->except('logoutcp');
    }

    public function processLogin(Request $req)
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
        if (Auth::guard('cp')->attempt($credentials)) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function logoutcp()
    {
        if (Auth::guard('cp')->check()) {
            Auth::guard('cp')->logout();
        }
        return redirect()->route('index');
    }

    public function redirectGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callbackGithub()
    {
        $user = Socialite::driver('github')->user();
        $useremail = $user->getEmail();
        $userid = Userdetails::selelctemail($useremail);
        if (!$userid) {
            $name = !empty($user->getName()) ? $user->getName() : $user->getNickname();
            $dataToSave = array(
                'username' => $name,
                'email' => $useremail,
                'github_id' => $name,
                'avatar' => $user->getAvatar(),
            );
            $insertid = Userdetails::insertdata($dataToSave);
            if ($insertid) {
                if ($this->processLoginUsingGithub($insertid)) {
                    return redirect()->route('showuserdash');
                }
                return redirect()->route('index');
            }
            redirect()->route('index');
        } else {
            $useridval = $userid[0]->id;
            if ($this->processLoginUsingGithub($useridval))
                return redirect()->route('showuserdash');
        }
        return redirect()->route('index');
    }

    public function processLoginUsingGithub($cred)
    {
        if (Auth::guard('cp')->loginUsingId($cred)) {
            return true;
        } else {
            return false;
        }
    }
}

    // public function processLoginUsingGithub($cred)
    // {

    //     if(Auth::guard('cp')->loginUsingId($userid)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
// }
