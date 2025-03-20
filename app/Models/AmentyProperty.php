<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmentyProperty extends Model
{
    protected $guarded = ['id'];

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
