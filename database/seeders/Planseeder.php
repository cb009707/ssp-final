<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\planssub;

class Planseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name'=>'Standard Plan',
                'slug'=>'Standard',
                'stripe_plan'=>'price_1PFU81Rp34CsmONydYYSOnAy',
                'price'=>126000,
                'description'=>'Standard Plan'
            ],
            [
                'name'=>'Premium Plan',
                'slug'=>'Premium',
                'stripe_plan'=>'price_1PFU8mRp34CsmONyfVci38Dj',
                'price'=>136000,
                'description'=>'Premium Plan'
            ]
        ];

        foreach ($plans as $plan){
            planssub::create($plan);
        }
    }
}
