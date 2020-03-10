<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Section;
use App\Company;
use App\Message;
use App\Page;
use App\View;


class AdminController extends Controller
{
    public function index()
    {

    $visitorTraffic = View::where('viewable_id', '=', '1')
        ->get()
        ->groupBy(function($date) {
            return Carbon::parse($date->viewed_at)->format('m/d/Y'); // grouping by months
        });

        $viewCount = View::where('viewable_id', '=', '1')->count();
        $views_today = View::whereDate('viewed_at', Carbon::today())->count();
        $message_count = Message::count();
        $company_info = Company::find(1);

        return response()->json([
            'sections' => Section::all(),
            'views' => $visitorTraffic,
            'view_count' => $viewCount,
            'views_today' => $views_today,
            'message_count' => $message_count,
            'company_info' => $company_info
        ]);

    }
}
