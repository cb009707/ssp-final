<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'nic',
        'phone_number',
        'type',
        'payment',
        'card_No',
        'sec_No',
        'service',
        'address',
        'plate',
        'chasis',
        'discount',
    ];

    public static function bookuser()
    {
        return self::where('user_id', Auth()->user()->id)
            ->paginate(10);
    }

    public static function getServiceCountsForYear($year)
    {
        return self::select('service', DB::raw('count(*) as total'))
            ->whereYear('created_at', $year)
            ->groupBy('service')
            ->get();
    }

}
