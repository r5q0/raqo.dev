<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{


    public static function blogPublic(){
        $data = DB::table('blog')->get();
        return view('blog', ['blog' => $data]);
    }
}
