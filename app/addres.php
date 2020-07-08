<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cities;
use App\areas;

class addres extends Model
{
    protected $table = "adress";

    public static function show_all(){
        $addres=new addres();
        return $addres->get()->sortBy('name');
    }

    public static function add_new(){
        $addres = new addres();
        $check = $addres->where([['name', $_GET['name']],
        ['city_id', $_GET['city']],
        ['area_id', $_GET['area']],
        ['street', $_GET['street']],
        ['house', $_GET['house']],
        ['additional_information', $_GET['additional_information']]])->exists();
       if(!$check){
            $addres->name = $_GET['name'];
            $addres->city_id = $_GET['city'];
            $addres->area_id = $_GET['area'];
            $addres->street = $_GET['street'];
            $addres->house = $_GET['house'];
            $addres->additional_information = $_GET['additional_information'];
            $addres->save();    
        }
       
    }
    
    public static function del_addres($id){
      $addres = new addres();
      $addres =$addres-> where('id',$id)->delete();
    }

  
}
