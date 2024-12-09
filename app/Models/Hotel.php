<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //
    public function price()
    {
        return $this->hasOne(PackagePrice::class);
    }
    public function itinerary()
    {
        return $this->hasOne(PackagePrice::class);
    }
}
