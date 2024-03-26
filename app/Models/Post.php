<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    //全行の取得
    public static function index()
    {
        $posts = DB::table('posts')->get();
        return $posts;
    }

    //単一の行/カラムを取得
    public function getSingle()
    {
        $post = DB::table('posts')->where('created_at', '2024-03-17 06:17:42')->first();
        return $post;
    }

    //カラム値のリストの取得
    public function getList()
    {
        $posts = DB::table('posts')->pluck('title', 'body')->toArray();
        return $posts;
    }
}
