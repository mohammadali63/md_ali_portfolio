<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function addLogo()
    {
        return view('admin.portfolio.add-logo');
    }
    public function saveLogo(Request $request)
    {
        Logo::svelogo($request);
        return back();
    }
}
