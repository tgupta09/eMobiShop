<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Userdetails extends Model
{
    use HasFactory;
    protected $table = 'userdata';

    public static function insertdata($data)
    {
        $check = DB::table('userdata')->insertGetId($data);
        return $check;
    }

    public static function selelctemail($data)
    {
        $check = DB::table('userdata')->select('id')->where('email', $data)->get()->toArray();
        return $check;
    }
}
