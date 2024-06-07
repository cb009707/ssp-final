<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Plan extends Model
{
    use HasFactory;

    Protected $table = 'plans';


    static public function userplan(){
        return self::select('plans.*')
        ->get();
    }

    static public function userplans(){
        return self::select('plans.*')
            ->where('user_id','=',Auth()->user()->id)
            ->get();
    }

    public static function countstandardplans()
    {
        return self::where('car_plan', 'Standard')->count();
    }


    public static function countpremiumplans()
    {
        return self::where('car_plan', 'Premium')->count();
    }




}
