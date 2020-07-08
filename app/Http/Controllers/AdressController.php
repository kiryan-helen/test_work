<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addres;
use App\cities;
use App\areas;

class AdressController extends Controller
{
    public function show_all_adreses(){
        $adress = addres::show_all();
      
        foreach($adress as $tmp){
            $cities = cities::find_by_id( $tmp->city_id);
            $areas = areas::find_by_id( $tmp->city_id);
            $rezult[] =  [
                'id' => $tmp->id,
                'name' => $tmp->name,
                'city' => $cities[0]['title'], 
                'area' => $areas[0]['title'], 
                'street' => $tmp->street,
                'house' => $tmp->house,
                'additional_information' => $tmp->additional_information,
            ];
        }
        $cities=cities::show_all();
        $areas=areas::show_all();
        if(!isset($rezult))
            $rezult ="";
        return view('welcome', ['adreses' => $rezult, 'cities' => $cities, 'areas' => $areas]);
    }
    
    public function add_new_addres(){
        addres::add_new();
        return AdressController::show_all_adreses();
    }

    public function del_addres($id){
        addres::del_addres($id);
        return AdressController::show_all_adreses();
     }
}
