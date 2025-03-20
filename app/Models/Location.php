<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Location extends Model
{
    protected $guarded = ['id'];
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($location) {
            $location->slug = Str::slug($location->name);
        });
    }

    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
