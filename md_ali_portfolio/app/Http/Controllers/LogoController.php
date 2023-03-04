<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function addLogo()
    {
        return view('admin.portfolio.add-logo');
    }
    public function saveLogo(Request $request)
    {

    }
}
