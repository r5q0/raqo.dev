<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{


    public static function blogPublic(){
        $data = DB::table('blog')->orderBy('date', 'desc')->get();
        return view('blog', ['blog' => $data]);
    }
    public static function getPost($id){
        $data = DB::table('blog')->where('id', $id)->get();
        return view('blogs', ['blog' => $data]);
    }
}
