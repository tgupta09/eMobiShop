<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productmodel;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;


class admindashcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:mcp');
    }

    public function showMcpDashboard()
    {
        $data = productmodel::countstatusforadmin();
        return view('admindash', $data);
    }

    public function displaytable()
    {
        // die('sdf');
        $data = productmodel::selectallforadmin();
        return response()->json(json_encode($data));
    }

    public function setpublish(Request $req)
    {
        $dataToUpdate = array(
            'is_publish' => 1,
            'is_submit' => 0,
            'is_reject' => 0
        );
        $check = productmodel::updatepublishreject($req->input('id'), $dataToUpdate);
        if ($check) {
            $msg = array('status' => 'success');
        } else {
            $msg = array('status' => 'fail');
        }
        return response()->json(json_encode($msg));
    }

    public function setreject(Request $req)
    {
        $dataToUpdate = array(
            'is_publish' => 0,
            'is_submit' => 0,
            'is_reject' => 1
        );
        $check = productmodel::updatepublishreject($req->input('id'), $dataToUpdate);
        if ($check) {
            $msg = array('status' => 'success');
        } else {
            $msg = array('status' => 'fail');
        }
        return response()->json(json_encode($msg));
    }

    public function coverttoexcel()
    {
        return Excel::download(new ProductExport, 'productdetails.xlsx');
    }
}
