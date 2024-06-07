<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planssub extends Model
{
    use HasFactory;

    Protected $table = 'planssub';
    protected $fillable=[
        'name',
        'slug',
        'stripe_plan',
        'price',
        'description',
    ];

    public function getRouteKeyName(){
        return 'slug';
    }
}
