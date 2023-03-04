<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function addMenu()
    {
        return view('admin.portfolio.add-menu');
    }
    public function saveMenu(Request $request)
    {
        Menu::menuSave($request);
        return back();
    }
}
