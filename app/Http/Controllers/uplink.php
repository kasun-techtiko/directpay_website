<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class uplink extends Controller
{
    function rocket(Request $req)
    {
    $news= new News;
        $news->title=$req->title;
        $news->shortChapter=$req->shortChapter;
        $news->sourceLink=$req->sourceLink;
        $news->ndate=$req->ndate;
        $news->nsource=$req->nsource;
        $news->category=$req->category;
        $news->mcontent=$req->mcontent;
        $news->paraTwo=$req->paraTwo;
        $news->parathree=$req->parathree;
        $news->main=$req->main;
        $news->mainMobile=$req->mainMobile;
        $news->titleIcon=$req->titleIcon;
        $news->sourceLogo=$req->sourceLogo;
        $news->save();

        return redirect('create-article');


    }
}
