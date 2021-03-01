<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{
    //Returns URL using primary key
    public function getUrl($id){
        $url = DB::table('posts')
                ->where('id', $id)
                ->value('url');
        return $url;
    }
    //Posts URL to database
    public function insertUrl($url){
        DB::table('posts')->insert([
            'url' => $url,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')   
        ]);

        return DB::getPdo()->lastInsertId();
    }
}
