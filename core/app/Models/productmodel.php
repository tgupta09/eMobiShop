<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class productmodel extends Model
{
    protected $table = "productdetails";
    use HasFactory;
    public static function insertdata($data)
    {
        $check = DB::table('productdetails')->insertGetId($data);
        return $check;
    }

    public static function selectall($email)
    {
        $data = productmodel::where('useremail', $email)->get()->toArray();
        return $data;
    }

    public static function countstatus($email)
    {
        $data['is_submit'] = DB::table('productdetails')->where([['useremail', '=', $email], ['is_submit', '=', 1]])->count();
        $data['is_publish'] = DB::table('productdetails')->where([['useremail', '=', $email], ['is_publish', '=', 1]])->count();
        $data['is_reject'] = DB::table('productdetails')->where([['useremail', '=', $email], ['is_reject', '=', 1]])->count();
        $data['is_draft'] = DB::table('productdetails')->where([['useremail', '=', $email], ['is_submit', '=', 0], ['is_reject', '=', 0], ['is_publish', '=', 0]])->count();
        return $data;
    }

    public static function updateparticularrecord($dataToUpdate, $id)
    {
        $data = DB::table('productdetails')->where('id', '=', $id)->update($dataToUpdate);
        return $data;
    }

    public static function selectparticularrecord($id)
    {
        $data = DB::table('productdetails')->where('id', '=', $id)->get()->toArray();
        return $data;
    }

    public static function countstatusforadmin()
    {
        $data['is_submit'] = DB::table('productdetails')->where([['is_submit', '=', 1]])->count();
        $data['is_publish'] = DB::table('productdetails')->where('is_publish', '=', 1)->count();
        return $data;
    }

    public static function selectallforadmin()
    {
        $data = productmodel::where('is_publish', 1)->orWhere('is_submit', 1)->get()->toArray();
        return $data;
    }

    public static function updatepublishreject($id, $dataToUpdate)
    {
        $data = DB::table('productdetails')->where('id', '=', $id)->update($dataToUpdate);
        return $data;
    }

    public static function selectrecordswherepublishset()
    {
        $data = DB::table('productdetails')->select('id', 'name', 'price', 'category', 'img_name')->where('is_publish', 1)->get()->toArray();
        return $data;
    }

    public static function updateimg_namefield($id, $dataToUpdate)
    {
        $data = DB::table('productdetails')->where('id', $id)->update($dataToUpdate);
        return $data;
    }

    public static function selectimg_namefield($id)
    {
        $data = DB::table('productdetails')->select('img_name')->where('id', $id)->get()->toArray();
        return $data;
    }
}
