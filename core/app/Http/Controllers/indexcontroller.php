<?php

namespace App\Http\Controllers;

use App\Models\productmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Userdetails;

class indexcontroller extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest:cp');
    }

    public function index()
    {
        $data['publishedrecords'] = productmodel::selectrecordswherepublishset();
        return view('home', $data);
    }

    public function showProductDetails($id)
    {
        $data['particularrecord'] = productmodel::selectparticularrecord($id);
        return view('productdetails', $data);
    }

    public function registerUsers(Request $req)
    {
        $req->validate([
            'username' => 'required|max:100',
            'email' => 'required|email|unique:userdata|max:100',
            'password' => 'required|min:8|max:100'
        ]);

        $input = $req->input();
        $dataToSave = array(
            'username' => trim($input['username']),
            'email' => trim($input['email']),
            'password' => Hash::make(trim($input['password'])),
        );

        $check = Userdetails::insertdata($dataToSave);
        if ($check) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function fileuploadview()
    {
        return view('temp');
    }

    public function fileuploadfun(Request $request)
    {

        $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif'
        ]);
        $fileName = time() . '_' . $request->image->extension();
        $request->image->move(public_path('uploads/products'), $fileName);
    }
}
