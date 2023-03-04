<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.home.home');
    }
    public function manageMessage()
    {
        return view('admin.frontendmessage.manage-message',[
            'messages'=>Message::all()
        ]);
    }
}
