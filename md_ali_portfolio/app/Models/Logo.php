<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    private static $portfolio,$image,$imageNewName,$directory,$imageUrl;

    public static function svelogo($request)
    {
        self::$portfolio = new Logo();
        self::$portfolio->logoimage = self::savelogoImage($request);
        self::$portfolio->save();
    }


    public static function savelogoImage($request)
    {
        self::$image = $request->file('logoimage');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAseet/assets/logo-image/';
        self::$imageUrl=self::$directory.  self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
}
