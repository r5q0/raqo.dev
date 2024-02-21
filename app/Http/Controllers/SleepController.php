<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SleepController extends Controller
{
    public static function sleepLog()
    {
        DB::table('sleep')->insert(['time' => now()]);
        return 'Sleep log added!';
    }
}
