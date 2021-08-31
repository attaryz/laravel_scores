<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request)
    {
        $date = date('y-m-d');
        $username = env('USER_NAME');
        $token = env('TOKEN');
        $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=" . $username . "&token=" . $token . "&t=schedule&d=" . $date . "&league_id=1609");
        return view('index', ['response' => $response]);
    }
}
