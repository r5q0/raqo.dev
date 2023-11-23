<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public static function postBlog()
    {
      
        $confirm = DB::table('admin')->where('id', 1)->get('key');
        $confirm = $confirm[0]->key;
        $key = request('key');
        if ($confirm == $key) {
            $title = request('title');
            $content = request('blog');
            DB::table('blog')->insert([
                'title' => $title,
                'blog' => $content,
            ]);
            return response()->json(['data' => 'Success']);
        } else {
            return response()->json(['error' => 'Wrong key']);
        }
    }

    public static function setProject()
    {
        $confirm = DB::table('admin')->where('id', 1)->get('key');
        $confirm = $confirm[0]->key;
        $key = request('key');
        if ($confirm == $key) {
            $title = request('title');
            $content = request('project');
            $isPublic = (request('isPublic') == 'true') ? true : false;
            $link = ($isPublic) ? request('link') : null;

            DB::table('projects')->insert([
                'title' => $title,
                'project' => $content,
                'isPublic' => $isPublic,
                'link' => $link,
            ]);
            return response()->json(['data' => 'Success']);
        } else {
            return response()->json(['error' => 'Wrong key']);
        }
    }

    public static function setCv()
    {
        $confirm = DB::table('admin')->where('id', 1)->get('key');
        $confirm = $confirm[0]->key;
        $key = request('key');
        if ($confirm == $key) {
            $cv = request('cv');
            DB::table('admin')->where('id', 1)->update([
                'cv' => $cv,
            ]);
            return response()->json(['data' => 'Success']);
        } else {
            return response()->json(['error' => "$confirm"]);
        }
    }
}
