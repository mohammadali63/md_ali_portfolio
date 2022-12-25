<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    private static $message;
    public static function saveMessage($request){
        self::$message=new Message();
        self::$message->username = $request->username;
        self::$message->useremail = $request->useremail;
        self::$message->usermessage = $request->usermessage;
        self::$message->save();
    }
}
