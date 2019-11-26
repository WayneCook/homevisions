<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Section;


class AdminController extends Controller
{
    public function index()
    {

        return response()->json([
            'sections' => Section::all()
        ]);

    }
}
