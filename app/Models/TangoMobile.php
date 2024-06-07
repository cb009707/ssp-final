<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TangoMobile extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'description',
        'parent_id',
        'status',
        'image',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
