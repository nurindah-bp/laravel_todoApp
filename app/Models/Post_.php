<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post 
{
   private static $todo_app = [
    [
        "no" => "1",
        "task" => "Makan",
        "do" => "Progress",
        "done" => "Not Yet"
    ],
    [
        "no" => "2",
        "task" => "Mandi",
        "do" => "Done",
        "done" => "Done"
    ]
];

    public static function all()
    {
        return self::$todo_app;
    }
}