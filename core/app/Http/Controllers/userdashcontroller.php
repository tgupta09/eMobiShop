<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\productmodel;

class userdashcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:cp');
    }

    public function index()
    {
        $email = Auth::guard('cp')->user()->email;
        $data = productmodel::countstatus($email);
        return view('userdash', $data);
    }

    public function submitproduct(Request $req)
    {
        $req->validate([
            'name' => 'required|max:150',
            'brand' => 'required|max:100',
            'category' => 'required|max:100',
            'price' => 'required|max:10',
            'sku' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $input = $req->input();
        $fileName = time() . '.' . $req->image->extension();

        $dataToSave = array(
            'name' => trim($input['name']),
            'brand' => trim($input['brand']),
            'category' => trim($input['category']),
            'price' => trim($input['price']),
            'description' => trim($input['description']),
            'sku' => trim($input['sku']),
            'useremail' => Auth::guard('cp')->user()->email,
            'img_name' => $fileName,
            'is_submit' => 1,
            'is_publish' => 0,
            'is_reject' => 0,
        );

        $check = productmodel::insertdata($dataToSave);
        $imgUpload = $req->image->move(public_path('uploads/products'), $fileName);

        if ($check && $imgUpload) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function saveproductdraft(Request $req)
    {
        $req->validate([
            'name' => 'required|max:150',
            'brand' => 'required|max:100',
            'category' => 'required|max:100',
            'price' => 'required|max:10',
            'sku' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $input = $req->input();
        $fileName = time() . '_' . $req->image->extension();

        $dataToSave = array(
            'name' => trim($input['name']),
            'brand' => trim($input['brand']),
            'category' => trim($input['category']),
            'price' => trim($input['price']),
            'description' => trim($input['description']),
            'sku' => trim($input['sku']),
            'useremail' => Auth::guard('cp')->user()->email,
            'img_name' => $fileName,
            'is_submit' => 0,
            'is_publish' => 0,
            'is_reject' => 0,
        );

        $check = productmodel::insertdata($dataToSave);
        $imgUpload = $req->image->move(public_path('uploads/products'), $fileName);

        if ($check && $imgUpload) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function displaytableallcat()
    {
        $email = Auth::guard('cp')->user()->email;
        $data = productmodel::selectall($email);
        return response()->json(json_encode($data));
    }

    public function editdraft(Request $req)
    {
        $req->validate([
            'editname' => 'required|max:150',
            'editbrand' => 'required|max:100',
            'editcategory' => 'required|max:100',
            'editprice' => 'required|max:10',
            'editsku' => 'required|max:100',
            'editdescription' => 'required'
        ]);

        $input = $req->input();

        $dataToSave = array(
            'name' => trim($input['editname']),
            'brand' => trim($input['editbrand']),
            'category' => trim($input['editcategory']),
            'price' => trim($input['editprice']),
            'description' => trim($input['editdescription']),
            'sku' => trim($input['editsku']),
            'useremail' => Auth::guard('cp')->user()->email,
            'is_submit' => 0,
            'is_publish' => 0,
            'is_reject' => 0,
        );
        $check = productmodel::updateparticularrecord($dataToSave, $input['id']);
        if ($check) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function editsubmittedproduct(Request $req)
    {
        $req->validate([
            'editname' => 'required|max:150',
            'editbrand' => 'required|max:100',
            'editcategory' => 'required|max:100',
            'editprice' => 'required|max:10',
            'editsku' => 'required|max:100',
            'editdescription' => 'required'
        ]);

        $input = $req->input();

        $dataToSave = array(
            'name' => trim($input['editname']),
            'brand' => trim($input['editbrand']),
            'category' => trim($input['editcategory']),
            'price' => trim($input['editprice']),
            'description' => trim($input['editdescription']),
            'sku' => trim($input['editsku']),
            'useremail' => Auth::guard('cp')->user()->email,
            'is_submit' => 1,
            'is_publish' => 0,
            'is_reject' => 0,
        );

        $check = productmodel::updateparticularrecord($dataToSave, $input['id']);
        if ($check) {
            $msg = array("status" => "success");
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }

    public function enterdetailsintoeditformfields(Request $req)
    {
        $id = $req->input('id');
        $data = productmodel::selectparticularrecord($id);
        if ($data) {
            $msg = array("status" => "success", "data" => $data);
        } else {
            $msg = array("status" => "fail", "data" => $data);
        }
        return response()->json(json_encode($msg));
    }

    public function imgedit(Request $req)
    {
        $req->validate([
            'editimage' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $fileName = time() . '.' . $req->editimage->extension();

        $dataToUpdate = array(
            'img_name' => $fileName
        );
        $id = $req->input('id');
        $fileToDelete = productmodel::selectimg_namefield($id);
        if (file_exists(public_path('/uploads/products/' . $fileToDelete[0]->img_name))) {
            unlink(public_path('/uploads/products/' . $fileToDelete[0]->img_name));
        }
        $imgUpload = $req->editimage->move(public_path('uploads/products'), $fileName);
        $check = productmodel::updateimg_namefield($id, $dataToUpdate);

        if ($check && $imgUpload) {
            $msg = array("status" => "success", "imgname" => $fileName);
        } else {
            $msg = array("status" => "fail");
        }
        return response()->json(json_encode($msg));
    }
}
