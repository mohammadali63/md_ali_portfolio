<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    private static $menu;
    public static function menuSave($request)
    {
        self::$menu = new Menu();
        self::$menu->menuname = $request->menuname;
        self::$menu->href     = $request->href;
        self::$menu->save();
    }
}
