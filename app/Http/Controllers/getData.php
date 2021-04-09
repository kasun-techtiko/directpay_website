<?php

namespace App\Http\Controllers;

use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\getcdata;
class getData extends Controller
{
    function index()
    {
        //return DB::select("select * from news");
        $content=news::all();
        return view('blog6',['contentkey'=>$content]);
    }
}
