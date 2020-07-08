<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    public static function show_all(){
        $cities=new cities();
        return $cities->get();
    }

    public static function find_by_id($id){
        $cities=new cities();
        return $cities->where('id', $id)->get('title');
    }
}
