<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addportfolio extends Model
{
    use HasFactory;
    private static $portfolio,$image,$imageNewName,$directory,$imageUrl;

    public static function savePortfolio($request)
    {
        self::$portfolio = new Addportfolio();
        self::$portfolio->portfolioname = $request->portfolioname;
        self::$portfolio->portfoliodescription = $request->portfoliodescription;
        self::$portfolio->portfoliolink = $request->portfoliolink;
        self::$portfolio->image = self::saveImage($request);
        self::$portfolio->save();
    }


    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName=rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory='adminAseet/assets/portfolio-image/';
        self::$imageUrl=self::$directory.  self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imageUrl;
    }
}
