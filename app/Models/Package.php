<?php

namespace App\Models;

use App\Models\PackagePrice;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    protected $guarded = [];


    public function price()
    {
        return $this->hasOne(PackagePrice::class);
    }

    public function itinerary()
    {
        return $this->hasOne(PackagePrice::class);
    }
}
