<?php

namespace App\Http\Controllers;

use App\Models\Addportfolio;
use App\Models\category;
use App\Models\Message;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.home'
            ,[
                'portfolios'=>Addportfolio::where('status',1)->get()
            ]);
    }
    public function saveMessage(Request $request)
    {
        Message::saveMessage($request);
        return redirect(route('admin'));
    }
}
