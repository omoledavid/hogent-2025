<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Amenity extends Model
{
    protected $fillable = ['name', 'slug', 'icon'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($amenity) {
            $amenity->slug = Str::slug($amenity->name);
        });
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
