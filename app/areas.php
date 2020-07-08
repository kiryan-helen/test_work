<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class areas extends Model
{
    public static function show_all(){
        $areas=new areas();
        return $areas->get();
    }
    public static function find_by_id($id){
        $areas=new areas();
        return $areas->where('id', $id)->get('title');
    }
}
