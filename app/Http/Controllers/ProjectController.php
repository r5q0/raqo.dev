<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public static function getPage(){
        $data = DB::table('projects')->orderBy('date', 'desc')->get();
        return view('projects', ['projects' => $data]);
    }
}
