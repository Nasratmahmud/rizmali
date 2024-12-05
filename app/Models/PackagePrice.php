<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Database\Eloquent\Model;

class PackagePrice extends Model
{
    //
    public function package()
    {
        return $this->belongsTo(Package::class);
    }


    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
