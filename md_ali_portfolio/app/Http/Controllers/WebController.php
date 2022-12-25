<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Message;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home');
    }
    public function saveMessage(Request $request)
    {
        Message::saveMessage($request);
        return back();
    }
}
