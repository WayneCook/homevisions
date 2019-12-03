<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Section;
use App\Page;


class AppController extends Controller
{
    public function index()
    {

        $page = Page::where('slug', 'home')->first();
        views($page)->record();

        return response()->json([
            'sections' => Section::all()
        ]);

    }
}
